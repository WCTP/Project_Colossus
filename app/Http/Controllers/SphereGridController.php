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
        $spheres = sphere_grid::all()->toArray();

        return view('sphere_grid.combat', compact('spheres'));
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
        sphere_grid::truncate();

        $this->validate(request(), [
          'x_pos' => 'required',
          'y_pos' => 'required',
          'connected_sphere_id_1' => 'required',
          'sphere_type' => 'required'
        ]);

        $sphere = new sphere_grid();
        $sphere->x_pos = $request->input('x_pos');
        $sphere->y_pos = $request->input('y_pos');
        $sphere->current_user_id_1 = $request->input('current_user_id_1');
        $sphere->current_user_id_2 = $request->input('current_user_id_2');
        $sphere->current_user_id_3 = $request->input('current_user_id_3');
        $sphere->current_user_id_4 = $request->input('current_user_id_4');
        $sphere->sphere_type = $request->input('sphere_type');
        $sphere->sphere_type_value = $request->input('sphere_type_value');
        $sphere->save();
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
