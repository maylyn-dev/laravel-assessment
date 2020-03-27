<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->truncate();

        DB::table('customers')->insert([
            [
                'name'      => 'Adam',
                'address'   => '12, Jalan ABC',
                'age'       => 25
            ], 
            [
                'name'      => 'Jane',
                'address'   => 'D-12-6 Wisma ABC',
                'age'       => 40
            ], 
            [
                'name'      => 'Dylan',
                'address'   => '12A, Solok ABC',
                'age'       => 16
            ]
        ]);
    }
}
