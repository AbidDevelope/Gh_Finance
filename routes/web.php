<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\FinanceController;
use App\Http\Controllers\Admin\ServicesController;



// AuthController 
Route::controller(AuthController::class)->group(function(){
    Route::get('/', 'getLogin')->name('/');
    Route::post('login', 'postLogin')->name('admin/login');
    Route::get('register', 'getRegister')->name('admin/register');
    Route::post('register', 'postRegister')->name('admin/register');

    Route::prefix('admin/')->group(function(){
        Route::middleware(['adminAuthentication'])->group(function(){
            Route::get('dashboard', 'index')->name('dashboard');
            Route::get('logout', 'logout')->name('admin/logout');
        });
    });
});

// FinanceController
Route::controller(FinanceController::class)->group(function(){
    Route::prefix('admin')->group(function(){
        Route::middleware(['adminAuthentication'])->group(function(){
            Route::get('quotation', 'quotation')->name('quotation');
            Route::get('quotations/create', 'quotationCreate')->name('quotations/create');
            Route::get('quotation/view', 'quotationView')->name('quotation/view');
            Route::get('/lang/{locale}', 'switchLanguage')->name('lang.switch');
            // Route::get('proposals', 'proposalList')->name('proposals');
            // Route::get('proposals/create', 'proposalCreate')->name('proposals/create');
            // Route::get('estimates', 'estimatesList')->name('estimates');
            Route::get('invoices', 'invoiceList')->name('invoices');
            Route::get('invoices/create', 'invoiceCreate')->name('invoices/create');
            Route::get('invoice/view', 'invoiceView')->name('invoice/view');
            Route::get('payments', 'paymentList')->name('payments');
            Route::get('expenses', 'expensesList')->name('expenses');
            // Route::get('bankaccounts', 'bankAcoountList')->name('bankaccounts');
        });
    });
});

// Services Controller Start
Route::controller(ServicesController::class)->group(function(){
    Route::prefix('admin')->group(function(){
        Route::middleware(['adminAuthentication'])->group(function(){
            Route::get('all/services', 'allServices')->name('all/services');
            Route::get('designs', 'designs')->name('designs');
            Route::get('create/designs', 'createDesignList')->name('create/designs');
            Route::post('create/designs', 'createDesign')->name('create/designs');
            Route::get('design/edit/{id}', 'designEdit')->name('design/edit');
            Route::post('design/update/{id}', 'designUpdate')->name('design/update');
            Route::get('design/delete/{id}', 'designDelete')->name('design/delete');
            Route::get('constructions', 'constructions')->name('constructions');
            Route::get('create/constructions', 'createConstructionsList')->name('create/constructions');
            Route::post('create/constructions', 'createConstructions')->name('create/constructions');
            Route::get('constructions/edit/{id}', 'constructionsEdit')->name('constructions/edit');
            Route::post('constructions/update/{id}', 'constructionsUpdate')->name('constructions/update');
            Route::get('constructions/delete/{id}', 'constructionsDelete')->name('constructions/delete');
        });
    });
});