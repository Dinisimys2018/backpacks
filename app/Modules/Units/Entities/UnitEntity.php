<?php

namespace App\Modules\Units\Entities;


use App\Modules\Units\Entities\ValueObjects\Description;
use App\Modules\Units\Entities\ValueObjects\ShelfLife;

final class UnitEntity
{
    private ?int $id = null;

    public function __construct(
        public string $name,
        public int $backpackId,
        public ShelfLife $shelfLife,
        public float $weight = 0,
        public ?int $unitCategoryId = null,
        public ?Description $description = null,
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
