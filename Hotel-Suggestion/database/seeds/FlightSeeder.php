<?php

use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flights')->insert([
            [
                'name'=>'Vn1234',
                'from'=>'Hà Nội',
                'to'=>'Tp HCM',
                'depature'=>'2020-06-15',
                'return'=>null,
                'price'=>'1000000',
                'time'=>'09:30:00',

            ],
            [
                'name'=>'Vn4321',
                'from'=>'Tp HCM',
                'to'=>'Đà Nẵng',
                'depature'=>'2020-07-18',
                'return'=>'2020-07-20',
                'price'=>'1000000',
                'time'=>'10:30:00',

            ],
            [
                'name'=>'Vn1243',
                'from'=>'Đà Nẵng',
                'to'=>'Nghệ An',
                'depature'=>'2020-08-23',
                'return'=>'2020-08-30',
                'price'=>'1000000',
                'time'=>'11:30:00',

            ],
            [
                'name'=>'Vn3214',
                'from'=>'Đà Lạt',
                'to'=>'Cao Bằng',
                'depature'=>'2020-09-19',
                'return'=>null,
                'price'=>'1000000',
                'time'=>'07:30:00',

            ]

            ]);
    }
}
