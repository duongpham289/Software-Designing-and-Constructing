<?php

use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotel')->insert([
            ['name' => 'Mường thanh','address' => 'Hà Nội','images' =>'', 'detail'=>''],
            ['name' => 'baro','address' => 'Hà Nội','images' =>'', 'detail'=>''],
            ['name' => 'hello','address' => 'Hà Nội','images' =>'', 'detail'=>''],
            ['name' => 'Biển xanh','address' => 'Hà Nội','images' =>'', 'detail'=>''],
            ['name' => 'Hà Nội','address' => 'Hà Nội','images' =>'', 'detail'=>''],
            ['name' => 'Sao Mai','address' => 'Hà Nội','images' =>'', 'detail'=>''],
            ['name' => 'Đâu Cũng Được','address' => 'Hà Nội','images' =>'', 'detail'=>''],
            ['name' => 'Sài Gòn','address' => 'Hà Nội','images' =>'', 'detail'=>''],
        ]);
    }
}
