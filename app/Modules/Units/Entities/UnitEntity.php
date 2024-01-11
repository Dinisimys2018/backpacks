<?php

namespace App\Modules\Units\Entities;

use App\Application\Entities\EntityInterface;
use App\Modules\Units\Entities\ValueObjects\ShelfLife;
use App\Modules\Units\Entities\ValueObjects\UnitType;

final class UnitEntity implements EntityInterface
{
    private ?int $id = null;

    public function __construct(
        public UnitType $type,
        public string $name,
        public int $backpackId,
        public ShelfLife $shelfLife,
        public int $quantity,
        public int $weight = 0,
        public ?int $unitCategoryId = null,
        public ?int $descriptionId = null,
        public ?int $parentId = null,
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
