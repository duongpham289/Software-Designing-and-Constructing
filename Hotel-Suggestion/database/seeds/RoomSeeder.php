<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
        ['hotel_id'=>'1','type' => 'Phòng đôi','price' =>200000, 'detail'=>'','status'=>true,'images'=>''],
        ['hotel_id'=>'2','type' => 'Phòng đơn','price' =>250000, 'detail'=>'','status'=>true,'images'=>''],
        ['hotel_id'=>'3','type' => 'Phòng đôi','price' =>170000, 'detail'=>'','status'=>true,'images'=>''],
        ['hotel_id'=>'4','type' => 'Phòng đơn','price' =>350000, 'detail'=>'','status'=>true,'images'=>''],
        ['hotel_id'=>'5','type' => 'Phòng đôi','price' =>260000, 'detail'=>'','status'=>true,'images'=>''],
        ['hotel_id'=>'6','type' => 'Phòng đơn','price' =>180000, 'detail'=>'','status'=>true,'images'=>''],
        ]);
    }
}
