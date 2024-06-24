<?php

declare(strict_types=1);

namespace App\Users\Infrastructure\Adapters;

use App\ModuleX\Infrastructure\Api\Api;

class ModuleXAdapter
{
    public function __construct(private readonly API $moduleXApi)
    {}

    public function getSomeData(): array
    {
        return $this->moduleXApi->getSomeData();
    }

}
