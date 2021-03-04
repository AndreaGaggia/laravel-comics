<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'description',
        'cover',
        'bg_img',
        'price',
        'on_sale_date',
        'issue',
    ];

    public function writers()
    {
        return $this->belongsToMany(Writer::class);
    }

    public function illustrators()
    {
        return $this->belongsToMany(Illustrator::class);
    }
}
