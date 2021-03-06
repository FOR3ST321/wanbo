<?php

namespace App\Http\Controllers;

use App\Models\StoreBranch;
use App\Http\Requests\StoreStoreBranchRequest;
use App\Http\Requests\UpdateStoreBranchRequest;

class StoreBranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStoreBranchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStoreBranchRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StoreBranch  $storeBranch
     * @return \Illuminate\Http\Response
     */
    public function show(StoreBranch $storeBranch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StoreBranch  $storeBranch
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreBranch $storeBranch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStoreBranchRequest  $request
     * @param  \App\Models\StoreBranch  $storeBranch
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStoreBranchRequest $request, StoreBranch $storeBranch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StoreBranch  $storeBranch
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreBranch $storeBranch)
    {
        //
    }
}
