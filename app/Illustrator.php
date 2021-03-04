<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Illustrator extends Model
{
    protected $fillable = ['name'];

    public function comics()
    {
        return $this->belongsToMany(Comic::class);
    }
}
