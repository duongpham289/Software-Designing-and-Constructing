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
            'email'=>'tuanadbac@email.com',
            'password'=>'password'
            ],
            [
            'name'=>'HieuBui',
            'phone'=>'0931231984',
            'email'=>'Hieubui@email.com',
            'password'=>'password'
            ],
            ['name'=>'DuongPham',
            'phone'=>'09312431242',
            'email'=>'DuongPhamc@email.com',
            'password'=>'password'
            ],
            [
            'name'=>'DucanhBui',
            'phone'=>'0931431242',
            'email'=>'Anhducbui@email.com',
            'password'=>'password'
            ]
        ]);
    }
}
