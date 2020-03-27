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
        DB::table('orders')->truncate();

        DB::table('orders')->insert([
            [
                'item'          => 'Apple',
                'quantity'      =>  5,
                'unit_price'    =>  2.45,
                'customer_id'   =>  1
            ], 
            [
                'item'          => 'Orange',
                'quantity'      =>  12,
                'unit_price'    =>  0.5,
                'customer_id'   =>  2
            ], 
            [
                'item'          => 'Pineapple',
                'quantity'      =>  2,
                'unit_price'    =>  12.00,
                'customer_id'   =>  2
            ], 
            [
                'item'          => 'Peach',
                'quantity'      =>  7,
                'unit_price'    =>  6.00,
                'customer_id'   =>  1
            ], 
            [
                'item'          => 'Durian',
                'quantity'      =>  1,
                'unit_price'    =>  23.70,
                'customer_id'   =>  1
            ]
        ]);
    }
}
