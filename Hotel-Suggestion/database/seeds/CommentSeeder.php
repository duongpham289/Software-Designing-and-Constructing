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
        DB::table('comments')->insert([
            [
                'account_id'=>'1',
                'hotel_id'=>'2',
                'detail'=>'san pham rat tot',
                'commenttime'=>now()
            ],
            [
                'account_id'=>'2',
                'hotel_id'=>'3',
                'detail'=>'san pham rat te',
                'commenttime'=>now()
            ],
            [
                'account_id'=>'3',
                'hotel_id'=>'4',
                'detail'=>'san pham binh thuong',
                'commenttime'=>now()
            ],

        ]);
    }
}
