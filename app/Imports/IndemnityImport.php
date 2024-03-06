<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use App\Models\IndemnityLeave;
use DateTime; 

class IndemnityImport implements ToCollection
{
    use Importable;

    public function collection(Collection $rows)
    {

        $rows->shift();  
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

            $chequeNumberReceiptNumber = $row[1] ?? '';
            $description = $row[2] ?? '';
            $beneficiary = $row[3] ?? '';
            $amount_deposited = $row[4] ?? '';
            $amount_withdrawn = $row[5] ?? '';
            $project_name = $row[6] ?? '';
            $service_type = $row[7] ?? '';
            $remarks = $row[8] ?? '';
        
        
            IndemnityLeave::create([
                'date' => $date,
                'cheque_number_receipt_number' => $chequeNumberReceiptNumber,
                'description' => $description,
                'beneficiary' => $beneficiary,
                'amount_deposited' => $amount_deposited,
                'amount_withdrawn' => $amount_withdrawn,
                'project_name' => $project_name,
                'service_type' => $service_type,
                'remarks' => $remarks,
            ]);
        
        }
    }
}
