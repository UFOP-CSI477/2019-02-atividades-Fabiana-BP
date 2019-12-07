<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Subject;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      if(Auth::user()->type==1){
        $nav=1;
        $protocolos=Subject::orderBy('name')->get();
        return view('area_empresa',compact('nav','protocolos'));
      }else{
        $nav=1;
        $protocolos=Subject::orderBy('name')->get();
        return view('area_cliente',compact('nav','protocolos'));
      }

    }
}
