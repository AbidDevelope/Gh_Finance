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
            $excelDate = $row[1]; 
            $dateObject = \DateTime::createFromFormat('d-M-y', strtoupper($excelDate));
            
            if ($dateObject) {
                $date = $dateObject->format('Y-m-d');
            } else {
                $date = null;
            }
        
       
            $chequeNumberReceiptNumber = $row[2]; 
            $description = $row[3];
            $beneficiary = $row[4];
            $amountDeposited = $row[5];
            $amountWithdrawn = $row[6];
            $project = $row[7];
            
            $totalAmountDeposited = $row[9]; 
            $totalAmountWithdrawn = $row[10]; 
            $totalInAccount = $row[11]; 

            PettyCash::create([
                'date' => $date,
                'cheque_number_receipt_number' => $chequeNumberReceiptNumber,
                'description' => $description,
                'beneficiary' => $beneficiary,
                'amount_deposited' => $amountDeposited,
                'amount_withdrawn' => $amountWithdrawn,
                'project' => $project,
                'total_amount_deposited' => $totalAmountDeposited,
                'total_amount_withdrawn' => $totalAmountWithdrawn,
                'total_in_account' => $totalInAccount,
            ]);
        }
    }

}
