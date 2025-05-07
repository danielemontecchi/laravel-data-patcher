<?php

namespace Tests;

use DanieleMontecchi\LaravelDataPatcher\DataPatcherServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            DataPatcherServiceProvider::class,
        ];
    }

}
