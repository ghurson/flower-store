<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Recipient;

class RecipientController extends Controller
{
    public function display(Recipient $recipient){
      return view('recipient.display',[
        'recipient' => $recipient
      ]);
    }

    public function create(Request $request){

      Recipient::create([
        'user_id' => \Auth::user()->id,
        'name' => $request->name,
        'address' => $request->address
      ]);

      return redirect("dashboard");

    }


    public function update(Request $request){

        $recipient = Recipient::find($request->id);

        $recipient->name = $request->name;
        $recipient->address = $request->address;

        $recipient->save();

        return redirect("/dashboard");

    }

    public function delete(Recipient $recipient){

      $recipient->delete();

      return redirect("/dashboard");

    }

}
