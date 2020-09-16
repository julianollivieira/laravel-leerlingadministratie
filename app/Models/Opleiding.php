<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opleiding extends Model
{
    use HasFactory;

    protected $table = 'opleidingen';

    public function schoolloopbanen()
    {
      return $this->hasMany('App\Models\Schoolloopbaan');
    }
}
