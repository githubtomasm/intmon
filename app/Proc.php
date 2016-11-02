<?php

namespace Monitoreo;

use Illuminate\Database\Eloquent\Model;

class Proc extends Model
{
   	protected $fillable =['cvs_id','cant_proc_real','cant_proc_ideal','obs'];
    
   	public function cv(){//relacion con usuarios
    	return $this->belongsTo(\Monitoreo\Cv::class, 'cvs_id');
	}

}
