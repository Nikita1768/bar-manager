<?php

namespace App\Models;

use App\Enums\IngredientTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cocktail extends Model
{
    /** @use HasFactory<\Database\Factories\CocktailFactory> */
    use HasFactory;
    protected $fillable = ['name', 'description'];

    public function ingredients(): BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class)
            ->withPivot('amount', 'unit');
    }

    public function isAlcoholic(): bool
    {
        return $this->ingredients()
            ->whereIn('type', [
                IngredientTypeEnum::LOW_ALCOHOL->value,
                IngredientTypeEnum::BEER->value,
                IngredientTypeEnum::SPIRIT->value
                ])
            ->exists();
    }
}
