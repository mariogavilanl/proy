<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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

 public function caca(Request $request)
    {
        dd($request);
        

    }

    public function faq()
    {
        return view('faq');
    }
    
    public function historial()
    {
        return view('historial');
    }


}
