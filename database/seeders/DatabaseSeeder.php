<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@skincare.com',
            'password' => bcrypt('admin'),
            'role_as' => 1,
        ]);

        $this->call(
            ProductSeeder::class,
        );
    }
}
