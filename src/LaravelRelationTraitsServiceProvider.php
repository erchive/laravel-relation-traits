<?php

namespace Kohutd\Laravel\RelationTraits;

use Kohutd\Laravel\RelationTraits\Commands\MakeBelongsToTraitCommand;
use Kohutd\Laravel\RelationTraits\Commands\MakeHasManyTraitCommand;
use Kohutd\Laravel\RelationTraits\Commands\MakeHasOneTraitCommand;
use Kohutd\Laravel\RelationTraits\Commands\MakeRelationTraitsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelRelationTraitsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('skeleton')
            ->hasCommand(MakeBelongsToTraitCommand::class)
            ->hasCommand(MakeHasManyTraitCommand::class)
            ->hasCommand(MakeHasOneTraitCommand::class)
            ->hasCommand(MakeRelationTraitsCommand::class);
    }
}
