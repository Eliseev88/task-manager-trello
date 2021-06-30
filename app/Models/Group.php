<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $table = 'groups';

    protected $fillable =
        [
            'id',
            'name',
            //'created_at',
            //'updated_at',
        ];

    //'users' с 'groups' многие ко многим
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    //'groups' c  'boards' один ко многим
    public function board()
    {
        return $this->hasMany(Board::class);
    }
}
