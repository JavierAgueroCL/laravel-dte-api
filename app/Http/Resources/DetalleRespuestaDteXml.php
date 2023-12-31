<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DetalleRespuestaDteXml extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $array = parent::toArray($request);
        $array['file'] = $this->file;
        $array['acceptanceClaims'] = $this->acceptanceClaims();

        return $array;
    }
}
