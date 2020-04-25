<?php

namespace Corbin\SparkVuetify;

class SparkVuetifyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/path/to/views', 'spark-vuetify');
    }

    public function register()
    {

    }
}