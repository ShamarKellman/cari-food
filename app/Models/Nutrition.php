<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nutrition extends Model
{
    use HasFactory;

    protected $fillable = [
        'recipe_id',
        'serving_size',
        'calories',
        'carbohydrates',
        'cholesterol',
        'fat',
        'fibre',
        'protein',
        'saturated_fat',
        'sodium',
        'sugar',
        'unsaturated_fat',
    ];
}
