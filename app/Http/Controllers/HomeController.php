<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\document_general;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function create()
    {
      return view('layouts.create');
    }

    public function logout()
    {
      Auth::logout();

      return back();
    }

    public function search()
    {
      $keyword = document_general::get_category();

      $results = document_general::where('title', 'LIKE', '%' . $keyword . '%')
        ->get()->toArray();

      return $results;
    }
}
