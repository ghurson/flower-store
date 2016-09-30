<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RecipientController extends Controller
{
    public function display(App\User $user){
      dd($user);
    }
}
