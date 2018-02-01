<?php

namespace App;

//use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    
    //use HasApiTokens;

    protected $fillable = [
        'cli_nome', 'cli_email', 'cli_endereco', 'cli_telefone', 'cli_cidade_id', 'cli_plano_id',
    ];



    //Cliente tem uma cidade
    public function cidade()
    {
        return $this->hasOne('App\Cidade');
    }

    //Cliente tem um plano
    public function plano()
    {
        return $this->hasOne('App\Plano');
    }

}
