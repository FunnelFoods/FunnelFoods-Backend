<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';

    protected $casts = [
        'directions' => 'array',
        'categories' => 'array',
        'ingredients' => 'array',
        'ingredients_processed' => 'array'
    ];
}
