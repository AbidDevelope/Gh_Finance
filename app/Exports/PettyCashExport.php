<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\withHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use App\Models\PettyCash;

class PettyCashExport implements FromQuery, withHeadings
{
    protected $year;

    public function __construct($year=null)
    {
        return $this->year = $year;
    }

    public function query()
    {
        $query = PettyCash::query();
        if(!is_null($this->year))
        {
            $query->whereYear('date', $this->year);
        }
        return $query;
    }

    public function headings():array
    {
        return [
            'Sr. No', 'Project Id', 'Date', 'Cheque Number Receipt Number', 'Description', 'Beneficiary', 'Amount Deposited', 'Amount Withdrawn', 'Project Name', 'Total In Account'
        ];
    }
}
