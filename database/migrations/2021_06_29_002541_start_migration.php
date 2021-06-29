<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StartMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //дополняем юзера
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('phone')->unique();
            $table->softDeletes($column = 'deleted_at');
            //'users' с 'groups' многие ко многим
        });

        //создаем таблицу групп
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');
            //'users' с 'groups' многие ко многим
        });

        //создаем таблицу досок
        Schema::create('boards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('group_id')->unsigned();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');
            //внешний ключ на 'groups'
            $table->foreign('group_id')->references('id')->on('groups');

        });

        //создаем темы задач(task_topics)
        Schema::create('task_topics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');

        });


        //создаем таблицу задач(tasks)
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->mediumText('description');
            $table->dateTime('deadline');
            $table->dateTime('period');

            $table->bigInteger('executor_id')->unsigned();
            $table->bigInteger('initiator_id')->unsigned();
            $table->bigInteger('board_id')->unsigned();
            $table->bigInteger('task_topics_id')->unsigned();

            $table->foreign('executor_id')->references('id')->on('users');
            $table->foreign('initiator_id')->references('id')->on('users');
            $table->foreign('board_id')->references('id')->on('boards');
            $table->foreign('task_topics_id')->references('id')->on('task_topics');

            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');

        });


        //роли пользователей на доске
        Schema::create('group_user', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('group_id')->unsigned();
            $table->enum('role', ['admin','guest', 'user']);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('group_id')->references('id')->on('groups');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');
            //внешние ключи 'users'
            //внешние ключи 'groups'
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //удаляем внешний ключ с 'group_user'  на 'users', 'groups'
        Schema::table('group_user', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['group_id']);
        });

        //удаляем внешний ключ с 'tasks'  на 'users', 'boards'
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropForeign(['executor_id']);
            $table->dropForeign(['initiator_id']);
            $table->dropForeign(['board_id']);
            $table->dropForeign(['task_topics_id']);
        });

        //удаляем внешний ключ с 'boards'  на 'groups'
        Schema::table('boards', function (Blueprint $table) {
            $table->dropForeign(['group_id']);
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('deleted_at');
        });

        Schema::dropIfExists('groups');

        Schema::dropIfExists('boards');

        Schema::dropIfExists('tasks');

        Schema::dropIfExists('task_topics');

        Schema::dropIfExists('group_user');

    }
}
