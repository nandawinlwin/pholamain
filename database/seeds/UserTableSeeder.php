<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'Nanda Win Lwin',
                'email'=>'nandawinlwin.mm@gmail.com',
                'password'=>bcrypt('Nanda@123'),
                'type'=>'admin',
                'active'=>'1',
                'disbale'=>'0',
            ],

            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('Admin@123'),
                'type'=>'admin',
                'active'=>'1',
                'disbale'=>'0',
            ]
        ]);
    }
}
