<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->insert(
            [
                'title' => 'Mr',
                'name' => 'John',
                'last_name' => 'Doe',
                'address' => 'Street',
                'zip_code' => '123123',
                'city' => 'Tulsa',
                'state' => 'OK',
                'email' => 'john@example.com',
            ]
        );

        DB::table('clients')->insert(
            [
                'title' => 'Mrs',
                'name' => 'Jane',
                'last_name' => 'Doe',
                'address' => 'Street 123123',
                'zip_code' => '00200',
                'city' => 'Los Angeles',
                'state' => 'CA',
                'email' => 'jane@example.com',
            ]
        );
    }
}
