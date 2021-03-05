<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Bojan ID = 1 on InCallable
        $user = new User;
        $user->name = 'Bojan Stanojev';
        $user->email = 'bojan@digitalpower.solutions';
        $user->email_verified_at = null;
        $user->password = '$2y$10$4tg7ZSInaeC1Y1R6N6xOXeTwTygqkp4muDqAJ8acDPWKLN8a5tQd2';
        $user->remember_token = null;
        $user->save();
    }
}
