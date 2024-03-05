<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\IndemnityLeave;
use DateTime; 

class IndemnityImport implements ToCollection
{
    use Importable;

    public function collection(Collection $rows)
    {
        $rows->shift();  //Skip the header row
        foreach($rows as $row)
        {
           $excelDate = $row[2];
           $dateObject = \DateTime::createFromFormat('d-M-y', strtoupper($excelDate));
           if($dateObject)
           {
            $date = $dateObject->format('Y-m-d');
           }else{
            $date = null;
           }
           $sr_no = $row[1];
           $chequeNumberReceiptNumber = $row[3];
           $description = $row[4];
           $beneficiary = $row[5];
           $amount_deposited = $row[6];
           $amount_withdrawn  = $row[7];
           $project_name = $row[8];
           $service_type = $row[9];
           $remarks = $row[10];

           IndemnityLeave::create([
            'sr_no' => $sr_no,
            'date' => $date,
            'cheque_number_receipt_number' => $chequeNumberReceiptNumber,
            'description' => $description,
            'beneficiary' => $beneficiary,
            'amount_withdrawn' => $amount_deposited,
            'project_name' => $project_name,
            'service_type' => $service_type,
            'remarks' => $remarks,
           ]);
        }
    }
}
