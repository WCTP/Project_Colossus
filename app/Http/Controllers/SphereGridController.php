<?php

namespace App\Http\Controllers;

use App\sphere_grid;
use Illuminate\Http\Request;
use Auth;

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

    public function destroy_all()
    {
      sphere_grid::truncate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
          'x_pos' => 'required',
          'y_pos' => 'required',
          'sphere_type' => 'required'
        ]);

        $sphere_text = explode(";", $request->input('sphere_type_value'));
        $max = count($sphere_text);
        $counter = 0;

        $sphere = new sphere_grid();
        $sphere->x_pos = $request->input('x_pos');
        $sphere->y_pos = $request->input('y_pos');
        $sphere->sphere_type = $request->input('sphere_type');
        if ($counter < $max) {
          $sphere->sphere_stat = $sphere_text[$counter];
          $counter++;
        }
        if ($counter < $max) {
          $sphere->sphere_type_value = $sphere_text[$counter];
          $counter++;
        }
        if ($counter < $max) {
          $sphere->connected_sphere_id_1 = $sphere_text[$counter];
          $counter++;
        }
        if ($counter < $max) {
          $sphere->connected_sphere_id_2 = $sphere_text[$counter];
          $counter++;
        }
        if ($counter < $max) {
          $sphere->connected_sphere_id_3 = $sphere_text[$counter];
          $counter++;
        }
        if ($counter < $max) {
          $sphere->connected_sphere_id_4 = $sphere_text[$counter];
          $counter++;
        }
        $sphere->save();

        return $sphere;
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

    public function update_user_id(Request $request)
    {
      $user = Auth::user();
      $return_status = "failed";

      if ($user->player_level > 0) {
        $new_sphere = sphere_grid::find($request->input('new_id'));
        $old_sphere = sphere_grid::find($request->input('old_id'));

        $new_sphere->current_user_id_1 = $request->input('user_id');
        $old_sphere->current_user_id_1 = null;

        $user->player_level = $user->player_level - 1;

        $new_sphere->save();
        $old_sphere->save();
        $user->save();

        $return_status = $user->player_level;
      }

      return $return_status;
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
