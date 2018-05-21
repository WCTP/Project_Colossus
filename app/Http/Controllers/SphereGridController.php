<?php

namespace App\Http\Controllers;

use App\sphere_grid;
use Illuminate\Http\Request;

class SphereGridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_combat()
    {
        return view('sphere_grid.combat');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_skills()
    {
        return view('sphere_grid.skills');
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
     * @param  \App\sphere_grid  $sphere_grid
     * @return \Illuminate\Http\Response
     */
    public function show(sphere_grid $sphere_grid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sphere_grid  $sphere_grid
     * @return \Illuminate\Http\Response
     */
    public function edit(sphere_grid $sphere_grid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sphere_grid  $sphere_grid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sphere_grid $sphere_grid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sphere_grid  $sphere_grid
     * @return \Illuminate\Http\Response
     */
    public function destroy(sphere_grid $sphere_grid)
    {
        //
    }
}
