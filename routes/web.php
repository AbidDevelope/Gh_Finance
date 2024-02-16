<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\FinanceController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\ExpensesController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\BeneficiaryController;
use App\Http\Controllers\Admin\QuotationController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProjectManagerController;



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
    // Route::get('proposals', 'proposalList')->name('proposals');
    // Route::get('proposals/create', 'proposalCreate')->name('proposals/create');
    // Route::get('estimates', 'estimatesList')->name('estimates');
    Route::get('payments', 'paymentList')->name('payments');
    
    // Route::get('bankaccounts', 'bankAcoountList')->name('bankaccounts');
});

// ----------------------------- ServicesController ---------------------------- //
Route::controller(ServicesController::class)->prefix('admin')->middleware(['adminAuthentication'])->group(function(){
    Route::get('all/services', 'allServices')->name('all/services');
    Route::get('all-services/view/{id}', 'allServicesView')->name('all-services/view');
    
    Route::get('designs', 'designs')->name('designs');
    Route::get('designs/create', 'createDesignList')->name('designs/create');
    Route::post('create/designs', 'createDesign')->name('create/designs');
    Route::get('design/edit/{id}', 'designEdit')->name('design/edit');
    Route::post('design/update/{id}', 'designUpdate')->name('design/update');
    Route::get('design/view/{id}', 'designView')->name('design/view');
    Route::get('design/delete/{id}', 'designDelete')->name('design/delete');

    Route::get('constructions', 'constructions')->name('constructions');
    Route::get('constructions/create', 'createConstructionsForm')->name('create/constructions');
    Route::post('constructions/create', 'createConstructions')->name('create/constructions');
    Route::get('construction/view/{id}', 'constructionView')->name('construction/view');
    Route::get('construction/edit/{id}', 'constructionEdit')->name('construction/edit');
    Route::post('construction/update/{id}', 'constructionUpdate')->name('construction/update');
    Route::get('construction/delete/{id}', 'constructionDelete')->name('construction/delete');

    Route::get('design_&_construction', 'designConstructions')->name('design_&_construction');
    Route::get('design_&_construction/create', 'designConstructionCreateForm')->name('design_&_construction/create');
    Route::post('design_&_construction/create', 'designConstructionCreate')->name('design_&_construction/create');
    Route::get('design_&_construction/view/{id}', 'designConstructionView')->name('design_&_construction/view');
    Route::get('design_&_construction/edit/{id}', 'designConstructionEdit')->name('design_&_construction/edit');
    Route::post('design_&_construction/update/{id}', 'designConstructionUpdate')->name('design_&_construction/update');
    Route::get('design_&_construction/delete/{id}', 'designConstructionDelete')->name('design_&_construction/delete');
});

// -------------------------- ExpensesController --------------------------- //
Route::controller(ExpensesController::class)->prefix('admin')->middleware(['adminAuthentication'])->group(function(){
    Route::get('expenses', 'expensesList')->name('expenses');
    Route::get('expenses/create', 'expensesCreate')->name('expenses/create');
    Route::post('expenses/create', 'expensesCreateData')->name('expenses/create');
    Route::get('expenses/view/{id}', 'expensesView')->name('expenses/view');
    Route::get('expenses/edit/{id}', 'expensesEdit')->name('expenses/edit');
    Route::put('expenses/update/{id}', 'expensesUpdate')->name('expenses/update');
    Route::get('expenses/delete/{id}', 'expensesDelete')->name('expenses/delete');
    Route::get('expenses/change/status/{id}', 'expensesChangeStatus')->name('expenses/change/status');
    // Route::post('get/temp/img', 'tempImgStores')->name('get/temp/img');
    Route::get('miscellaneous', 'miscellaneous')->name('miscellaneous');
    Route::get('miscellaneous/create', 'miscellaneousCreateForm')->name('miscellaneous/create');
    Route::post('miscellaneous/create', 'miscellaneousCreate')->name('miscellaneous/create');
    Route::get('miscellaneous/view/{id}', 'miscellaneousView')->name('miscellaneous/view');
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

// ---------------------------- QuotationController ------------------------------ //
Route::controller(QuotationController::class)->prefix('admin')->middleware('adminAuthentication')->group(function(){
    Route::get('quotation', 'quotation')->name('quotation');
    Route::get('/lang/{locale}', 'switchLanguage')->name('lang.switch');
    Route::get('quotations/create', 'quotationCreateForm')->name('quotations/create');
    Route::post('quotations/create', 'quotationCreate')->name('quotations/create');
    Route::get('quotation/view/{id}', 'quotationView')->name('quotation/view');
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

// ---------------------------- ProjectManagerController ------------------------- //
Route::controller(ProjectManagerController::class)->prefix('admin')->middleware('adminAuthentication')->group(function(){
    Route::get('projectManager', 'projectManager')->name('projectManager');
    Route::get('projectManager/create', 'projectManagerCreateForm')->name('projectManager/create');
    Route::post('projectsManager/create', 'projectManagerCreate')->name('projectsManager/create');
    Route::get('projectManager/edit/{id}', 'projectManagerEdit')->name('projectManager/edit');
    Route::post('projectManager/update/{id}', 'projectManagerUpdate')->name('projectManager/update');
    Route::get('projectManager/view/{id}', 'projectManagerView')->name('projectManager/view');
    Route::get('projectManager/delete/{id}', 'projectManagerDelete')->name('projectManager/delete');
    Route::get('projectManagerChangeStatus/{id}', 'ChangeStatus')->name('projectManagerChangeStatus');
});