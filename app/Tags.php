<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
     protected $guarded=[''];
    protected $table='Tags';
    public $timestamps='false';
    protected $primarykey='Id';
    
     public function Posts()
    {
        return $this->morphedByMany('App\Posts', 'Tagable');
    }
    public function Videos()
    {
        return $this->morphedByMany('App\Videos', 'Tagable');
    }
}
