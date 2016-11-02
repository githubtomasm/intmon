<?php

namespace Monitoreo;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
   	protected $fillable =['cv_num','munis_id','jrvsCerradas','jrvsAbiertas','objApertura','objCierre'];

   	public function municipio(){//relacion con departamentos
    	return $this->belongsTo(\Monitoreo\Muni::class, 'munis_id');
    }

    public function procs(){
    	return $this->hasMany(\Monitoreo\Proc::class,"cvs_id");
    }    
    
    public function movilizacion(){
    	return $this->hasMany(\Monitoreo\Mov::class,'cvs_id');
    }

    public function incs(){
      return $this->hasMany(\Monitoreo\Inc::class,"cvs_id");
    }
}
