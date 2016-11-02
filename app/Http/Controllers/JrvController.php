<?php

namespace Monitoreo\Http\Controllers;


use Monitoreo\Http\Requests;
use Illuminate\Http\Request;
use Monitoreo\Http\Controllers\Api\ApiController;
use Monitoreo\Jrv;


class JrvController extends Controller
{
    public function show(){
    	// con esta funcion se mandarán los datos de la jrv al monitoreo
    }

    public function apertura(Request $request){
    	// dd($request->all());
    	$this->validate($request, [
    			'jrv_num'=>'required|integer|unique:jrvs,jrv_num',
    			'apertura'=>'required|boolean'
    		]);
    	
    	Jrv::create($request->all());
    	return redirect()->route('inicio');
    }

    public function cierre(Request $request){
    	$this->validate($request, [
    			'jrv_num'=>'required|integer',
    			'apertura'=>'required|boolean'
    		]);


    }


}


