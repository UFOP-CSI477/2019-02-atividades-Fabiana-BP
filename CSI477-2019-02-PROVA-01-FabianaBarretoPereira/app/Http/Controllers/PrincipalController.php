<?php

namespace App\Http\Controllers;

use App\Projeto;
use App\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrincipalController extends Controller{

  public function index(){
    $projetos=DB::table('projetos')
        ->join('professors', 'professors.id', '=', 'projetos.professor_id')
        ->join('alunos', 'alunos.id', '=', 'projetos.aluno_id')
        ->select('projetos.ano as ano', 'projetos.semestre as semestre', 'projetos.id as id',
        'professors.nome as professor','alunos.nome as aluno','projetos.titulo as titulo',
        'professors.area as area')
        ->orderBy('ano', 'desc')->orderBy('semestre', 'desc')->orderBy('aluno', 'asc')
        ->get();
    $nav=2;
    return view('area_estudante',['nav'=>$nav,'projetos'=>$projetos]);
  }

  public function procura(Request $request){
    //dd($request);

    $pesquisa="$request->pesquisa";
    //buscar todos os professores com áreas que contêm parte do que foi pesquisado
    $professors=DB::table('professors')->where('area', 'like', '%' . $pesquisa .'%')->orderBy('area','asc')->orderBy('nome','asc')->get();
    //Where('name', 'like', '%' . Input::get('name') . '%')
    $nav=4;
    //echo $professors;
    return view('area_estudante',['nav'=>$nav,'professors'=>$professors]);


  }

  public function create(){
    $nav=3;
    return view('area_estudante')->with('nav',$nav);

  }

  public function index_estudante(){
    $projetos=DB::table('projetos')
        ->join('professors', 'professors.id', '=', 'projetos.professor_id')
        ->join('alunos', 'alunos.id', '=', 'projetos.aluno_id')
        ->select('projetos.ano as ano', 'projetos.semestre as semestre', 'projetos.id as id',
        'professors.nome as professor','alunos.nome as aluno','projetos.titulo as titulo',
        'professors.area as area')
        ->orderBy('ano', 'desc')->orderBy('semestre', 'desc')->orderBy('aluno', 'asc')
        ->get();
    $nav=2;
    return view('area_estudante',['nav'=>$nav,'projetos'=>$projetos]);

  }
}
