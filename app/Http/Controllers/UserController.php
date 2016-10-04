<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
  
class UserController extends Controller
{
    public function dashboard(){

      return view("user.dashboard",[
        'user' => \Auth::user()
      ]);

    }

  public function orders(User $user){

    return view("user.order.display", [
      'user' => $user,
      'orders' => $user->orders
    ]);

  }

}
