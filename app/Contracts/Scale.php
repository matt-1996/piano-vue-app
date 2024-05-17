<?php

namespace App\Contracts;

use App\Enum\ScalesEnum;

interface Scale
{
    public function notes(): array;

    public function type(): string;

}
