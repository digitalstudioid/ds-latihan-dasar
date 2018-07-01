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

        // $this->call(UsersTableSeeder::class);

        $this->call(PelangganTableSeeder::class);
        $this->call(TransaksiTableSeeder::class);

        $this->call(UserTableSeeder::class);
        $this->call(IssueTableSeeder::class);

    }
}
