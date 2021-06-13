<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function dentistas(){
        return $this->belongsTo('App\Models\Dentista');
    }
}
