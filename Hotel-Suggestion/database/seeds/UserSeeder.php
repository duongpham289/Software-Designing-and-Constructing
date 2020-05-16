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
            ['name'=>'Tuan',
            'phone'=>'0931231242',
            'password'=>'password'
            ],
            [
            'name'=>'HieuBui',
            'phone'=>'0931231984',
            'password'=>'password'
            ],
            ['name'=>'DuongPham',
            'phone'=>'09312431242',
            'password'=>'password'
            ],
            [
            'name'=>'DucanhBui',
            'phone'=>'0931431242',
            'password'=>'password'
            ]
        ]);
    }
}
