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
            $excelDate = $row[1]; // Your date column
            // Attempt to convert '11-jul-19' to 'Y-m-d' format, making sure month abbreviations are uppercase
            $dateObject = \DateTime::createFromFormat('d-M-y', strtoupper($excelDate));
            
            if ($dateObject) {
                $date = $dateObject->format('Y-m-d');
            } else {
                // Handle the case where the date conversion fails
                $date = null; // You might want to log this or handle it as per your application's requirements
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
        
      







        // $rows->shift(); // Skip the header row

        // foreach ($rows as $row) 
        // {
        //     $excelDate = $row[1]; // Assuming this is the date column
        //     $date = is_numeric($excelDate) 
        //             ? \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($excelDate)->format('Y-m-d')
        //             : null; // Handle non-numeric value appropriately

        //     // Attempt to extract numeric values from string fields or default to 0 if not possible
        //     $subtotal = is_numeric($row[3]) ? $row[3] : 0; // Adjust extraction logic as needed
        //     $others = is_numeric($row[4]) ? $row[4] : 0; // Adjust extraction logic as needed
        //     $grandtotal = is_numeric($row[5]) ? $row[5] : 0; // Adjust extraction logic as needed
        //     $amount_deposit = is_numeric($row[8]) ? $row[8] : 0; // Adjust extraction logic as needed
        //     $amount_withdrawn = is_numeric($row[9]) ? $row[9] : 0; // Adjust extraction logic as needed
        //     $total = is_numeric($row[10]) ? $row[10] : 0; // Adjust extraction logic as needed

        //     $projectId = 1;
        //     // Create an Expense record
        //     $expense = Expense::create([
        //         'project_id' => $projectId,
        //         'month' => $row[0],
        //         'date' => $date,
        //         'beneficiary' => $row[2],
        //         'subtotal' => $subtotal,
        //         'others' => $others,
        //         'grandtotal' => $grandtotal,
        //     ]);

        //     // Create an ExpenseItem record linked to the Expense
        //     ExpenseItem::create([
        //         'expenses_id' => $expense->id,
        //         'description' => $row[6],
        //         'receipt' => $row[7],
        //         'amount_deposit' => $amount_deposit,
        //         'amount_withdrawn' => $amount_withdrawn,
        //         'total' => $total,
        //     ]);
        // }
    }

}
