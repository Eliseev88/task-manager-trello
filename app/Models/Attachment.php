<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $table = 'attachments';

    protected $fillable =
        [
            'id',
            'path',
            'task_id',
            'created_at',
            'updated_at',
        ];

    public function task()
    {
        return $this->belongsTo(Task::class);
        //у одного вложения может быть только один таск
    }



}
