<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;
use App\Models\Expense;
use App\Models\Payment;
use App\Models\PettyCash;
use App\Models\Quotation;
use App\Models\IndemnityLeave;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_type',
        'start_date',
        'project_manager',
        'manager_email',
        'Manager_mobile',
        'Manager_landline',
        'manager_remarks',

        'company_name',
        'contact_name',
        'client_email',
        'client_mobile',
        'company_landline',
        'company_location',
        'company_landmark',
        'company_country',
        'company_website',
        'company_remarks',

        'project_name',
        'contact_person',
        'project_email',
        'project_mobile',
        'project_location',
        'project_value',
        'project_country',
        'payment_plan',
        'project_description',
        'total_receivable',
    ];

    public function payments()
    {
        return $this->hasMany(Payment::class, 'project_id');
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function pettyCash(){
        return $this->hasMany(PettyCash::class);
    }

    public function quotation()
    {
        return $this->hasMany(Quotation::class);
    }

    public function indemnity()
    {
        return $this->hasMany(IndemnityLeave::class);
    }
}
