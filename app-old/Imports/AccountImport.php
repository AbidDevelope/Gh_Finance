<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use App\Models\Account;
use DateTime; 

class AccountImport implements ToCollection
{
    use Importable;

    public function collection(Collection $rows)
    {
    $rows->shift();   // Skip the header
    foreach($rows as $row)
    {
        $excelDate = trim($row[0] ?? '');
        $dateObject = $excelDate ? \DateTime::createFromFormat('d-M-y', $excelDate) : null;
        // dd($dateObject);

        if ($dateObject) {
            $date = $dateObject->format('Y-m-d');
        } else {
            $date = null; 
        }
    
        // $sr_no = $row[0] ?? '';
        $chequeNumberReceiptNumber = $row[1] ?? '';
        $description = $row[2] ?? '';
        $beneficiary = $row[3] ?? '';
        $amount_deposited = $row[4] ?? '';
        $amount_withdrawn = $row[5] ?? '';
        $project_name = $row[6] ?? '';
        $column_1 = $row[7] ?? '';
        $column_2 = $row[8] ?? '';
        $service_type = $row[9] ?? '';
        $remarks = $row[10] ?? ''; 
        
    
        Account::create([
            // 'sr_no' => $sr_no,
            'date' => $date,
            'cheque_number_receipt_number' => $chequeNumberReceiptNumber,
            'description' => $description,
            'beneficiary' => $beneficiary,
            'amount_deposited' => $amount_deposited,
            'amount_withdrawn' => $amount_withdrawn,
            'project_name' => $project_name,
            'column_1' => $column_1,
            'column_2' => $column_2,
            'service_type' => $service_type,
            'remarks' => $remarks,
        ]);
    }
    }
}
