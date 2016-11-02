<?php

namespace Monitoreo;

use Illuminate\Database\Eloquent\Model;

class Inc extends Model
{
    protected $fillable=[
    	'cvs_id','tipo','obs'
    ];

    public function cv(){//relacion con cvs
    	return $this->belongsTo(\Monitoreo\Cv::class,'cvs_id');
    }  
}
