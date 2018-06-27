<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into roles values(1, 'admin', NOW(), NOW())");
        DB::insert("insert into roles values(2, 'client', NOW(), NOW())");
        DB::insert("insert into roles values(3, 'user', NOW(), NOW())");
    }

}
