<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'body', 'user_id', 'slug'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

   
}
