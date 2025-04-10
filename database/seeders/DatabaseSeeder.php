<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
<<<<<<< HEAD
            ProdutoSeeder::class
=======
            ClienteSeeder::class
>>>>>>> a4181522c3e6a1df740616870e6ea37225816fa8
        ]);
    }
}
