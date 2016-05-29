<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Repositories\EstoqueRepository;

class EstoqueController extends Controller
{

	/**
	 * @var EstoqueRepository
	 */
	private $repository;


	public function __construct(EstoqueRepository $repository)
	{
		$this->repository = $repository;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index($id)
	{
		return $this->repository->findWhere(['CODPRO' => $id]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($codPro, $codLoja)
	{
		return $this->repository->findWhere(['CODPRO' => $codPro, 'CODLOJA' => $codLoja]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $codPro, $codLoja)
	{
		if ($this->repository->update($request->all(), ['CODPRO' => $codPro, 'CODLOJA' => $codLoja])) {
			return response('1', 200);
		} else {
			return response('', 400);
		}
	}

}
