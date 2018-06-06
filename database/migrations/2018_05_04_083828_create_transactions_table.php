<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/* CREATE STATEMENT: php artisan make:migration <name_of_migration> --create=<name_of_table> */
/* php artisan migrate */
/* DROP ALL TABLES & RUN MIGRATIONS: php artisan migrate:fresh */
/* ROLLBACK LAST CHANGES: php artisan migrate:rollback */
/* ROLLBACK ALL CHANGES: php artisan migrate:reset */
class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name');
            $table->date('entrance_date');
            $table->time('entrance_time');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }

}
