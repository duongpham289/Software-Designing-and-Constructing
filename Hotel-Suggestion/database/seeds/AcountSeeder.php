<?php

use Illuminate\Database\Seeder;

class AcountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('acount')->insert([
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
