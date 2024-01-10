<?php

namespace App\Application\Entities;

interface EntityInterface
{
    public function setId(int $id): void;

    public function getId(): int;
}
