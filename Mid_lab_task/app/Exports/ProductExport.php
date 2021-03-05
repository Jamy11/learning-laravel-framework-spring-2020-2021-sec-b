<?php

namespace App\Exports;

use App\Physical_store_channel;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        
        return Physical_store_channel::all();
    }
}
