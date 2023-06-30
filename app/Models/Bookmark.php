<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo('App\Models\Use');
    }

    public function tasks()
    {
        return $this->belongsTo('App\Models\Task');
    }
}
