<?php

namespace App\Modules\Units\Repositories;

interface UnitRepositoryInterface
{
    public function getByBackpackId(int $backpackId);
}
