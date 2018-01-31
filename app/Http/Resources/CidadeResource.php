<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class CidadeResource extends Resource
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
            'cid_id' => $this->id,
            'cid_nome' => $this->cid_nome,
        ];
    }
}
