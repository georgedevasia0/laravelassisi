<?php

namespace App\Exports;

use App\Newsletter;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class NewsletterExport implements FromQuery
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    
    public function __construct(int $from ,int $to)
    {
        $this->to=date("Y-m-d",$to);
        $this->from=date("Y-m-d",$from);
    }
    public function query()
    {
        return  Newsletter::whereBetween('date',[$this->from,$this->to]);
    }
}
