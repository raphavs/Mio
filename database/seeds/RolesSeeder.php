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
        DB::insert("insert into roles values(1, 'admin')");
        DB::insert("insert into roles values(2, 'client')");
        DB::insert("insert into roles values(3, 'user')");
        DB::insert("insert into roles values(4, 'manufacturer')");
    }
}
