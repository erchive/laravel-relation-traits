<?php

namespace Kohutd\Laravel\RelationTraits;

use Illuminate\Support\ServiceProvider;
use Kohutd\Laravel\RelationTraits\Commands\MakeBelongsToTraitCommand;
use Kohutd\Laravel\RelationTraits\Commands\MakeHasManyTraitCommand;
use Kohutd\Laravel\RelationTraits\Commands\MakeHasOneTraitCommand;
use Kohutd\Laravel\RelationTraits\Commands\MakeRelationTraitsCommand;

class LaravelRelationTraitsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            MakeBelongsToTraitCommand::class,
            MakeHasManyTraitCommand::class,
            MakeHasOneTraitCommand::class,
            MakeRelationTraitsCommand::class,
        ]);
    }
}
