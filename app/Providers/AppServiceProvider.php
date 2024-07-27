<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        if (Schema::hasTable('settings')) {
            $sharedData['settings'] = Setting::getSettings();
            $sharedData['user'] = Auth::user();
            view()->share($sharedData);

            Blade::directive('company', function () {
                return Setting::where('id', '=', 1)->get()[0]->company_name;
            });
            Blade::directive('copyright', function () {
                return 'This System has been developed by BD Computing Limited';
            });
            // Blade::directive('user', function () {
            //     return auth::user()->first_name . ' ' . auth::user()->surname . ' ' . auth::user()->other_names;
            // });
            // Blade::directive('firstTimeBilling', function () {
            //     return DB::select("SELECT COUNT(c.id) AS count FROM contracts c
            //     WHERE c.id NOT IN (SELECT bi.contractID FROM invoices bi)")[0]->count;
            // });
        }


        Blade::directive('money', function ($money) {
            return "Kshs. <?php echo number_format($money, 2); ?>";
        });

        // Blade::directive('cart', function () {
        // $items = \Darryldecode\Cart\Cart::getContent();
        // return count($items);
        // });

        Paginator::useBootstrap();
    }
}
