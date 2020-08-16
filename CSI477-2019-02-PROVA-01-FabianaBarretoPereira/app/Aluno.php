<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
  //1 - N -> projetos
  public function projetos(){
    return $this->hasMany('App\Projeto');
  }

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'nome', 'curso',
  ];
}
