<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Inquiries extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
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
        'seller',
    ];

    public function status(){
        return $this->belongsTo('App\Status');
    }
    public function category(){
        return $this->belongsTo('App\Categories');
    }
}
