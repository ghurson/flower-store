<?php

use Illuminate\Database\Seeder;

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
        'price' => 50,
        'title' => 'Birthday Flowers',
        'delivery' => '7/15/17',
        'user_id' => 1,
        'recipient_id' => 1
      ]);
    }
}
