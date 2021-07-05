<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GroupUserModel extends Model
{
    use HasFactory;

    protected $table = 'group_user';

    protected $fillable =
        [
            'user_id',
            'group_id',
            //'created_at',
            //'updated_at',
        ];

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'user_id');
    }
}
