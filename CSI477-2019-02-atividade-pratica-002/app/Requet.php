<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requet extends Model
{
  // Request -> Subject (N:1)
  public function subject() {
    return $this->belongsTo('App\Subject');
  }

  // Request -> User (N:1)
  public function user() {
    return $this->belongsTo('App\User');
  }

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'subject_id', 'description','date',
  ];
}
