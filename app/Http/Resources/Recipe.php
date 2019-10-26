<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Recipe extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request) {
        return [
            'id' => $this->id,
            'directions' => $this->directions,
            'fat' => $this->fat,
            'date' => $this->date,
            'categories' => $this->categories,
            'calories' => $this->calories,
            'description' => $this->description,
            'protein' => $this->protein,
            'rating' => $this->rating,
            'title' => $this->title,
            'ingredients' => $this->ingredients,
            'sodium' => $this->sodium,
            'ingredients_processed' => $this->ingredients_processed
        ];
    }
}
