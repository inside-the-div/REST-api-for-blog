<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class commentResource extends JsonResource
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
          'name' => $this->name,
          'comment' => $this->comment,
          'href' => [
            'post' => route('posts.show',$this->post_id)
          ]
        ];
    }
}
