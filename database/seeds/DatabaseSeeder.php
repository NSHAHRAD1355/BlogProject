<?php

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
      DB::table('categories')->truncate();
      $this->call(CategorySeeder::class);
        DB::table('posts')->truncate();
        $this->call(PostSeeder::class);
        DB::table('users')->truncate();
        $this->call(UserSeeder::class);
    }
}
