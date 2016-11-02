<?php

namespace Monitoreo;

use Illuminate\Database\Eloquent\Model;

class Dpto extends Model
{
   
    protected $fillable=["name"];
    
    /*
    * relacion con municipios
    */

    public function municipios(){
    	return $this->hasMany(\Monitoreo\Muni::class,"dptos_id");
    }

    /*
    * realción con usuarios
    */

}
