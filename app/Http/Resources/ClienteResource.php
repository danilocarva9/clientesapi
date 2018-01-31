<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

use App\Http\Resources\CidadeResource;

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
            'cli_id' => $this->id,
            'cli_nome' => $this->cli_nome,
            'cli_endereco' => $this->cli_endereco,
            'cli_telefone' => $this->cli_telefone,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
