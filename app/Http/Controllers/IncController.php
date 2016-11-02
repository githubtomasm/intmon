<?php

namespace Monitoreo\Http\Controllers;


use Monitoreo\Http\Requests;
use Illuminate\Http\Request;
use Monitoreo\Http\Controllers\Api\ApiController;
use Monitoreo\Inc;
use Monitoreo\Mov;
use Monitoreo\User;
use Monitoreo\Dpto;
use Monitoreo\Muni;
use Monitoreo\Cv;


class IncController extends Controller
{
    public function index(){
    	//para monitoreo
    	$user=\Auth::user();
        $muni=Muni::with(["cvs"=>function($q){
            $q->with('incs');
        }])->find($user['munis_id']);
        $muni->departamento;
        // dd($muni);
        // $muni=Muni::find($user['munis_id'])->with(['cvs' => function ($query) {
        //     $query->with('procs');    
        // }])->get();
        $resultado=[
            // 'dpto'=>$dpto,
            'muni'=>$muni,
            // 'procs'=>$procs
        ];
        return $resultado;
    }

    public function create(){
    	//para guardar
    }

    
}
