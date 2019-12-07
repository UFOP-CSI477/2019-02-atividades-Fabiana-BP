<?php

namespace App\Http\Controllers;

use App\Requet;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequetController extends Controller
{

  public function __construct(){
    $this->middleware('auth');

  }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if(Auth::user()->type==2){
        $protocolos=Subject::orderBy('name')->get();
        $nav=3;
        return view('area_cliente',compact('nav','protocolos'));
      }else{
        return abort(403,'Operação não permitida!');
      }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if(Auth::user()->type==2){
        //validação
        $validatedData = $request->validate(
          [
            'description'=>'required',
            'date'=>'required|date|after:tomorrow',
            'subject_id'=>'required|min:1',
          ]);

          //gravar
          $r=new Requet;
          $r->date=$request->date;
          $r->description=$request->description;
          $r->subject_id=$request->subject_id;
          $r->user_id=Auth::user()->id;

          if(!$r->save()){
            session()->flash('mensagem','Erro ao cadastrar, tente mais tarde.');
          }else{
            session()->flash('mensagem','Cadastro realizado com sucesso!');
          }

          $nav=3;
          //dd($request);
          return redirect()->route('requets.create')->with('nav',$nav);

    }else{
      return abort(403,'Operação não permitida!');
    }
  }

    /**
     * Display the specified resource.
     *
     * @param  \App\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Requet $requet)
    {
      if(Auth::user()->type==2){
        return view('mostrar_requerimento',
         [ 'requet' => $requet ]);
      }else{
           return abort(403,'Operação não permitida!');
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Requet $requet)
    {
      if(Auth::user()->type==2){
        $protocolos=Subject::orderBy('name')->get();
        return view('editar_requerimento',
          [ 'requet' => $requet,'protocolos'=>$protocolos]);
      }else{
           return abort(403,'Operação não permitida!');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requet $requet)
    {
      if(Auth::user()->type==2){
        //validação
        $validatedData = $request->validate(
        [
        'description'=>'required',
        'date'=>'required|date|after:tomorrow',
        'subject_id'=>'required|min:1',
        ]);
        $requet->fill($request->all());//atualiza
        $requet->save();//persiste no bd
        session()->flash('mensagem','Requerimento Atualizado com Sucesso!');

        $nav=4;
        $requets=Requet::orderBy('date','desc')->where('user_id','=',Auth::user()->id)->get();
        return view('area_cliente',compact('nav','requets'));;
      }else{
           return abort(403,'Operação não permitida!');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requet $requet)
    {
      if(Auth::user()->type==2){
        $requet->delete();
        session()->flash('mensagem','Requisição excluída com sucesso!');

        $nav=4;
        $requets=Requet::orderBy('date','desc')->where('user_id','=',Auth::user()->id)->get();
        return view('area_cliente',compact('nav','requets'));;
      }else{
        return abort(403,'Operação não permitida!');
      }
    }
}
