<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $guarded=[''];
    protected $table='Product';
    protected $primarykey='Id';
    public $timestamps='false';
    
    public function photos()
    {
        return $this->morphMany('App\Photo', 'Image');
    }
}
