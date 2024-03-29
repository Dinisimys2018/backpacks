<?php

namespace App\Modules\Backpacks\Entities;

use App\Application\Entities\EntityInterface;

final class BackpackEntity implements EntityInterface
{
    private ?int $id = null;

    public function __construct(
        public string $name,
        public int $weight = 0,
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
