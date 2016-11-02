<?php

namespace Monitoreo;

use Illuminate\Database\Eloquent\Model;

class Muni extends Model
{
    
    protected $fillable=['name','dptos_id'];

    public function departamento(){//relacion con departamentos
    	return $this->belongsTo(\Monitoreo\Dpto::class, 'dptos_id');
    }

 //    public function user(){//relacion con usuarios
 //    	return $this->belongsTo(\Monitoreo\User::class, 'users_id');
	// }

	public function cvs(){
    	return $this->hasMany(\Monitoreo\Cv::class,"munis_id");

	}
}
