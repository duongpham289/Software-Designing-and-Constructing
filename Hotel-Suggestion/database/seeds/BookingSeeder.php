<?php

use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->insert([
            ['account_id'=>'1',
            'room_id'=>'3',
            'name'=>'tuan',
            'phone'=>'0931231242',
            'address'=>'Hanoi',
            'nationality'=>'Vietnam',
            'created_at'=>now()
            ],
            [
                'account_id'=>'2',
                'room_id'=>'2',
                'name'=>'hieu',
            'phone'=>'0931231984',
            'address'=>'Hanoi',
            'nationality'=>'Vietnam',
            'created_at'=>now()

            ],
            ['account_id'=>'4',
            'room_id'=>'1',
            'name'=>'ducanh',
            'phone'=>'09312431242',
            'address'=>'Hanoi',
            'nationality'=>'Vietnam',
            'created_at'=>now()

            ],
            [
                'account_id'=>'1',
                'room_id'=>'5',
                'name'=>'tuan',
            'phone'=>'0931431242',
            'address'=>'Hanoi',
            'nationality'=>'Vietnam',
            'created_at'=>now()

            ]
        ]);
    }
}
