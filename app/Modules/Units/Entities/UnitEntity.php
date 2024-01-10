<?php

namespace App\Modules\Units\Entities;


final class UnitEntity
{
    private ?int $id = null;

    public function __construct(
        public string $name,
        public int $backpackId,
        public \DateTime $dateOfExpiration,
        public ?\DateTime $dateOfProduction = null,
        public int $shelfLifeDays = 0,
        public float $weight = 0,
        public ?int $unitCategoryId = null,
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
