<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ApplicationsTableSeeder::class);
        $this->call(CollectionsTableSeeder::class);
        $this->call(CollectionItemsTableSeeder::class);
        $this->call(ShotsTableSeeder::class);
        $this->call(ShotCategoriesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(FollowsTableSeeder::class);
        $this->call(JobsTableSeeder::class);
        $this->call(LikesTableSeeder::class);

        Schema::enableForeignKeyConstraints();
    }
}