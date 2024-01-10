<?php

namespace App\Modules\Units\Builders;

use App\Modules\Units\Entities\UnitGroupEntity;

final class UnitEntityBuilder
{
    private ?UnitGroupEntity $unitEntity = null;

    public function build()
    {

    }

    public function get(): UnitGroupEntity
    {
        $result = $this->unitEntity;
        $this->reset();

        return $result;
    }

    private function reset(): void
    {
        $this->unitEntity = null;
    }
}
