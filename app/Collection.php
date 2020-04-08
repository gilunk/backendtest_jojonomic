<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $fillable = [
        'title', 'rate', 'category', 'quantity'
    ];

    protected $table = 'collection';

    public function visitor()
    {
        return $this->hasMany(Visitor::class, 'id_cd');
    }
}
