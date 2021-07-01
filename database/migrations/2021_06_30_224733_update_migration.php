<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //поле 'users' 'phone' теперь может быть NULL
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('phone')->nullable(true)->change();
        });

        //поле 'tasks' 'description' теперь может быть NULL
        //'deadline' добавили значение по умолчанию
        Schema::table('tasks', function (Blueprint $table) {
            $table->mediumText('description')->nullable(true)->change();
            $table->dateTime('deadline')->default(date("Y-m-d H:i:s"))->change();
            $table->dateTime('period')->nullable(true)->default(null)->change();

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('phone')->nullable(false)->change();
        });

        Schema::table('tasks', function (Blueprint $table) {
            $table->mediumText('description')->nullable(false)->change();
            $table->dateTime('deadline')->nullable(false)->change();
            $table->dateTime('period')->nullable(false)->change();

        });
    }
}
