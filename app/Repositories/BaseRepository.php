<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder as EloquentQueryBuilder;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Pagination\AbstractPaginator as Paginator;

abstract class BaseRepository {

	/**
	 * Model class for repo.
	 *
	 * @var string
	 */
	protected $modelClass;

	/**
	 * @return EloquentQueryBuilder|QueryBuilder
	 */
	protected function newQuery()
	{
		return app($this->modelClass)->newQuery();
	}

	/**
	 * @param EloquentQueryBuilder|QueryBuilder $query
	 * @param int                               $take
	 * @param bool                              $paginate
	 *
	 * @return EloquentCollection|Paginator
	 */
	protected function doQuery($query = null, $take = 15, $paginate = true)
	{
		if (is_null($query)) {
			$query = $this->newQuery();
		}

		$request = app('request');

		$sort = $request->get('sort');

		$appends = [];

		if ($sort) {
			$appends['sort'] = $sort;
			$appends['order'] = strtolower($request->get('order')) == 'desc' ? 'desc' : 'asc';
			$query->orderBy($sort, $appends['order']);
		}

		if (true == $paginate) {
			return $query->paginate($take, $this->getSelectable())->appends($appends);
		}

		if ($take > 0 || false !== $take) {
			$query->take($take);
		}

		return $query->get($this->getSelectable());
	}

	/**
	 * Returns all records.
	 * If $take is false then brings all records
	 * If $paginate is true returns Paginator instance.
	 *
	 * @param int  $take
	 * @param bool $paginate
	 *
	 * @return EloquentCollection|Paginator
	 */
	public function all($take = 15, $paginate = true)
	{
		return $this->doQuery(null, $take, $paginate);
	}

	/**
	 * @param string      $column
	 * @param string|null $key
	 *
	 * @return \Illuminate\Support\Collection
	 */
	public function lists($column, $key = null)
	{
		return $this->newQuery()->lists($column, $key);
	}

	/**
	 * Retrieves a record by his id
	 * If fail is true $ fires ModelNotFoundException.
	 *
	 * @param int  $id
	 * @param bool $fail
	 *
	 * @return Model
	 */
	public function find($id, $fail = true)
	{
		$query = $this->newQuery();

		$query->select($this->getSelectable());

		if ($fail) {
			return $query->findOrFail($id);
		}

		return $query->find($id);
	}

	/**
	 */
	public function findWhere($where)
	{
		$query = $this->newQuery();

		$query->where($where);

		return $query->get($this->getSelectable());
	}

	public function create(array $values)
	{
		return $this->insertGetId($values);
	}

	/**
	 * @author Marlon
	 */
	protected function insertGetId(array $values)
	{
		$query = $this->newQuery();
		$connection = $query->getConnection();
		$grammar = $connection->getQueryGrammar();

		if (empty($values)) {
			return true;
		}

		// Since every insert gets treated like a batch insert, we will make sure the
		// bindings are structured in a way that is convenient for building these
		// inserts statements by verifying the elements are actually an array.
		if (! is_array(reset($values))) {
			$values = [$values];
		}

		// Since every insert gets treated like a batch insert, we will make sure the
		// bindings are structured in a way that is convenient for building these
		// inserts statements by verifying the elements are actually an array.
		else {
			foreach ($values as $key => $value) {
				ksort($value);
				$values[$key] = $value;
			}
		}

		// We'll treat every insert like a batch insert so we can easily insert each
		// of the records into the database consistently. This will make it much
		// easier on the grammars to just handle one type of record insertion.
		$bindings = [];

		foreach ($values as $record) {
			foreach ($record as $value) {
				$bindings[] = $value;
			}
		}

		$model = app($this->modelClass);

		$sql = $grammar->compileInsert($query->getQuery(), $values);

		$sql .= ' returning ' . app($this->modelClass)->getKeyName();

		return $connection->select($sql, $bindings);
	}

	public function update(array $values, $id)
	{
		$query = $this->newQuery();

		$model = app($this->modelClass);

		if (is_array($id))
			$query->where($id);
		else
			$query->where($model->getKeyName(), '=', $id);

		return $query->update($values);
	}

	public function delete($id)
	{
		$query = $this->newQuery();

		if (is_array($id))
			$query->where($id);
		else
			$query->where(app($this->modelClass)->getKeyName(), '=', $id);

		return $query->delete($id);
	}

	public function getModel()
	{
		return app($this->modelClass);
	}

	protected function getSelectable()
	{
		$model = $this->getModel();

		if (property_exists($model, 'selectable'))
			return $model->selectable;

		return ['*'];
	}
}