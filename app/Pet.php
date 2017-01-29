<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [
        'name','description','address'
    ];

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
