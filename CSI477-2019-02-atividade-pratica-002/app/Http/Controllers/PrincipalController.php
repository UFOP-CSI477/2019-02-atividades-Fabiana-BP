<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function menu($nav){
      if($nav==1){//visualizar protocolos
        $protocolos=Subject::orderBy('name')->get();
        return view('index',compact('nav','protocolos'));
      }
      return view('index')->with('nav',$nav);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      $nav=1;
      $protocolos=Subject::orderBy('name')->get();
      return view('index',compact('nav','protocolos'));
    }
}
