<?php

namespace App\Modules\Units\Entities\ValueObjects;

final class ShelfLife
{
    public function __construct(
        public ?\DateTime $dateOfExpiration = null,
        public ?\DateTime $dateOfProduction = null,
        public ?int $shelfLifeDays = null,
    )
    {
    }
}
