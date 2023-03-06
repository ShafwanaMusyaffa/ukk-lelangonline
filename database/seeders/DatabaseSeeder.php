<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Admin::create([
            'name'=>'Admin',
            'Email' => 'admin@gmail.com',
            'password'=>bcrypt('password')
        ]);

        \App\Models\User::create([
            'name'=>'User',
            'Email' => 'user@gmail.com',
            'Phone' => '082112956828',
            'password'=>bcrypt('password')
        ]);

        $this->call(CategorySeeder::class);

    }
}
