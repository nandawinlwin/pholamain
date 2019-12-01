<?php

use Illuminate\Database\Seeder;

class UserRowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('userrows')->insert([
            [
                'name'=>'admin'
            ],

            [
                'name'=>'editor'
            ],
            [
                'name'=>'user'
            ]
        ]);
    }
}
