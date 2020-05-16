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
            ['detail'=>'san pham rat tot'],
            ['detail'=>'san pham rat te'],
            ['detail'=>'san pham binh thuong'],

        ]);
    }
}
