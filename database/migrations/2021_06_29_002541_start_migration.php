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
            $table->string('name', '255');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');
            //'users' с 'groups' многие ко многим
        });

        //создаем таблицу досок
        Schema::create('boards', function (Blueprint $table) {
            $table->id();
            $table->string('name', '255');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');
            //внешний ключ на 'groups'
            $table->foreignId('group_id')->constrained('groups')
                ->onUpdate('cascade')
                ->onDelete('restrict');

        });

        //создаем темы задач(task_topics)
        Schema::create('task_topics', function (Blueprint $table) {
            $table->id();
            $table->string('name', '255');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');

        });


        //создаем таблицу задач(tasks)
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name', '255');
            $table->mediumText('description');
            $table->dateTime('deadline');
            $table->dateTime('period');

            $table->foreignId('executor_id')->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreignId('initiator_id')->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreignId('board_id')->constrained('boards')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreignId('task_topics_id')->constrained('task_topics')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');

        });


        //роли пользователей на доске
        Schema::create('group_user', function (Blueprint $table) {
            $table->primary(['user_id','group_id']);
            $table->foreignId('user_id')->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('group_id')->constrained('groups')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->enum('role', ['admin','guest', 'user']);
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
            $table->dropConstrainedForeignId('executor_id');
            $table->dropConstrainedForeignId('initiator_id');
            $table->dropConstrainedForeignId('board_id');
            $table->dropConstrainedForeignId('task_topics_id');
        });

        //удаляем внешний ключ с 'boards'  на 'groups'
        Schema::table('boards', function (Blueprint $table) {
            //$table->dropForeign(['group_id']);
            $table->dropConstrainedForeignId('group_id');
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
