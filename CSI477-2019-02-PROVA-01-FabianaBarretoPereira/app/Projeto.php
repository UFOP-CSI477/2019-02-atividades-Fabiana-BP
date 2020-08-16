<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
  // Projeto -> aluno (N:1)
    public function aluno() {
      return $this->belongsTo('App\Aluno');
    }

    // Projeto -> professor (N:1)
    public function professor() {
      return $this->belongsTo('App\Professor');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'ano','semestre','aluno_id','professor_id',
    ];
}
