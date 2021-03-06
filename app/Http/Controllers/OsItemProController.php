<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Repositories\OsItemProRepository;
use App\Services\OsItemProService;

class OsItemProController extends Controller
{

	/**
	 * @var OsItemProRepository
	 */
	private $repository;

	/**
	 * @var OsItemProService
	 */
	private $service;

	public function __construct(OsItemProRepository $repository, OsItemProService $service)
	{
		$this->repository = $repository;
		$this->service = $service;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index($codOs)
	{
		return $this->repository->findWhere(['CODOS' => $codOs]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request, $codOs)
	{
		$data = $request->all();
		$data['CODOS'] = $codOs;

		return $this->service->create($data);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param int $codOs
	 * @param int $codPro
	 *
	 * @return \Illuminate\Http\Response
	 * @internal param int $id
	 */
	public function show($codOs, $codPro)
	{
		return $this->repository->findWhere(['CODOS' => $codOs, 'CODPRO' => $codPro]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $codOs
	 * @param  int  $codPro
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $codOs, $codPro)
	{
		if ($this->service->update($request->all(), ['CODOS' => $codOs, 'CODPRO' => $codPro])) {
			return response('1', 200);
		} else {
			return response('', 400);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $codOs
	 * @param  int  $codPro
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($codOs, $codPro)
	{
		if ($this->repository->delete(['CODOS' => $codOs, 'CODPRO' => $codPro])) {
			return response('1', 200);
		} else {
			return response('', 400);
		}
	}
}
