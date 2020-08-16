<?php

namespace App\Http\Controllers;

use App\Projeto;
use App\Aluno;
use App\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjetoController extends Controller
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

        $projetos=DB::table('projetos')
            ->join('professors', 'professors.id', '=', 'projetos.professor_id')
            ->join('alunos', 'alunos.id', '=', 'projetos.aluno_id')
            ->select('projetos.ano as ano', 'projetos.semestre as semestre', 'projetos.id as id',
            'professors.nome as professor','alunos.nome as aluno','projetos.titulo as titulo',
            'professors.area as area')
            ->orderBy('ano', 'desc')->orderBy('semestre', 'desc')->orderBy('professor', 'asc')
            ->get();

        $nav=1;
        return view('area_empresa',['nav'=>$nav,'projetos'=>$projetos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alunos=Aluno::orderBy('nome')->get();
        $professors=Professor::orderBy('nome')->get();
        $nav=2;
        return view('area_empresa',['nav'=>$nav,'alunos'=>$alunos,'professors'=>$professors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //dd($request);
      //validação
      $validatedData = $request->validate(
        [
          'aluno_id'=>'required|integer',
          'professor_id'=>'required|integer',
          'titulo'=>'required|max:100',
          'semestre'=>'required|integer',
          'ano'=>'required|integer|max:4',
        ]);

        //gravar
        Projeto::create($request->all());
        session()->flash('mensagem','Projeto incluído com sucesso!');
        //dd($request);
        return redirect()->route('projeto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function show(Projeto $projeto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function edit(Projeto $projeto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projeto $projeto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projeto $projeto)
    {
        //
    }
}
