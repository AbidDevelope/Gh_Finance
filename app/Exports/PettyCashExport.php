<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\withHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use App\Models\PettyCash;

class PettyCashExport implements FromQuery, withHeadings
{
    use Exportable;
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
        return $query->select([
            'id', 'project_id', 'date', 'cheque_number_receipt_number', 'description', 'beneficiary', 'amount_deposited', 'amount_withdrawn', 'project_name', 'total_in_account'
        ]);
    }

    public function headings():array
    {
        return [
            'Id', 'Project Id', 'Date', 'Cheque Number Receipt Number', 'Description', 'Beneficiary', 'Amount Deposited', 'Amount Withdrawn', 'Project Name', 'Total In Account'
        ];
    }
}
