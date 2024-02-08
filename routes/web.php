<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\FinanceController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\ExpensesController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\BeneficiaryController;



// ------------------------- AuthController -------------------------- //
Route::controller(AuthController::class)->group(function(){
    Route::get('/', 'getLogin')->name('/');
    Route::post('login', 'postLogin')->name('admin/login');
    Route::get('register', 'getRegister')->name('admin/register');
    Route::post('register', 'postRegister')->name('admin/register');

    Route::middleware(['adminAuthentication'])->prefix('admin')->group(function(){
        Route::get('dashboard', 'index')->name('dashboard');
        Route::get('logout', 'logout')->name('admin/logout');
    });
});

// --------------------------- FinanceController -------------------------- //
Route::controller(FinanceController::class)->prefix('admin')->middleware(['adminAuthentication'])->group(function(){
    Route::get('quotation', 'quotation')->name('quotation');
    Route::get('quotations/create', 'quotationCreate')->name('quotations/create');
    Route::get('quotation/view', 'quotationView')->name('quotation/view');
    Route::get('/lang/{locale}', 'switchLanguage')->name('lang.switch');
    // Route::get('proposals', 'proposalList')->name('proposals');
    // Route::get('proposals/create', 'proposalCreate')->name('proposals/create');
    // Route::get('estimates', 'estimatesList')->name('estimates');
    Route::get('payments', 'paymentList')->name('payments');
    
    // Route::get('bankaccounts', 'bankAcoountList')->name('bankaccounts');
});

// ----------------------------- ServicesController ---------------------------- //
Route::controller(ServicesController::class)->prefix('admin')->middleware(['adminAuthentication'])->group(function(){
    Route::get('all/services', 'allServices')->name('all/services');
    Route::get('design/constructions', 'designConstructions')->name('design/constructions');
    Route::get('designs', 'designs')->name('designs');
    Route::get('create/designs', 'createDesignList')->name('create/designs');
    Route::post('create/designs', 'createDesign')->name('create/designs');
    Route::get('design/edit/{id}', 'designEdit')->name('design/edit');
    Route::put('design/update/{id}', 'designUpdate')->name('design/update');
    Route::get('design/delete/{id}', 'designDelete')->name('design/delete');
    Route::get('designChangeStatus/{id}', 'designChangeStatus')->name('designChangeStatus');
    Route::get('constructions', 'constructions')->name('constructions');
    Route::get('create/constructions', 'createConstructionsList')->name('create/constructions');
    Route::post('create/constructions', 'createConstructions')->name('create/constructions');
    Route::get('constructions/edit/{id}', 'constructionsEdit')->name('constructions/edit');
    Route::post('constructions/update/{id}', 'constructionsUpdate')->name('constructions/update');
    Route::get('constructions/delete/{id}', 'constructionsDelete')->name('constructions/delete');
});

// -------------------------- ExpensesController --------------------------- //
Route::controller(ExpensesController::class)->prefix('admin')->middleware(['adminAuthentication'])->group(function(){
    Route::get('expenses', 'expensesList')->name('expenses');
    Route::get('expenses/create', 'expensesCreate')->name('expenses/create');
    Route::post('expenses/create', 'expensesCreateData')->name('expenses/create');
    Route::get('expenses/edit/{id}', 'expensesEdit')->name('expenses/edit');
    Route::put('expenses/update/{id}', 'expensesUpdate')->name('expenses/update');
    Route::get('expenses/delete/{id}', 'expensesDelete')->name('expenses/delete');
    Route::get('expenses/change/status/{id}', 'expensesChangeStatus')->name('expenses/change/status');
    // Route::post('get/temp/img', 'tempImgStores')->name('get/temp/img');
});

// ------------------------- InvoiceController ----------------------- //
Route::controller(InvoiceController::class)->prefix('admin')->middleware('adminAuthentication')->group(function(){
    Route::get('invoices', 'invoiceList')->name('invoices');
    Route::get('invoices/create', 'invoice')->name('invoices/create');
    Route::post('invoice/create', 'invoiceCreate')->name('invoice/create');
    Route::get('invoice/view/{id}', 'invoiceView')->name('invoice/view');
    Route::get('invoice/pdf/view/{id}', 'invoicePdfView')->name('invoice/pdf/view');
    Route::get('invoice/pdf/download/{id}', 'downloadInvoicePDF')->name('invoice/pdf/download');
});

// ------------------------- BeneficiaryController ------------------------ //
Route::controller(BeneficiaryController::class)->prefix('admin')->middleware('adminAuthentication')->group(function(){
    Route::get('beneficiary', 'beneficiary')->name('beneficiary');
    Route::get('beneficiary/create', 'beneficiaryCreate')->name('beneficiary/create');
    Route::post('beneficiary/create', 'beneficiaryCreatePost')->name('beneficiary/create');
    Route::get('beneficiary/edit/{id}', 'beneficiaryEdit')->name('beneficiary/edit');
    Route::post('beneficiary/update/{id}', 'beneficiaryUpdate')->name('beneficiary/update');
    Route::get('beneficiary/delete/{id}', 'beneficiaryDelete')->name('beneficiary/delete');
    Route::get('beneficiary/status/change/{id}', 'changeStatus')->name('beneficiary/status/change');
});