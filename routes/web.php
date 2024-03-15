<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\FinanceController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\ExpensesController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\HRController;
use App\Http\Controllers\Admin\QuotationController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\RentController;
use App\Http\Controllers\Admin\ElectricityController;
use App\Http\Controllers\Admin\ReimbursementController;



// ------------------------- AuthController -------------------------- //
Route::controller(AuthController::class)->group(function(){
    Route::get('/', 'getLogin')->name('/');
    Route::post('login', 'postLogin')->name('admin/login');
    Route::get('register', 'getRegister')->name('admin/register');
    Route::post('register', 'postRegister')->name('admin/register');

    Route::middleware(['adminAuthentication'])->prefix('admin')->group(function(){
        Route::get('profile', 'profile')->name('profile');
        Route::get('dashboard', 'index')->name('dashboard');
        Route::get('logout', 'logout')->name('admin/logout');
        Route::get('profile', 'profile')->name('profile');
        Route::post('changeProfile', 'changeProfile')->name('changeProfile');
        Route::post('profile/update/{id}', 'profileUpdate')->name('profile/update');
    });
});

// ----------------------------- ServicesController ---------------------------- //
Route::controller(ServicesController::class)->prefix('admin')->middleware(['adminAuthentication'])->group(function(){
    Route::get('all/services', 'allServices')->name('all/services');
    Route::get('all-services/view/{id}', 'allServicesView')->name('all-services/view');
    Route::get('search/all-services', 'searchAllServices')->name('search/all-services');

    Route::get('designs', 'designs')->name('designs');
    Route::get('designs/create', 'createDesignList')->name('designs/create');
    Route::post('create/designs', 'createDesign')->name('create/designs');
    Route::get('design/edit/{id}', 'designEdit')->name('design/edit');
    Route::post('design/update/{id}', 'designUpdate')->name('design/update');
    Route::get('design/view/{id}', 'designView')->name('design/view');
    Route::get('design/delete/{id}', 'designDelete')->name('design/delete');
    Route::get('search/design', 'searchDesign')->name('search/design');

    Route::get('constructions', 'constructions')->name('constructions');
    Route::get('constructions/create', 'createConstructionsForm')->name('create/constructions');
    Route::post('constructions/create', 'createConstructions')->name('create/constructions');
    Route::get('construction/view/{id}', 'constructionView')->name('construction/view');
    Route::get('construction/edit/{id}', 'constructionEdit')->name('construction/edit');
    Route::post('construction/update/{id}', 'constructionUpdate')->name('construction/update');
    Route::get('construction/delete/{id}', 'constructionDelete')->name('construction/delete');
    Route::get('search/construction', 'searchConstruction')->name('search/construction');

    Route::get('design_&_construction', 'designConstructions')->name('design_&_construction');
    Route::get('design_&_construction/create', 'designConstructionCreateForm')->name('design_&_construction/create');
    Route::post('design_&_construction/create', 'designConstructionCreate')->name('design_&_construction/create');
    Route::get('design_&_construction/view/{id}', 'designConstructionView')->name('design_&_construction/view');
    Route::get('design_&_construction/edit/{id}', 'designConstructionEdit')->name('design_&_construction/edit');
    Route::post('design_&_construction/update/{id}', 'designConstructionUpdate')->name('design_&_construction/update');
    Route::get('design_&_construction/delete/{id}', 'designConstructionDelete')->name('design_&_construction/delete');
    Route::get('search/design&construction', 'searchDesign_Construction')->name('search/design&construction');
});

// -------------------------- ExpensesController --------------------------- //
Route::controller(ExpensesController::class)->prefix('admin')->middleware(['adminAuthentication'])->group(function(){
    Route::get('pettyCash', 'pettyCash')->name('pettyCash');
    Route::get('search/pettyCash', 'searchPettyCash')->name('search/pettyCash');
    Route::get('pettyCash/create', 'pettyCashCreateForm')->name('pettyCash/create');
    Route::post('pettyCash/create', 'pettyCashPost')->name('pettyCash/create');
    Route::get('expenses/view/{id}', 'expensesView')->name('expenses/view');
    Route::get('expenses/edit/{id}', 'expensesEdit')->name('expenses/edit');
    Route::post('expenses/update/{id}', 'expensesUpdate')->name('expenses/update');
    Route::get('expenses/delete/{id}', 'expensesDelete')->name('expenses/delete');
    Route::get('expenses/change/status/{id}', 'expensesChangeStatus')->name('expenses/change/status');
    Route::get('search/filter', 'searchFilter')->name('search/filter');
    Route::get('miscellaneous', 'miscellaneous')->name('miscellaneous');
    Route::get('miscellaneous/create', 'miscellaneousCreateForm')->name('miscellaneous/create');
    Route::post('miscellaneous/create', 'miscellaneousCreate')->name('miscellaneous/create');
    Route::get('miscellaneous/view/{id}', 'miscellaneousView')->name('miscellaneous/view');
    Route::get('miscellaneous/edit/{id}', 'miscellaneousEdit')->name('miscellaneous/edit');
    Route::post('miscellaneous/update/{id}', 'miscellaneousUpdate')->name('miscellaneous/update');
    Route::get('miscellaneous/delete/{id}', 'miscellaneousDelete')->name('miscellaneous/delete');
    Route::get('search/miscellaneous', 'searchMiscellaneous')->name('search/miscellaneous');
    Route::get('miscellaneous/export', 'miscellaneousExport')->name('miscellaneous/export');
    Route::post('export-excel-csv', 'pettyCashImport')->name('export-excel-csv');
    // Petty cash
    // Route::post('pettyCash/create', 'pettyCashCreate')->name('pettyCash/create');

    // Payroll Route Start
    Route::get('payroll', 'payroll')->name('payroll');
    Route::get('payroll/create', 'payrollCreate')->name('payroll/create');
    Route::post('payroll/create', 'payrollCreatePost')->name('payroll/create');
    Route::get('payroll/view/{id}', 'payrollView')->name('payroll/view');
    Route::get('payroll/edit/{id}', 'payrollEdit')->name('payroll/edit');
    Route::post('payroll/update/{id}', 'payrollUpdate')->name('payroll/update');
    Route::get('payroll/delete/{id}', 'payrollDelete')->name('payroll/delete');
});
Route::get('/project-data/{id}',[ExpensesController::class, 'projectDataGet'])->name('project.data');

// -------------------------- RentController --------------------------- //
Route::controller(RentController::class)->prefix('admin')->middleware(['adminAuthentication'])->group(function(){
    Route::get('rent', 'rent')->name('rent');
    Route::get('rent/create', 'rentCreate')->name('rent/create');
    Route::post('rent/create', 'rentCreatePost')->name('rent/create');
    Route::get('rent/view/{id}', 'rentView')->name('rent/view');
    Route::get('rent/edit/{id}', 'rentEdit')->name('rent/edit');
    Route::post('rent/update/{id}', 'rentUpdate')->name('rent/update');
    Route::get('rent/delete/{id}', 'rentDelete')->name('rent/delete');
});

// ------------------------- InvoiceController ----------------------- //
Route::controller(InvoiceController::class)->prefix('admin')->middleware('adminAuthentication')->group(function(){
    Route::get('invoices', 'invoiceList')->name('invoices');
    Route::get('invoices/create', 'invoice')->name('invoices/create');
    Route::post('invoice/create', 'invoiceCreate')->name('invoice/create');
    Route::get('invoice/view/{id}', 'invoiceView')->name('invoice/view');
    Route::get('invoice/pdf/view/{id}', 'invoicePdfView')->name('invoice/pdf/view');
    Route::get('invoice/pdf/download/{id}', 'downloadInvoicePDF')->name('invoice/pdf/download');
    Route::get('invoice/edit/{id}', 'invoiceEdit')->name('invoice/edit');
    Route::post('invoice/update/{id}', 'invoiceUpdate')->name('invoice/update');
    Route::get('invoice/delete/{id}', 'invoiceDelete')->name('invoice/delete');
    Route::get('search/invoice', 'searchInvoice')->name('search/invoice');
});
Route::get('/project-data/{id}', [InvoiceController::class, 'getProjectData'])->name('project.data');

// ------------------------- HRController ------------------------ //
Route::controller(HRController::class)->prefix('admin')->middleware('adminAuthentication')->group(function(){
    Route::get('indemnity&leave', 'indemnityAndleave')->name('indemnity&leave');
    Route::get('indemnity&leave/create', 'indemnityAndleaveCreate')->name('indemnity&leave/create');
    Route::post('indemnity/create', 'indemnityAndleaveCreatePost')->name('indemnity/create');
    Route::get('indemnity&leave/view/{id}', 'indemnityAndleaveView')->name('indemnity&leave/view');
    Route::get('indemnity&leave/edit/{id}', 'indemnityAndleaveEdit')->name('indemnity&leave/edit');
    Route::post('indemnity&leave/update/{id}', 'indemnityAndleaveUpdate')->name('indemnity&leave/update');
    Route::get('indemnity&leave/delete/{id}', 'indemnityLeaveDelete')->name('indemnity&leave/delete');
    Route::post('indemnity/import', 'indemnityImport')->name('indemnity/import');
    Route::get('indemnity/export', 'indemnityExport')->name('indemnity/export');
    Route::get('indemnitysearchByDate', 'indemnityFilter')->name('indemnitysearchByDate');
});

// ---------------------------- QuotationController ------------------------------ //
Route::controller(QuotationController::class)->prefix('admin')->middleware('adminAuthentication')->group(function(){
    Route::get('quotation', 'quotation')->name('quotation');
    Route::get('/lang/{locale}', 'switchLanguage')->name('lang.switch');
    Route::get('quotations/create', 'quotationCreateForm')->name('quotations/create');
    Route::post('quotations/create', 'quotationCreate')->name('quotations/create');
    Route::get('quotation/view/{id}', 'quotationView')->name('quotation/view');
    Route::get('search/quotation', 'searchQuotation')->name('search/quotation');
    Route::get('quotation/edit/{id}', 'quotationEdit')->name('quotation/edit');
    Route::post('quotation/update/{id}', 'quotationUpdate')->name('quotation/update');
    Route::get('quotation/delete/{id}', 'quotationDelete')->name('quotation/delete');
    Route::get('quotation/export', 'quotationExport')->name('quotation/export');
});
Route::get('/project-data/{id}', [QuotationController::class, 'getProjectData'])->name('project.data');

// ---------------------------- ProjectController ---------------------------------- //
Route::controller(ProjectController::class)->prefix('admin')->middleware('adminAuthentication')->group(function(){
    Route::get('projects', 'projects')->name('projects');
    Route::get('projects/create', 'projectsCreateForm')->name('projects/create');
    Route::post('projects/create', 'projectsCreate')->name('projects/create');
    Route::get('project/view/{id}', 'projectsView')->name('project/view');
    Route::get('projects/edit/{id}', 'projectsEdit')->name('projects/edit');
    Route::post('projects/update/{id}', 'projectsUpdate')->name('projects/update');
    Route::get('projects/delete/{id}', 'projectsDelete')->name('projects/delete');
});


// ======================= ReportController ========================= //
Route::controller(ReportController::class)->prefix('admin')->middleware('adminAuthentication')->group(function(){
    Route::get('project/report', 'projectReport')->name('project/report');
    Route::get('searchByDate', 'searchByDate')->name('searchByDate');
    Route::get('report/view', 'reportView')->name('report/view');
    Route::get('expense/report', 'expenseReport')->name('expense/report');
    Route::get('p_&_l', 'profitLossReport')->name('p_&_l');
});

// ============================ AccountController ========================= //
Route::controller(AccountController::class)->prefix('admin')->middleware('adminAuthentication')->group(function(){
    Route::get('accounts', 'accounts')->name('accounts');
    Route::get('accounts/create', 'accountCreate')->name('accounts/create');
    Route::post('accountreport/create', 'accountReportCreate')->name('accountreport/create');
    Route::get('accounts/view/{id}', 'accountsView')->name('accounts/view');
    Route::get('accounts/edit/{id}', 'accountEdit')->name('accounts/edit');
    Route::post('accounts/update/{id}', 'accountUpdate')->name('accounts/update');
    Route::get('accounts/delete/{id}', 'accountDelete')->name('accounts/delete');
    Route::post('accounts/import', 'accountsImport')->name('accounts/import');
    Route::get('account/export', 'accountExport')->name('account/export');
    Route::get('accountReportsearch', 'accountReportSearchBydate')->name('accountReportsearch');
});

// ======================== ElectricityController ======================== //
Route::controller(ElectricityController::class)->prefix('admin')->middleware(['adminAuthentication'])->group(function(){
    Route::get('electricity', 'electricity')->name('electricity');
    Route::get('electricity/create', 'electricityCreate')->name('electricity/create');
    Route::post('electricity/create', 'electricityCreatePost')->name('electricity/create');
    Route::get('electricity/view/{id}', 'electricityView')->name('electricity/view');
    Route::get('electricity/edit/{id}', 'electricityEdit')->name('electricity/edit');
    Route::post('electricity/update/{id}', 'electricityUpdate')->name('electricity/update');
    Route::get('electricity/delete/{id}', 'electricityDelete')->name('electricity/delete');
    Route::post('file/upload', 'fileUpload')->name('file/upload');
});

// ================================ ReimbursementController ============================= //
Route::controller(ReimbursementController::class)->prefix('admin')->middleware(['adminAuthentication'])->group(function(){
    Route::get('reimbursement', 'reimbursement')->name('reimbursement');
    Route::get('reimbursement/create', 'reimbursementCreate')->name('reimbursement/create');
    Route::post('reimbursement/create', 'reimbursementCreatePost')->name('reimbursement/create');
    Route::get('reimbursement/view/{id}', 'reimbursementView')->name('reimbursement/view');
    Route::get('reimbursement/edit/{id}', 'reimbursementEdit')->name('reimbursement/edit');
    Route::post('reimbursement/update/{id}', 'reimbursementUpdate')->name('reimbursement/update');
    Route::get('reimbursement/delete/{id}', 'reimbursementDelete')->name('reimbursement/delete');
});
