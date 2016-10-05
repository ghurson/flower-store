<?php

use Illuminate\Database\Seeder;

class BudgetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Budget::create([
          'title' => 'Date Night',
          'low' => 50,
          'high' => 100
        ]);

        \App\Budget::create([
          'title' => 'Anniversary',
          'low' => 101,
          'high' => 200
        ]);

        \App\Budget::create([
          'title' => 'Forgotten Aniversary',
          'low' => 201,
          'high' => 500
        ]);
    }
}
