<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function fichas (){
        return $this->belongsTo('App\Models\Ficha');
    }

    public function enderecos (){
        return $this->belongsTo('App\Models\Endereco');
    }
}
