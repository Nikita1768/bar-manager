<?php

namespace App\Enums;

enum IngredientTypeEnum: string
{
    case SPIRIT = 'Spirit';
    case LOW_ALCOHOL = 'Low alcohol/Wine';
    case BEER = 'Beer';
    case JUICE = 'Juice';
    case SYRUP = 'Syrup';
    case FRUIT = 'Fruit';
    case SOFT_DRINK = 'Soft_drink';
    case GARNISH = 'Garnish';

    public function name(): string
    {
        return match ($this) {
            self::SPIRIT => 'Spirit',
            self::LOW_ALCOHOL => 'Low alcohol',
            self::BEER => 'Beer',
            self::JUICE => 'Juice',
            self::SYRUP => 'Syrup',
            self::FRUIT => 'Fruit',
            self::SOFT_DRINK => 'Soft Drink',
            self::GARNISH => 'Garnish',
        };
    }
}
