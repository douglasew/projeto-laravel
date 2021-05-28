<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $guarded = [];

    
    public function pacientes(){
        return $this->hasOne('App\ModelsPaciente');
    }
}
