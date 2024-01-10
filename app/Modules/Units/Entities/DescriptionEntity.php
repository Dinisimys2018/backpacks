<?php

namespace App\Modules\Units\Entities;

use App\Application\Entities\EntityInterface;
use App\Modules\Units\Entities\ValueObjects\ShelfLife;
use App\Modules\Units\Entities\ValueObjects\UnitMeasure;

final class DescriptionEntity implements  EntityInterface
{
    private ?int $id = null;

    public function __construct(
        public int $unitGroupId,
        public string $description
    )
    {
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
