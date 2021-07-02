<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $fillable =
        [
            'id',
            'name',
            'description',
            'deadline',
            'period',
            'executor_id',
            'initiator_id',
            'board_id',
            'task_topics_id',
            'created_at',
            'updated_at',
            'task_status'
        ];


    public function board()
    {
        return $this->hasOne(Board::class);
        //один таск может быть на одной доске
        //один к одному
    }

    public function attachments()
    {
        return $this->hasMany(Attachment::class);
        //У одного таска может быть несколько вложений
    }



}
