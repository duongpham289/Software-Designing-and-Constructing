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
        DB::table('room')->insert
        (['name' => '102','type' => 'Phòng đôi','price' =>'200', 'details'=>'']);
        (['name' => '101','type' => 'Phòng đơn','price' =>'250', 'details'=>'']);
        (['name' => '106','type' => 'Phòng đôi','price' =>'170', 'details'=>'']);
        (['name' => '205','type' => 'Phòng đơn','price' =>'350', 'details'=>'']);
        (['name' => '207','type' => 'Phòng đôi','price' =>'260', 'details'=>'']);
        (['name' => '301','type' => 'Phòng đơn','price' =>'180', 'details'=>'']);
    }
}
