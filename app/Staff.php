<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $guarded=[''];
    protected $table='Staff';
    protected $primarykey='Id';
    public $timestamps='false';
    
    public function photos()
    {
        return $this->morphMany('App\Photo', 'Image');
    }
}
