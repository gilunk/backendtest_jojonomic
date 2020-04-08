<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = [
        'name', 'id_cd', 'days', 'status_rent', 'total_price'
    ];

    protected $table = 'visitor';

    public function collection()
    {
        return $this->belongsTo(Collection::class, 'id_cd');
    }
}
