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
        //статусы: Запланировано(Planned), Принята к исполнению(Accepted for execution),
        //Выполнена(Completed), Отменена(Canceled), На контроле(On Control),
        //Возвращена(Returned),
        Schema::create('task_statuses', function (Blueprint $table){
           $table->id();
           $table->string('name', '50')->default('Planned');
           $table->timestamps();
           $table->softDeletes($column = 'deleted_at');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_statuses');
    }
}
