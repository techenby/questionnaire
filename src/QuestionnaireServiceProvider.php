<?php

namespace Techenby\Questionnaire;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Techenby\Questionnaire\Commands\QuestionnaireCommand;

class QuestionnaireServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('questionnaire')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_questionnaire_table')
            ->hasCommand(QuestionnaireCommand::class);
    }
}
