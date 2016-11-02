<?php

namespace Monitoreo;

use Illuminate\Database\Eloquent\Model;

class Mov extends Model
{
    protected $fillable=['cvs_id','movi','obs'];

    public function cv(){
    	return $this->belongsTo(\Monitoreo\Cv::class, 'cvs_id');
    }
}
