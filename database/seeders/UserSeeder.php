<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $user= User::create([
            'name' => 'Jon Apiscope',
            'email' => 'jonapiscope@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole('Admin'); 
        User::factory(11)->create();
    }
}
