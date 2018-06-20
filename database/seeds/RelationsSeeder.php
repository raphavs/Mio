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
        DB::insert("insert into relations values(1,   1,  5, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(2,   1,  1, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '20:00:00')");
        DB::insert("insert into relations values(3,   1,  3, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(4,   1,  4, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(5,   2,  1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(6,   2,  2, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(7,   2,  3, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(8,   2,  4, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(9,   2,  5, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(10,  2,  6, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(11,  3,  6, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(12,  3,  1, 3, 1, 1, 1, 1, 0, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(13,  4,  3, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(14,  4,  1, 3, 1, 1, 1, 1, 0, 1, 1, 1, 1, '00:00:00', '20:00:00')");
        DB::insert("insert into relations values(15,  4,  4, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(16,  4,  5, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(17,  5,  2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(18,  5,  7, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(19,  5,  8, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(20,  5,  9, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(21,  6,  2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(22,  6,  1, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(23,  6, 10, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(24,  6, 11, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(25,  7, 14, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(26,  7, 12, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(27,  7, 13, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(28,  7, 15, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
        DB::insert("insert into relations values(29,  7, 16, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '00:00:00', '23:59:00')");
    }
}
