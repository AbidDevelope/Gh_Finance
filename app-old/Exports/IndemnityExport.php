<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use App\Models\IndemnityLeave;

class IndemnityExport implements FromQuery, WithHeadings
{
    protected $year;

    public function __construct($year=null)
    {
        return $this->year = $year;
    }

    public function query()
    {
        $query = IndemnityLeave::query();
        if(!is_null($this->year))
        {
            $query->whereYear('date', $this->year);
        }
        return $query;
    }

    public function headings():array
    {
        return [
            'Sr. No', 'Project Id', 'Date', 'Cheque Number / Receipt Number', 'Description', 'Beneficiary', 'Amount Deposited', 'Amount Withdrwan', 'Project Name', 'Service Type', 'Remarks', 'Total in Account'
        ];
    }
}
