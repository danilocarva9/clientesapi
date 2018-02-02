<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ClienteResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'cliente_id' => $this->cliente_id,
            'cliente_nome' => $this->cliente_nome,
            'cliente_endereco' => $this->cliente_endereco,
            'cliente_telefone' => $this->cliente_telefone,
            'cidade' => $this->cidade,
            'plano' => $this->plano,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
