<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pacientes(){
        return $this->hasOne('App\Models\Paciente');
    }

}
