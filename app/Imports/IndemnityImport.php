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
            $excelDate = $row[2]; 
            $dateObject = \DateTime::createFromFormat('d-M-y', $excelDate);

            if ($dateObject !== false) {
                $date = $dateObject->format('Y-m-d');
            } else {
                $errors = DateTime::getLastErrors();
                // Handle errors here
                var_dump($errors['warnings']);
                $date = null;
            }



            $sr_no = isset($row[0]) ? $row[0] : null;
            $excelDate = isset($row[1]) ? $row[1] : null; 
            $chequeNumberReceiptNumber = isset($row[2]) ? $row[2] : null;
            $description = isset($row[3]) ? $row[3] : null;
            $beneficiary = isset($row[4]) ? $row[4] : null;
            $amount_deposited = isset($row[5]) ? $row[5] : null;
            $amount_withdrawn = isset($row[6]) ? $row[6] : null;
            $project_name = isset($row[7]) ? $row[7] : null;
            $service_type = isset($row[8]) ? $row[8] : null;
            $remarks = isset($row[9]) ? $row[9] : null;
        
            // Your existing date parsing logic here
        
            IndemnityLeave::create([
                'sr_no' => $sr_no,
                'date' => $date, // Ensure you have processed $excelDate before this point
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
