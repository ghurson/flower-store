<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Order::create([
        'budget_id' => 1,
        'title' => 'Birthday Flowers',
        'delivery' => new Carbon('7/5/17'),
        'user_id' => 1,
        'recipient_id' => 1
      ]);
    }
}
