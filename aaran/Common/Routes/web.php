<?php

use Illuminate\Support\Facades\Route;

//Common
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/cities', Aaran\Common\Livewire\Class\CityList::class)->name('cities');
    Route::get('/states', Aaran\Common\Livewire\Class\StateList::class)->name('states');
    Route::get('/countries', Aaran\Common\Livewire\Class\CountryList::class)->name('countries');
    Route::get('/pincodes', Aaran\Common\Livewire\Class\PincodeList::class)->name('pincodes');
    Route::get('/accountType', Aaran\Common\Livewire\Class\AccountTypeList::class)->name('accountType');
    Route::get('/dispatch', Aaran\Common\Livewire\Class\DispatchList::class)->name('dispatch');
    Route::get('/gst_percents', Aaran\Common\Livewire\Class\GstList::class)->name('gst_percents');
    Route::get('/hsn_code', Aaran\Common\Livewire\Class\HsncodeList::class)->name('hsn_code');
    Route::get('/payment_mode', Aaran\Common\Livewire\Class\PaymentModeList::class)->name('payment_mode');
    Route::get('/receipt_type', Aaran\Common\Livewire\Class\ReceiptTypeList::class)->name('receipt_type');
     Route::get('/banks', Aaran\Common\Livewire\Class\BankList::class)->name('banks');
  Route::get('/categories', Aaran\Common\Livewire\Class\CategoryList::class)->name('categories');
   Route::get('/colour-list', Aaran\Common\Livewire\Class\ColourList::class)->name('colours');
   Route::get('/contact-type', Aaran\Common\Livewire\Class\ContactTypeList::class)->name('contact_types');
   Route::get('/departments', Aaran\Common\Livewire\Class\DepartmentList::class)->name('departments');
   Route::get('/sizes', Aaran\Common\Livewire\Class\SizeList::class)->name('sizes');
   Route::get('/transaction-types', Aaran\Common\Livewire\Class\SizeList::class)->name('transaction_types');
    Route::get('/transports', Aaran\Common\Livewire\Class\SizeList::class)->name('transports');
    Route::get('/units', Aaran\Common\Livewire\Class\SizeList::class)->name('units');
});
