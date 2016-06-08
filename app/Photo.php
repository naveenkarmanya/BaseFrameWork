<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

    protected $guarded = [''];
    protected $table = "Photo";
    public $timestamps = false;
    protected $primaryKey = "ID";
    
    public function Image()
    {
        return $this->morphTo();
    }
    

}
