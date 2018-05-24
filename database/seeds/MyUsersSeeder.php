<?php

use Illuminate\Database\Seeder;

class MyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into my_users values(1, 'Bruder', 1, 1, 1, 1, 1, 1, 1, 1, 1, STR_TO_DATE('00:00:00','%H:%i:%s'), STR_TO_DATE('23:59:00','%H:%i:%s') /*, NOW(), NOW() */)");
        DB::insert("insert into my_users values(2, 'Gianmarco', 1, 1, 1, 1, 1, 1, 1, 1, 1, STR_TO_DATE('00:00:00','%H:%i:%s'), STR_TO_DATE('23:59:00','%H:%i:%s') /*, NOW(), NOW() */)");
        DB::insert("insert into my_users values(3, 'Pheline', 1, 1, 1, 1, 1, 1, 1, 1, 1, STR_TO_DATE('00:00:00','%H:%i:%s'), STR_TO_DATE('23:59:00','%H:%i:%s') /*, NOW(), NOW() */)");
        DB::insert("insert into my_users values(4, 'Dad', 1, 1, 1, 1, 1, 1, 1, 1, 1, STR_TO_DATE('00:00:00','%H:%i:%s'), STR_TO_DATE('23:59:00','%H:%i:%s') /*, NOW(), NOW() */)");
        DB::insert("insert into my_users values(5, 'Mom', 1, 1, 1, 1, 1, 1, 1, 1, 1, STR_TO_DATE('00:00:00','%H:%i:%s'), STR_TO_DATE('23:59:00','%H:%i:%s') /*, NOW(), NOW() */)");
        DB::insert("insert into my_users values(6, 'Robin', 1, 1, 1, 1, 1, 1, 1, 1, 1, STR_TO_DATE('00:00:00','%H:%i:%s'), STR_TO_DATE('23:59:00','%H:%i:%s') /*, NOW(), NOW() */)");
        DB::insert("insert into my_users values(7, 'Ebrar', 1, 1, 1, 1, 1, 1, 1, 1, 1, STR_TO_DATE('00:00:00','%H:%i:%s'), STR_TO_DATE('23:59:00','%H:%i:%s') /*, NOW(), NOW() */)");
        DB::insert("insert into my_users values(8, 'Leas Schwester', 1, 1, 1, 1, 1, 1, 1, 1, 1, STR_TO_DATE('00:00:00','%H:%i:%s'), STR_TO_DATE('23:59:00','%H:%i:%s') /*, NOW(), NOW() */)");
        DB::insert("insert into my_users values(9, 'Leas Dad', 1, 1, 1, 1, 1, 1, 1, 1, 1, STR_TO_DATE('00:00:00','%H:%i:%s'), STR_TO_DATE('23:59:00','%H:%i:%s') /*, NOW(), NOW() */)");
        DB::insert("insert into my_users values(10, 'Leas Mom', 1, 1, 1, 1, 1, 1, 1, 1, 1, STR_TO_DATE('00:00:00','%H:%i:%s'), STR_TO_DATE('23:59:00','%H:%i:%s') /*, NOW(), NOW() */)");
    }

}
