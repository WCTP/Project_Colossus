<?php

namespace App\Http\Controllers;

use App\player;
use Illuminate\Http\Request;
use App\User;
use Auth;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_stats()
    {
        return view('player.stats');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_spheres()
    {
        return view('player.spheres');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('player.create');
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
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'username' => 'required|string|max:25',
          'password' => 'required|string|min:6|confirmed'
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        return view('player.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        return view('player.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        $this->validate(request(), [
          'name' => 'required',
          'email' => 'required',
          'username' => 'required',
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->privilege = $request->input('privilege');
        $user->sphere_ess = $request->input('sphere_ess');
        $user->sphere_spd = $request->input('sphere_spd');
        $user->sphere_atk = $request->input('sphere_atk');
        $user->sphere_def = $request->input('sphere_def');
        $user->sphere_magic = $request->input('sphere_magic');
        $user->sphere_skill = $request->input('sphere_skill');
        $user->sphere_lvl_1 = $request->input('sphere_lvl_1');
        $user->sphere_lvl_2 = $request->input('sphere_lvl_2');
        $user->sphere_lvl_3 = $request->input('sphere_lvl_3');
        $user->sphere_lvl_4 = $request->input('sphere_lvl_4');
        $user->sphere_vit = $request->input('sphere_vit');
        $user->sphere_dex = $request->input('sphere_dex');
        $user->sphere_con = $request->input('sphere_con');
        $user->sphere_int = $request->input('sphere_int');
        $user->sphere_wis = $request->input('sphere_wis');
        $user->sphere_cha = $request->input('sphere_cha');
        $user->inventory = $request->input('inventory');
        $user->save();

        return view('/player/stats');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(player $player)
    {
        //
    }

    public function logout()
    {
      Auth::logout();

      return back();
    }
}
