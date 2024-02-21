<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use App\Models\Expense;
use App\Models\ExpenseItem;

class ExpensesImport implements ToCollection
{
    use Importable;

    public function collection(Collection $rows)
    {
    //     $rows->shift(); // Skip the header row

    //     foreach ($rows as $row) 
    //     {
    //         $excelDate = $row[1]; // Assuming this is the date column
    //         $date = is_numeric($excelDate) 
    //                 ? \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($excelDate)->format('Y-m-d')
    //                 : null; // Handle non-numeric value appropriately

    //         // Attempt to extract numeric values from string fields or default to 0 if not possible
    //         $subtotal = is_numeric($row[3]) ? $row[3] : 0; // Adjust extraction logic as needed
    //         $others = is_numeric($row[4]) ? $row[4] : 0; // Adjust extraction logic as needed
    //         $grandtotal = is_numeric($row[5]) ? $row[5] : 0; // Adjust extraction logic as needed
    //         $amount_deposit = is_numeric($row[8]) ? $row[8] : 0; // Adjust extraction logic as needed
    //         $amount_withdrawn = is_numeric($row[9]) ? $row[9] : 0; // Adjust extraction logic as needed
    //         $total = is_numeric($row[10]) ? $row[10] : 0; // Adjust extraction logic as needed

    //         $projectId = 1;
    //         // Create an Expense record
    //         $expense = Expense::create([
    //             'project_id' => $projectId,
    //             'month' => $row[0],
    //             'date' => $date,
    //             'beneficiary' => $row[2],
    //             'subtotal' => $subtotal,
    //             'others' => $others,
    //             'grandtotal' => $grandtotal,
    //         ]);

    //         // Create an ExpenseItem record linked to the Expense
    //         ExpenseItem::create([
    //             'expenses_id' => $expense->id,
    //             'description' => $row[6],
    //             'receipt' => $row[7],
    //             'amount_deposit' => $amount_deposit,
    //             'amount_withdrawn' => $amount_withdrawn,
    //             'total' => $total,
    //         ]);
    //     }
    }

}
