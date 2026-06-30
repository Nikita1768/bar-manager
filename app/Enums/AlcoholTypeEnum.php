<?php

namespace App\Enums;

enum AlcoholTypeEnum: string
{
    case NO_TYPE = 'No type';
    case WHISKY = 'Whisky';
    case GIN = 'Gin';
    case VODKA = 'Vodka';
    case RUM = 'Rum';
    case TEQUILA = 'Tequila';
    case COGNAC = 'Cognac';
    case BRANDY = 'Brandy';
    case BEER = 'Beer';
    case WHITE_WINE = 'White Wine';
    case RED_WINE = 'Red Wine';
    case SPARKLING_WINE = 'Sparkling Wine';
    case CIDER = 'Cider';
    case BITTER = 'Bitter';
    case VERMOUTH = 'Vermouth';
    case LIQUEUR = 'Liqueur';
    case APERITIF = 'Aperitif';
    case SAKE = 'Sake';


    public function name(): string
    {
        return match ($this) {
            self::NO_TYPE => 'No type',
            self::WHISKY => 'Whisky',
            self::GIN => 'Gin',
            self::VODKA => 'Vodka',
            self::RUM => 'Rum',
            self::TEQUILA => 'Tequila',
            self::COGNAC => 'Cognac',
            self::BRANDY => 'Brandy',
            self::BEER => 'Beer',
            self::WHITE_WINE => 'White Wine',
            self::RED_WINE => 'Red Wine',
            self::SPARKLING_WINE => 'Sparkling Wine',
            self::CIDER => 'Cider',
            self::BITTER => 'Bitter',
            self::VERMOUTH => 'Vermouth',
            self::APERITIF => 'Aperitif',
            self::SAKE => 'Sake',
        };
    }
}
