<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() === 0) {
            User::create([
                'name' => "Brian Koech",
                'email' => "briankoech650@gmail.com",
                'password' => bcrypt('Lc3128$%^&'),
                'is_admin' => true,
            ]);
        }
    }
}
