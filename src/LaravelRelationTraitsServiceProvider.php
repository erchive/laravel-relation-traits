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
        $package
            ->name('kohutd/laravel-relation-traits')
            ->hasCommand(MakeBelongsToTraitCommand::class)
            ->hasCommand(MakeHasManyTraitCommand::class)
            ->hasCommand(MakeHasOneTraitCommand::class)
            ->hasCommand(MakeRelationTraitsCommand::class);
    }
}
