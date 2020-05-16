<?php

use Illuminate\Database\Seeder;
use Symfony\Component\HttpFoundation\AcceptHeader;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(AccountSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(HotelSeeder::class);
    }
}
