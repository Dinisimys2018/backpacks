<?php

namespace App\Modules\UnitCategories\Entities;

use App\Application\Entities\EntityInterface;

final class UnitCategoryEntity implements EntityInterface
{
    private ?int $id = null;

    public function __construct(
        public string $name,
        public ?string $description = null,
        public ?int $parentCategoryId = null,
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
