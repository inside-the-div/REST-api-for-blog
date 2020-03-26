<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\post;
class postResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {


        // $categories = Array();

        // foreach ($this->categories as $c){
        //   $values = Array(
        //     'name' => $c->name,
        //     'href' => route('categories.show',$c->id)
        //   );
        //   array_push($categories, $values);
        // };

        
        
        return [
            'title' => $this->title,
            'body' => $this->body,
            'description' => $this->description,
            'tag' => $this->tag,
            'href' => [
                'comments' => route('comments.index',$this->id),
                'categories' => route('post.allCategories',$this->id)
            ]
        ];
    }
}
