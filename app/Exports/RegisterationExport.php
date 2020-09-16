<?php

namespace App\Exports;

use App\Registeration;
use Maatwebsite\Excel\Concerns\FromCollection;

class RegisterationExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Registeration::all();
    }
}
