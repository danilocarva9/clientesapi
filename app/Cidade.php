<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = [
        'cid_nome',
    ];



    //Cidade pertence ao cliente
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

}
