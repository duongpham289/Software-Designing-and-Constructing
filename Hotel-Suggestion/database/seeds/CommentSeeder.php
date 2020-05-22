<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comment')->insert([
            ['user_id'=>'1','hotel_id'=>'2','detail'=>'san pham rat tot'],
            ['user_id'=>'2','hotel_id'=>'3','detail'=>'san pham rat te'],
            ['user_id'=>'3','hotel_id'=>'4','detail'=>'san pham binh thuong'],

        ]);
    }
}
