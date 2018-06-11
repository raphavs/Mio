<?php

use Illuminate\Database\Seeder;

class RelationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into relations values(2,  1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(2,  2, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(2,  3, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(2,  4, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(2,  5, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(2,  6, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(1,  5, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(1,  1, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(1,  3, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(1,  4, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(3,  6, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(3,  1, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(4,  3, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(4,  1, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(4,  4, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(4,  5, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(5,  2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(5,  7, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(5,  8, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(5,  9, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(6,  2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(6,  1, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(6, 10, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(6, 11, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(7, 14, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(7, 12, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(7, 13, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(7, 15, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(7, 16, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
    }
}
