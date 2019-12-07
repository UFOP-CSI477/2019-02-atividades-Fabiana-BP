<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Requet;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{

  public function __construct(){
    $this->middleware('auth');

  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(){
    if(Auth::user()->type==2){
      $nav=1;
      $protocolos=Subject::orderBy('name')->get();
      return view('area_cliente',compact('nav','protocolos'));
    }else{
      return abort(403,'Operação não permitida!');
    }
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function menu($nav){
    if(Auth::user()->type==2){
      if($nav==1){//visualizar protocolos
        $protocolos=Subject::orderBy('name')->get();
        return view('area_cliente',compact('nav','protocolos'));
      }else if($nav==4){//visualizar requerimentos
        //$requets=Requet::orderBy('date','desc')->where('user_id','=',)->get();
        $requets=Requet::orderBy('date','desc')->where('user_id','=',Auth::user()->id)->get();
        return view('area_cliente',compact('nav','requets'));
      }
      return view('area_cliente')->with('nav',$nav);
    }else{
      return abort(403,'Operação não permitida!');
    }
  }

  public function redirecionaExcluir($id){
   if(Auth::user()->type==2){
     return view('excluir_requerimento')->with('id',$id);
    }else{
      return abort(403,'Operação não permitida!');
    }
  }

}
