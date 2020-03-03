<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    public function realisation() {
        return $this->belongsTo(Realisation::class);
    }
}
