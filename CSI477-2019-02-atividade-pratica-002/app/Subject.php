<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //1 - N -> requests
    public function requets(){
      return $this->hasMany('App\Requet');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price',
    ];
}
