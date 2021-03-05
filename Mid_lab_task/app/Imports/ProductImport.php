<?php

namespace App\Imports;

use App\Physical_store_channel;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Physical_store_channel([
            //
            // 'Id' => $row[0],
            // 'Coustomer Name'=> $row[1],
            // 'Adress'=> $row[2],
            // 'Phone'=> $row[3],
            // 'product Id'=> $row[4],
            // 'Product name'=> $row[5],
            // 'Unit Price'=> $row[6],
            // 'Quantity'=> $row[7],
            // 'total Price'=> $row[8],
            // 'Date Sold'=> $row[9],
            // 'Payment Type'=> $row[10],
            // 'Status'=> $row[11],
            // 'Created At'=> $row[12],
            // 'Updated At'=> $row[13],
        ]);
    }
}
