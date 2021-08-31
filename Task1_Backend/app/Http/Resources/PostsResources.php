<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostsResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    // show posts with specific format 
    public function toArray($request)
    {
        return [ 'id'=>$this->id,
                  'title'=>$this->title,
                'body'=>$this->body ,
              ];
    }
}
