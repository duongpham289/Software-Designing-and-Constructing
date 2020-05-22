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
        DB::table('accounts')->insert([
            [
                'name'=>'tuan',
                'email'=>'tuanadbac@email.com',
                'password'=>'password',
                'level'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'hieu',
                'email'=>'Hieubui@email.com',
                'password'=>'password',
                'level'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'duong',
                'email'=>'DuongPham@email.com',
                'password'=>'password',
                'level'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'ducanh',
                'email'=>'Anhducbui@email.com',
                'password'=>'password',
                'level'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
        ]);
    }
}
