<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('bsText', 'components.form.text', ['name', 'value' =>null, 'attributes'=>[]]);
        Form::component('bsTextarea', 'components.form.textarea', ['name', 'value' =>null, 'attributes'=>[]]);
        Form::component('bsSubmit', 'components.form.submit', ['value' =>'submit', 'attributes'=>[]]);
        Form::component('select', 'components.form.select', ['name', 'value' =>null, 'attributes'=>[]]);
        Form::component('hidden', 'components.form.hidden', ['name', 'value' =>null, 'attributes'=>[]]);
        Form::component('file', 'components.form.file', ['name', 'attributes'=>[]]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
