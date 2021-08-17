<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;


class MeatResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);

        
        return [
            "id"=>$this->id,
            "name"=>$this->name,
            "price"=>$this->price,
            "photo"=>$this->photo,
            "category"=>$this->category,
            'created_at'=>Carbon::parse($this->created_at)->format('Y-m-d H:i:s')
        ];
    }
}
