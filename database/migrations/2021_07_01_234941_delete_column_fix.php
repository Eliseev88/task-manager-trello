<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteColumnFix extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Пересоздаем внешний ключ групп в досках
       Schema::table('boards', function (Blueprint $table) {
            $table->dropConstrainedForeignId('group_id');
        });

        Schema::table('boards', function (Blueprint $table) {
            $table->foreignId('group_id')->constrained('groups')
                ->onUpdate('cascade')
                ->onDelete('no action');
        });

        //пересоздаем внешние ключи тасков
        Schema::table('tasks', function (Blueprint $table) {

            $table->dropConstrainedForeignId('executor_id');
            $table->dropConstrainedForeignId('initiator_id');
            $table->dropConstrainedForeignId('board_id');
            $table->dropConstrainedForeignId('task_topics_id');

        });
        Schema::table('tasks', function (Blueprint $table) {
            $table->foreignId('executor_id')->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('no action');

            $table->foreignId('initiator_id')->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('no action');

            $table->foreignId('board_id')->constrained('boards')
                ->onUpdate('cascade')
                ->onDelete('no action');

            $table->foreignId('task_topics_id')->constrained('task_topics')
                ->onUpdate('cascade')
                ->onDelete('no action');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('boards', function (Blueprint $table) {
             $table->dropConstrainedForeignId('group_id');
        });
        Schema::table('boards', function (Blueprint $table) {
            $table->foreignId('group_id')->constrained('groups')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });

        Schema::table('tasks', function (Blueprint $table) {

            $table->dropConstrainedForeignId('executor_id');
            $table->dropConstrainedForeignId('initiator_id');
            $table->dropConstrainedForeignId('board_id');
            $table->dropConstrainedForeignId('task_topics_id');

        });

        Schema::table('tasks', function (Blueprint $table) {

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

        });

        }
}
