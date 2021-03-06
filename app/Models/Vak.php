<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vak extends Model
{
    use HasFactory;

    protected $table = 'vakken';

    public function resultaten()
    {
      return $this->hasMany('App\Models\Resultaat');
    }
}
