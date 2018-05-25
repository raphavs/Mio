<?php

use Illuminate\Database\Seeder;

class DoorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into doors values(1, 'Home Sunthausen' /*, NOW(), NOW() */)");
        DB::insert("insert into doors values(2, 'Apartment Constance' /*, NOW(), NOW() */)");
        DB::insert("insert into doors values(3, 'FH Constance' /*, NOW(), NOW() */)");
        DB::insert("insert into doors values(4, 'Apartment Bruder' /*, NOW(), NOW() */)");
        DB::insert("insert into doors values(5, 'Home Donaueschingen' /*, NOW(), NOW() */)");
        DB::insert("insert into doors values(6, 'Apartment Gianmarco' /*, NOW(), NOW() */)");
        DB::insert("insert into doors values(7, 'Home Lea' /*, NOW(), NOW() */)");
    }

}
