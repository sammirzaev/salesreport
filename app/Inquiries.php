<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiries extends Model
{
    protected $fillable = [
        'status_id',
        'category_id',
        'date',
        'company',
        'industry',
        'address',
        'website',
        'fullName',
        'position',
        'email',
        'phnumber',
        'subject',
        'description',
        'comment',
    ];

    public function status(){
        return $this->belongsTo('App\Status');
    }
    public function category(){
        return $this->belongsTo('App\Categories');
    }
}
