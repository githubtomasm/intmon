<?php

namespace Monitoreo\Http\Controllers;

use Illuminate\Http\Request;
use Monitoreo\User;
use Monitoreo\Dpto;
use Monitoreo\Muni;
use Monitoreo\Cv;
use Monitoreo\Proc;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=\Auth::user();
        return view('home',compact('user'));
    }

    public function geo(){
        $dpto= Dpto::with('municipios')->get(); 
        return $dpto;
    }

    public function fields($muniId){
        $user=\Auth::user();
        $muni=Muni::with(["cvs"=>function($q){
            $q->with('procs');
        }])->find($muniId);
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
}
