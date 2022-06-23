<?php

namespace App\Http\Controllers;

use App\Canada_submenu;
use Illuminate\Http\Request;

class CanadaSubmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = Canada_submenu::find($id);
        return view('admin.addcanada',compact('data1'))
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Canada_submenu  $canada_submenu
     * @return \Illuminate\Http\Response
     */
    public function show(Canada_submenu $canada_submenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Canada_submenu  $canada_submenu
     * @return \Illuminate\Http\Response
     */
    public function edit(Canada_submenu $canada_submenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Canada_submenu  $canada_submenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Canada_submenu $canada_submenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Canada_submenu  $canada_submenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Canada_submenu $canada_submenu)
    {
        //
    }
}
