<?php

namespace App\Service;

use App\Contracts\Scale;
use App\Enum\ScalesEnum;

class AMinorScale implements Scale
{

    public function notes(): array
    {
        return [
            'A', 'B', 'C' , 'D' , 'E' , 'F' , 'G'
        ];
    }

    public function type(): string
    {
        return ScalesEnum::MINOR->value;
    }
}
