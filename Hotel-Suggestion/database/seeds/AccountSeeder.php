<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account')->insert([
            ['email'=>'tuanadbac@email.com',
            'password'=>'password',
            'level'=>1
            ],
            ['email'=>'Hieubui@email.com',
            'password'=>'password',
            'level'=>1
            ],
            ['email'=>'DuongPham@email.com',
            'password'=>'password',
            'level'=>1
            ],
            ['email'=>'Anhducbui@email.com',
            'password'=>'password',
            'level'=>1
            ],
        ]);
    }
}
