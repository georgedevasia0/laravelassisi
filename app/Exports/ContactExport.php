<?php

namespace App\Exports;

use App\contact;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class ContactExport implements Fromquery
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    public function __construct(int $from ,int $to)
    {
        $this->to=date("Y-m-d",$to);
        $this->from=date("Y-m-d",$from);
    }
    public function query()
    {
        return  contact::whereBetween('date',[$this->from,$this->to]);
    }
}
