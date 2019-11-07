<?php

use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rooms')->insert(
            [
                'name' => '101',
                'floor' => 1,
                'description' => '101',
            ]
        );

        DB::table('rooms')->insert(
            [
                'name' => '102',
                'floor' => 1,
                'description' => '101',
            ]
        );

        DB::table('rooms')->insert(
            [
                'name' => '103',
                'floor' => 1,
                'description' => '101',
            ]
        );

        DB::table('rooms')->insert(
            [
                'name' => '104',
                'floor' => 1,
                'description' => '101',
            ]
        );
    }
}
