<?php namespace Enlivenapp\BootswatchUnitedTheme;
use Illuminate\Support\ServiceProvider;
/**
 * Class ExampleThemeServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\ExampleTheme
 */
class BootswatchUnitedThemeServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register('Enlivenapp\BootswatchUnitedTheme\BootswatchUnitedThemeRouteProvider');
    }
}