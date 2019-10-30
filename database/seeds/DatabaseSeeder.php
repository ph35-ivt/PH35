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
        $this->call(RoleTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        $this->call(BreedTableSeeder::class);
        $this->call(CatTableSeeder::class);
        // $this->call(PostTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(CommentTableSeeder::class);
    }
}
