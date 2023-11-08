<?php

namespace Techenby\Questionnaire\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Techenby\Questionnaire\Questionnaire
 */
class Questionnaire extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Techenby\Questionnaire\Questionnaire::class;
    }
}
