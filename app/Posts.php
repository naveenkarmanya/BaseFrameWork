<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $guarded=[''];
    protected $table='Posts';
    public $timestamps='false';
    protected $primarykey='Id';
    
     public function Tags()
    {
        return $this->morphToMany('App\Tags', 'Tagable');
    }
}
