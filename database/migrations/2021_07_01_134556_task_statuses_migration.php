<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaskStatusesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //таблица статусов задачи
        //статусы: Новая('New') - 1, Срочно('Urgent') - 2,
        //В работе('Underway') - 3,Остановлена('Stopped') - 4, Отменена(Canceled) - 5,
        Schema::table('tasks', function (Blueprint $table){
            $table->enum('task_status', ['1','2', '3', '4', '5'])->default('1');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table){
            $table->dropColumn('task_status');
        });
    }
}
