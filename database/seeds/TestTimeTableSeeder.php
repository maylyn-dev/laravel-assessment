<?php

use Illuminate\Database\Seeder;

class TestTimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test_time')->truncate();

        DB::table('test_time')->insert([
            ['hour' => '00:00'],
            ['hour' => '01:00'],
            ['hour' => '02:00'],
            ['hour' => '03:00'],
            ['hour' => '04:00'],
            ['hour' => '05:00'],
            ['hour' => '06:00'],
            ['hour' => '07:00'],
            ['hour' => '08:00'],
            ['hour' => '09:00'],
            ['hour' => '10:00'],
            ['hour' => '11:00'],
            ['hour' => '12:00'],
            ['hour' => '13:00'],
            ['hour' => '14:00'],
            ['hour' => '15:00'],
            ['hour' => '16:00'],
            ['hour' => '17:00'],
            ['hour' => '18:00'],
            ['hour' => '19:00'],
            ['hour' => '20:00'],
            ['hour' => '21:00'],
            ['hour' => '22:00'],
            ['hour' => '23:00'],
            ['hour' => '24:00']
        ]);
    }
}
