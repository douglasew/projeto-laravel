<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dentista extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function agendamentos(){
        return $this->hasMany('App\Models\Agendamentos');
    }
}
