<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    protected $fillable = [
        'user_id','license','experience'
    ];
    public function user() {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
