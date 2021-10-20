<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    use HasFactory;

    protected $table = 'todos';
    protected $guarded = [];
    protected $with = ['comments'];
    protected $hidden = ['created_at', 'updated_at'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
