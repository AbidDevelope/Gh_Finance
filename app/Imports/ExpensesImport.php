<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use App\Models\Expense;
use App\Models\PettyCash;
use App\Models\ExpenseItem;
use DateTime;

class ExpensesImport implements ToCollection
{
    use Importable;

    public function collection(Collection $rows)
    {
        $rows->shift(); // Skip the header row
        foreach ($rows as $row) 
        {
            $excelDate = $row[0] ?? ''; 
            $dateObject = \DateTime::createFromFormat('d-M-y', strtoupper($excelDate));
            
            if ($dateObject) {
                $date = $dateObject->format('Y-m-d');
            } else {
                $date = null;
            }
       
            $chequeNumberReceiptNumber = $row[1] ?? ''; 
            $description = $row[2] ?? '';
            $beneficiary = $row[3] ?? '';
            $amountDeposited = $row[4] ?? '';
            $amountWithdrawn = $row[5] ?? '';
            $project = $row[6] ?? '';

            PettyCash::create([
                'date' => $date,
                'cheque_number_receipt_number' => $chequeNumberReceiptNumber,
                'description' => $description,
                'beneficiary' => $beneficiary,
                'amount_deposited' => $amountDeposited,
                'amount_withdrawn' => $amountWithdrawn,
                'project_name' => $project,
            ]);
        }
    }

}
