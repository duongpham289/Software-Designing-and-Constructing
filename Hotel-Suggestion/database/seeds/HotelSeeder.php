<?php

use Illuminate\Database\Seeder;

class hotel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotel')->insert([
            ['name' => 'Mường thanh','address' => 'Hà Nội','images' =>'', 'details'=>''],
            ['name' => 'baro','address' => 'Hà Nội','images' =>'', 'details'=>''],
            ['name' => 'hello','address' => 'Hà Nội','images' =>'', 'details'=>''],
            ['name' => 'Biển xanh','address' => 'Hà Nội','images' =>'', 'details'=>''],
            ['name' => 'Hà Nội','address' => 'Hà Nội','images' =>'', 'details'=>''],
            ['name' => 'Sao Mai','address' => 'Hà Nội','images' =>'', 'details'=>''],
            ['name' => 'Đâu Cũng Được','address' => 'Hà Nội','images' =>'', 'details'=>''],
            ['name' => 'Sài Gòn','address' => 'Hà Nội','images' =>'', 'details'=>''],
        ]);
    }
}
