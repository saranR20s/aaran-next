<?php

namespace Aaran\Common\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

use Aaran\Common\Livewire\Class; // Example


class CommonServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'Common';
    protected string $moduleNameLower = 'common';

    public function register(): void
    {
        $this->app->register(CommonRouteServiceProvider::class);
//        $this->loadConfigs();
        $this->loadViews();
    }

    public function boot(): void
    {
        $this->loadMigrations();
//        $this->mapApiRoutes();
//        $this->mapWebRoutes();

        // Register Livewire components
        Livewire::component('common::city-list', Class\CityList::class);

//        Livewire::component('common::state-list', State\StateList::class);
//        Livewire::component('common::pincode-list', Pincode\PincodeList::class);
//        Livewire::component('common::country-list', Country\CountryList::class);
          Livewire::component('common::hsncode-list', Class\HsncodeList::class);

        Livewire::component('common::state-list', Class\StateList::class);
        Livewire::component('common::pincode-list', Class\PincodeList::class);
        Livewire::component('common::country-list', Class\CountryList::class);
//        Livewire::component('common::hsncode-list', Hsncode\HsncodeList::class);

        Livewire::component('common::unit-list', Class\UnitList::class);
        Livewire::component('common::category-list', Class\CategoryList::class);
        Livewire::component('common::colour-list', Class\ColourList::class);
        Livewire::component('common::size-list', Class\SizeList::class);
        Livewire::component('common::department-list', Class\DepartmentList::class);
        Livewire::component('common::transport-list', Class\TransportList::class);

//        Livewire::component('common::bank-list', Bank\BankList::class);
          Livewire::component('common::gst-list', Class\GstList::class);
          Livewire::component('common::receipt-type-list', Class\ReceiptTypeList::class);
          Livewire::component('common::dispatch-list', Class\DispatchList::class);
//        Livewire::component('common::contact-type-list', ContactType\ContactTypeList::class);
          Livewire::component('common::payment-mode-list', Class\PaymentModeList::class);
//        Livewire::component('common::account-type-list', AccountType\AccountTypeList::class);

        Livewire::component('common::bank-list', Class\BankList::class);
//        Livewire::component('common::gst-list', Gst\GstList::class);
//        Livewire::component('common::receipt-type-list', ReceiptType\ReceiptTypeList::class);
//        Livewire::component('common::dispatch-list', Dispatch\DispatchList::class);
        Livewire::component('common::contact-type-list', Class\ContactTypeList::class);
//        Livewire::component('common::payment-mode-list', PaymentMode\PaymentModeList::class);
        Livewire::component('common::account-type-list', Class\AccountTypeList::class);

        Livewire::component('common::transaction-type-list',  Class\TransactionTypeList::class);

    }

    protected function loadConfigs(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config.php', $this->moduleNameLower);
    }

    protected function loadViews(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../Livewire/Views', $this->moduleNameLower);
    }

    protected function loadMigrations(): void
    {

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
//
//    protected function mapWebRoutes()
//    {
//        Route::middleware('web')
//            ->prefix($this->moduleNameLower)
//            ->namespace("Modules\\{$this->moduleName}\\Http\\Controllers")
//            ->group(__DIR__ . '/../Routes/web.php');
//    }
//
//    protected function mapApiRoutes()
//    {
//        Route::prefix('api')
//            ->middleware('api')
//            ->namespace("Modules\\{$this->moduleName}\\Http\\Controllers")
//            ->group(__DIR__ . '/../Routes/api.php'); // Optional API routes
//    }

}
