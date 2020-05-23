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
        DB::table('hotels')->insert([
            ['name' => 'Mường thanh','address' => 'Hà Nội','images' =>'', 'detail'=>'','suggest_price'=>1000000],
            ['name' => 'baro','address' => 'Hà Nội','images' =>'', 'detail'=>'','suggest_price'=>1000000],
            ['name' => 'hello','address' => 'Hà Nội','images' =>'', 'detail'=>'','suggest_price'=>1000000],
            ['name' => 'Biển xanh','address' => 'Hà Nội','images' =>'', 'detail'=>'','suggest_price'=>1000000],
            ['name' => 'Hà Nội','address' => 'Hà Nội','images' =>'', 'detail'=>'','suggest_price'=>1000000],
            ['name' => 'Sao Mai','address' => 'Hà Nội','images' =>'', 'detail'=>'','suggest_price'=>1000000],
            ['name' => 'Đâu Cũng Được','address' => 'Hà Nội','images' =>'', 'detail'=>'','suggest_price'=>1000000],
            ['name' => 'Sài Gòn','address' => 'Hà Nội','images' =>'', 'detail'=>'','suggest_price'=>1000000],
        ]);
    }
}
