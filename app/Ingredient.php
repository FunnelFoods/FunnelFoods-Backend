<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Nutrient;

class Ingredient extends Model
{
    protected $table = "ingredients";
    protected $primaryKey = "fdc_id";

    public function nutrients() {
        return $this->belongsToMany(Nutrient::class, 'nutritions', 'fdc_id', 'id');
    }
}
