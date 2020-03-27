<?php

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->truncate();

        DB::table('transactions')->insert([
            [
                'order_id'          => 1001,
                'transaction_date'  => '2016-11-25 02:00:00'
            ], 
            [
                'order_id'          => 1002,
                'transaction_date'  => '2016-11-26 16:30:00'
            ], 
            [
                'order_id'          => 1003,
                'transaction_date'  => '2016-11-26 12:32:00'
            ], 
            [
                'order_id'          => 1004,
                'transaction_date'  => '2016-11-27 07:45:00'
            ], 
            [
                'order_id'          => 1005,
                'transaction_date'  => '2016-11-28 23:05:00'
            ]
        ]);
    }
}
