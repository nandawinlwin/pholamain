<?php

use Illuminate\Database\Seeder;

class UserLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('userlevels')->insert([
            [
                'name'=>'normal',
                'count'=>'5'
            ],

            [
                'name'=>'silber',
                'count'=>'20'
            ],
            [
                'name'=>'gold',
                'count'=>'50'
            ],

        ]);
    }
}
