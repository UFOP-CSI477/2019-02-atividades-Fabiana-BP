<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $protocolos=Subject::orderBy('name')->get();
        return view('index')->with('protocolos',$protocolos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if(Auth::check()){
        if(Auth::user()->type==1){
          $nav=3;
          return view('area_empresa')->with('nav',$nav);
        }else{
          return abort(403,'Operação não permitida!');
        }
      }else{
        return redirect()->route('login');
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
      if(Auth::check()){
        if(Auth::user()->type==1){
          //validação
          $validatedData = $request->validate(
            [
              'name'=>'required|min:3|max:60',
              'price'=>'required|min:0|max:10',
            ]);

            //gravar
            Subject::create($request->all());

            //dd($request);
            return redirect('/index_company');
          }else{
            return abort(403,'Operação não permitida!');
          }
        }else{
          return redirect()->route('login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
      if(Auth::check()){
        if(Auth::user()->type==1){
          return view('mostrar_protocolo',
          [ 'subject' => $subject ]);
        }else{
          return abort(403,'Operação não permitida!');
        }
      }else{
        return redirect()->route('login');
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
      if(Auth::check()){
        if(Auth::user()->type==1){
          return view('editar_protocolo',[ 'subject' => $subject]);
        }else{
          return abort(403,'Operação não permitida!');
        }
      }else{
        return redirect()->route('login');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
      if(Auth::check()){
        if(Auth::user()->type==1){
          //validação
          $validatedData = $request->validate(
            [
              'name'=>'required|min:3|max:60',
              'price'=>'required|min:0|max:10',
            ]);
            $subject->fill($request->all());//atualiza
            $subject->save();//persiste no bd
            session()->flash('mensagem','Protocolo Atualizado com Sucesso!');

            return redirect('/index_company');
          }else{
            return abort(403,'Operação não permitida!');
          }
        }else{
          return redirect()->route('login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
      if(Auth::check()){
        if(Auth::user()->type==1){
          //validação (pode ser excluído?)
          $requets=$subject->requets->count();

         if($requets<1){
            $subject->delete();
            session()->flash('mensagem','Protocolo excluído com sucesso!');
            return redirect('/index_company');
          }

          session()->flash('mensagem','Protocolo não pode ser excluído!');
          return redirect()->back();
        }else{
          return abort(403,'Operação não permitida!');
        }
      }else{
        return redirect()->route('login');
      }
    }


}
