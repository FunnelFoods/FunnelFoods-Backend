<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Nutrient;

class Ingredient extends Model
{
    protected $table = "ingredients";

    public function nutrients() {
        return $this->belongsToMany(Nutrient::class, 'nutritions', 'fdc_id', 'nutrient_id', 'fdc_id');
    }
}
