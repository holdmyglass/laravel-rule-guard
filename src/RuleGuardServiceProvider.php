<?php

namespace Holdmyglass\RuleGuard;

use Holdmyglass\RuleGuard\Commands\RuleGuardCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class RuleGuardServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-rule-guard')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_rule_guard_table')
            ->hasCommand(RuleGuardCommand::class);
    }
}
