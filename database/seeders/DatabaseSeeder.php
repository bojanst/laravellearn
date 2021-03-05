<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $cache = app()->make('lada.cache');
        $cache->flush();

        // for dev only...order is important here for foreign key relationships
        $this->call(UserSeeder::class);
        User::factory(10)->create();
    }
}
