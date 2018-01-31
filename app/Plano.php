<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    protected $fillable = [
        'plan_nome', 'plan_vantagens',
    ];

    //Plano pertence ao cliente
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
}
