<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User as ModelsUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ModelsUser::create([

            'name' => 'Rey',
            'email' => 'reynaldisatriawanw@gmail.com',
            'password' => Hash::make('123')

        ]);
    }
}
