<?php

namespace Lloricode\MailspfcheckerHealthCheck;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Lloricode\MailspfcheckerHealthCheck\Commands\MailspfcheckerHealthCheckCommand;

class MailspfcheckerHealthCheckServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('mailspfchecker-health-check')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_mailspfchecker-health-check_table')
            ->hasCommand(MailspfcheckerHealthCheckCommand::class);
    }
}
