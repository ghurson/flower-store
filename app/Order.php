<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    protected $fillable = [
       'title', 'delivery', 'budget_id', 'recipient_id', 'user_id'
    ];

    protected $dates = ['delivery'];


    public function purchaser(){
      return $this->belongsTo('App\User', 'user_id');
    }

    public function recipient(){
      return $this->belongsTo('App\Recipient','recipient_id');
    }


}
