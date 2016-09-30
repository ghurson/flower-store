<?php

use Illuminate\Database\Seeder;

class RecipientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\Recipient::create([
          'name' => 'Samantha Gindes',
          'address' => '859 Flagler Drive, Gaithersburg MD 20878',
          'user_id' => 1
        ]);

    }
}
