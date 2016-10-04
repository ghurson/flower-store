<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;
use App\Recipient;

class OrderController extends Controller
{

  static function createPage(){
    return view('order.create',[
      'user' => \Auth::user()
    ]);
  }

  static function create(Request $request){
    \App\Order::create([
      'title' => $request->title,
      'delivery' => $request->delivery,
      'price' => $request->price,
      'recipient_id' => $request->recipient,
      'user_id' => \Auth::user()->id
    ]);

    return redirect('/dashboard');

  }

    static function display(Order $order){
      return view("order.display",[
        'order' => $order
      ]);
    }

    static function update(Request $request){

      $order = Order::find($request->id);

      $order->title = $request->title;

      $order->save();

      return redirect('dashboard');

    }


}
