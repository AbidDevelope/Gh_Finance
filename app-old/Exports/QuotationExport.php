<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use App\Models\Quotation;

class QuotationExport implements FromQuery, WithHeadings, WithMapping
{
    public function query()
    {
        return Quotation::query();
    }

    public function headings():array
    {
        return [
           'Project ID', 'Quotation ID', 'Quotation Number', 'Quotation Date', 'Description', 'Unit', 'Qty', 'Price', 'Total', 'Subtotal', 'Others', 'Grandtotal'
        ];
    }

    public function map($quotations):array{
        $mappedItems = [];
        foreach($quotations->quotationItems as $item)
        {
            $mappedItems[] = [
                $quotations->project_id,
                $item->quotation_id,
                $quotations->quotation_number,
                $quotations->quotation_date,
                $item->description,
                $item->unit,
                $item->qty,
                $item->price,
                $item->total,
                $quotations->subtotal,
                $quotations->others,
                $quotations->grandtotal,
            ];
        }
        return $mappedItems;
    }
}
