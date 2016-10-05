<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class AdminController extends Controller
{

  public function dashboard(){

    return view('admin.dashboard',[
      'users' => User::all()
    ]);

  }

}
