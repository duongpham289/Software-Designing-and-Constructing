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
        DB::table('room')->insert([
        ['hotel_id'=>'1','name' => '102','type' => 'Phòng đôi','price' =>'200', 'detail'=>''],
        ['hotel_id'=>'2','name' => '101','type' => 'Phòng đơn','price' =>'250', 'detail'=>''],
        ['hotel_id'=>'3','name' => '106','type' => 'Phòng đôi','price' =>'170', 'detail'=>''],
        ['hotel_id'=>'4','name' => '205','type' => 'Phòng đơn','price' =>'350', 'detail'=>''],
        ['hotel_id'=>'5','name' => '207','type' => 'Phòng đôi','price' =>'260', 'detail'=>''],
        ['hotel_id'=>'6','name' => '301','type' => 'Phòng đơn','price' =>'180', 'detail'=>''],
        ]);
    }
}
