<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['name'];

    public function inquiry(){
        return $this->hasMany('App\Inquiries');
    }

    public function category(){
        return $this->hasMany('App\Categories');
    }
}
