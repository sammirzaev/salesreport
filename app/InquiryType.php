<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InquiryType extends Model
{
    protected $fillable = ['name'];

    public function inquiry(){
        return $this->belongsTo('App\Inquiries');
    }
}
