<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\User;
use App\Requet;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
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
    if(Auth::user()->type==1){
      $nav=1;
      $protocolos=Subject::orderBy('name')->get();
      return view('area_empresa',compact('nav','protocolos'));
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
    if(Auth::user()->type==1){
      if($nav==1){//visualizar protocolos
        $protocolos=Subject::orderBy('name')->get();
        return view('area_empresa',compact('nav','protocolos'));
      }else if($nav==4){
        $requets=Requet::orderBy('date','desc')->get();
        return view('area_empresa',compact('nav','requets'));
      }else if($nav==5){//visualizar usuários
        $nav=5;
        $users=User::orderBy('name')->get();
        return view('area_empresa',['nav'=>$nav,'users'=>$users]);
      }else if($nav==6){//visualizar relatórios
        $nav=6;
        $subjects=Subject::orderBy('name')->get();
        $users=User::orderBy('name')->get();

        return view('area_empresa',['nav'=>$nav,'users'=>$users,'subjects'=>$subjects]);
      }
      return view('area_empresa')->with('nav',$nav);
    }else{
        return abort(403,'Operação não permitida!');
    }
  }



  public function redirecionaExcluir($id){
    if(Auth::user()->type==1){
      return view('excluir_protocolo')->with('id',$id);
    }else{
      return abort(403,'Operação não permitida!');
    }
  }



}
