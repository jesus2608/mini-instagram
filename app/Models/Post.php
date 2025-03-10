<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    public function usuario(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
