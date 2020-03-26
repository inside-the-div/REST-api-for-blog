<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class postCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

      return [
         'title' => $this->title,
         'body' => $this->body,
         'description' => $this->description,
         'href' => [
             'comments' => route('comments.index',$this->id),
             'categories' => route('post.allCategories',$this->id)
          ]
      ];
    }
}
