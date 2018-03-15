<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AuthController;

class AdminController extends AuthController
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
      * Display a listing of the resource.
      *
      * @return void
      */
      public function index()
      {
          return view('admin.dashboard');
      }
}
