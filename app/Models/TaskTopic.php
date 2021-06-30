<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskTopic extends Model
{
    use HasFactory;

    protected $table = 'task_topics';

    protected $fillable =
        [
            'id',
            'name',
        ];

    //один заголовок ко многим таскам
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

}
