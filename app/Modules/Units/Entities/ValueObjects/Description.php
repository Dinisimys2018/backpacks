<?php

namespace App\Modules\Units\Entities\ValueObjects;

final class Description
{
    public function __construct(
        public ?string $shortDescription,
        public ?string $fullDescription,
    )
    {
    }
}
