<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klas extends Model
{
    use HasFactory;

    protected $table = 'klassen';

    public function schoolloopbanen()
    {
      return $this->hasMany('App\Models\Schoolloopbaan');
    }
}
