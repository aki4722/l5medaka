<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends AuthController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      parent::__construct(); //継承元のコンストラクタ呼出
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
}
