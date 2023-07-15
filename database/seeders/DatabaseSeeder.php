<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Account;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Account::factory(12)->create();
        Post::factory(3)->create();

        // Account::create([
        //     'username' => 'admin',
        //     'name' => 'admin',
        //     'password' => bcrypt('admin'),
        //     'role' => 'admin'
        // ]);
        // Account::create([
        //     'username' => 'author',
        //     'name' => 'author',
        //     'password' => bcrypt('author'),
        //     'role' => 'author'
        // ]);
    }
}
