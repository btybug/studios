<?php

namespace BtyBugPlugins\Studios\Providers;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'studios');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'studios');
        \Eventy::action('admin.menus', [
            "title" => "Studios",
            "custom-link" => "#",
            "icon" => "fa fa-gavel",
            "is_core" => "yes",
            "children" => [
                [
                    "title" => "create",
                    "custom-link" => "/admin/studios/create",
                    "icon" => "fa fa-angle-right",
                    "is_core" => "yes"
                ],[
                    "title" => "Basic",
                    "custom-link" => "/admin/studios/basic-classes",
                    "icon" => "fa fa-angle-right",
                    "is_core" => "yes"
                ],[
                    "title" => "Element",
                    "custom-link" => "/admin/studios/element-classes",
                    "icon" => "fa fa-angle-right",
                    "is_core" => "yes"
                ],[
                    "title" => "Component",
                    "custom-link" => "/admin/studios/component-classes",
                    "icon" => "fa fa-angle-right",
                    "is_core" => "yes"
                ]
            ]]);

//        \BtyBugPlugins\Cms\Models\Routes::registerPages('sahak.avatar/studios');

    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);

    }
}
