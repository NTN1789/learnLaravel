<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // vai criar um usuario

            User::create([
                'firstName' => 'Natan',
                'lastName' => 'Silva',
                'email' => 'natanalmeida@gmail.com',
                'password' => bcrypt('Banjo'),
            ]);
    }
}
