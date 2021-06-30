<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $table = 'boards';

    protected $fillable =
        [
            'id',
            'name',
            'created_at',//может быть полезно для сортировки
            'updated_at',
            'group_id',
        ];

    //'groups' c  'boards' один ко многим
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
