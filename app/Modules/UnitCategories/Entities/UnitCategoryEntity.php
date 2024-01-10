<?php

namespace App\Modules\UnitCategories\Entities;

final class UnitCategoryEntity
{
    private ?int $id = null;

    public function __construct(
        public string $name,
        public ?string $description = null,
        public ?int $parentUnitCategoryId = null,
    )
    {
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
}
