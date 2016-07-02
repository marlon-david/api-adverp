<?php

namespace App\Http\Controllers;

use App\Services\OsService;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Repositories\OsRepository;

class OsController extends Controller
{
    /**
     * @var OsRepository
     */
    private $repository;
    /**
     * @var OsService
     */
    private $service;

    public function __construct(OsRepository $repository, OsService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->service->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->repository->find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($this->service->update($request->all(), $id)) {
            return response('1', 200);
        } else {
            return response('', 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->repository->delete($id)) {
            return response('1', 200);
        } else {
            return response('', 400);
        }
    }
}
