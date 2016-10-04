<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    protected $fillable = [
       'title', 'delivery', 'price', 'recipient_id', 'user_id'
    ];


    public function purchaser(){
      return $this->belongsTo('App\User', 'user_id');
    }

    public function recipient(){
      return $this->belongsTo('App\Recipient','recipient_id');
    }

}
