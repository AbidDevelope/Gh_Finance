<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use App\Models\Miscellaneous;

class MiscellaneousExport implements FromQuery, WithHeadings, WithMapping
{

    public function query()
    {
       return Miscellaneous::query();
    }   

    public function headings():array
    {
       return [
        'Miscellaneous ID', 'Description', 'Month', 'Date', 'Total', 'Subtotal', 'Others', 'Grandtotal',
       ];
    }

    public function map($miscellaneous):array
    {
      $mappedItems = [];
      foreach($miscellaneous->miscellaneousItems as $item)
      {
        $mappedItems[] = [
            $item->miscellaneous_id,
            $item->description,
            $item->month,
            $item->date,
            $item->total,
            $miscellaneous->subtotal,
            $miscellaneous->others,
            $miscellaneous->grandtotal,
        ];
      }
      return $mappedItems;
    }
}
