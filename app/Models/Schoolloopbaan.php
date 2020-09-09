<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schoolloopbaan extends Model
{
    use HasFactory;

    public function vakken()
    {
      return $this->hasMany('App\Models\Vak');
    }

    public function resultaten()
    {
      return $this->hasMany('App\Models\Resultaat');
    }
}
