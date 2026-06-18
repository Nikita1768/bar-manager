<?php

namespace App\Enums;

enum InventoryStatusEnum: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case IN_PROCESS = 'in process';

    public function name(): string
    {
        return match ($this) {
            self::ACTIVE => 'Active',
            self::INACTIVE => 'Inactive',
            self::IN_PROCESS => 'In process',
        };
    }
}
