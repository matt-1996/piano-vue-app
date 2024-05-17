<?php

namespace App\Service;

use App\Contracts\Chords;

class AMinorChords implements Chords
{

    public function chords(): array
    {
        return [
            'Am' , 'Bdim' , 'C' , 'Em' , 'F' , 'G'
        ];
    }
}
