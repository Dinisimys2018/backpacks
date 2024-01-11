<?php

namespace App\Modules\Units\Entities\ValueObjects;

enum UnitType: string
{
    case simple = 'simple';
    case group = 'group';
}
