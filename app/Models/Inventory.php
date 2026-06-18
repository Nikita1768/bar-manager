<?php

namespace App\Models;

use App\Enums\InventoryStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    /** @use HasFactory<\Database\Factories\InventoryFactory> */
    use HasFactory;
    protected $fillable = ['name', 'team', 'note', 'count'];
    protected $casts = [
        'status' => InventoryStatusEnum::class,
    ];
}
