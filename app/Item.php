<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name', 'value'
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
