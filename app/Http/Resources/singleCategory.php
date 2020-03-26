<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class singleCategory extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'href' => [
                'posts' => route('category.allPost',$this->id)
            ]
        ];
    }
}
