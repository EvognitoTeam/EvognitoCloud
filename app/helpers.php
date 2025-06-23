<?php

use Illuminate\Support\Facades\App;

function localized_route($name, $parameters = [], $absolute = true)
{
    $parameters['lang'] = App::getLocale();
    return route($name, $parameters, $absolute);
}
