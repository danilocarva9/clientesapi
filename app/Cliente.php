<?php

namespace App;

//use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    
    //use HasApiTokens;
    protected $fillable = [
        'cliente_nome', 'cliente_email', 'cliente_endereco', 'cliente_telefone', 'cidade_id', 'plano_id',
    ];



    //Cliente tem uma cidade
    public function cidade()
    {
        return $this->belongsTo('App\Cidade', 'cidade_id', 'cidade_id');
    }

    // //Cliente tem um plano
    public function plano()
    {
        return $this->belongsTo('App\Plano', 'plano_id', 'plano_id');
    }

}
