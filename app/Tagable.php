<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tagable extends Model
{
    protected $guarded=[''];
    protected $table='Staff';
    protected $primarykey='Id';
    public $timestamps='false';
    
    public function Tagable()
    {
        return $this->morphTo;
    }
}
