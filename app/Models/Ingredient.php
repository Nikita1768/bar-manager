<?php

namespace App\Models;

use App\Enums\IngredientTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredient extends Model
{
    /** @use HasFactory<\Database\Factories\IngredientFactory> */
    use HasFactory;
    protected $fillable = ['name', 'description', 'type'];

    public function cocktails(): BelongsToMany
    {
        return $this->belongsToMany(Cocktail::class)
            ->withPivot('amount', 'unit');
    }
    protected $casts = [
        'type' => IngredientTypeEnum::class
    ];
}
