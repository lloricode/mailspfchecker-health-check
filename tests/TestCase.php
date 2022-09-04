<?php

namespace Lloricode\MailspfcheckerHealthCheck\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Lloricode\MailspfcheckerHealthCheck\MailspfcheckerHealthCheckServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Lloricode\\MailspfcheckerHealthCheck\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            MailspfcheckerHealthCheckServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_mailspfchecker-health-check_table.php.stub';
        $migration->up();
        */
    }
}
