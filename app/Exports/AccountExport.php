<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\Account;

class AccountExport implements FromQuery, WithHeadings
{
    protected $year;

    public function __construct($year = null)
    {
        return $this->year = $year;
    }
    public function query()
    {
        $query =  Account::query();
        if(!is_null($this->year))
        {
            $query->whereYear('date', $this->year);
        }

        return $query;
    }

    public function headings():array
    {
        return [
            'Sr. No', 'Project Id', 'Date', 'Cheque Number/Receipt Number', 'Description', 'Beneficiary', 'Amount Deposited', 'Amount Withdrwan', 'Project', 'Column 1', 'Column 2', 'Service Type', 'Remarks', 'Total in account',
        ];
    }

}
