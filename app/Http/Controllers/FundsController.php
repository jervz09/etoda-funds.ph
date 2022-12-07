<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFundsRequest;
use App\Http\Requests\UpdateFundsRequest;
use App\Models\Funds;

class FundsController extends Controller
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
     * @param  \App\Http\Requests\StoreFundsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFundsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Funds  $funds
     * @return \Illuminate\Http\Response
     */
    public function show(Funds $funds)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Funds  $funds
     * @return \Illuminate\Http\Response
     */
    public function edit(Funds $funds)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFundsRequest  $request
     * @param  \App\Models\Funds  $funds
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFundsRequest $request, Funds $funds)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Funds  $funds
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funds $funds)
    {
        //
    }
}
