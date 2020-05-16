<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['first_name'=>'Tuan',
            'last_name'=>'Le',
            'phone'=>'0931231242',
            'password'=>'password'
            ],
            [
                'first_name'=>'Hieu',
                'last_name'=>'Bui',
            'phone'=>'0931231984',
            'password'=>'password'
            ],
            ['first_name'=>'duong',
            'last_name'=>'pham',
            'phone'=>'09312431242',
            'password'=>'password'
            ],
            [
                'first_name'=>'duc anh',
                'last_name'=>'bui',
            'phone'=>'0931431242',
            'password'=>'password'
            ]
        ]);
    }
}
