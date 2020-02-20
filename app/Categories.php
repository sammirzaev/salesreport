<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable=['name'];

    public function inquiry(){
        return $this->hasMany('App\Inquiries');
    }

    public function status(){
        return $this->hasMany('App\Status');
    }
}
