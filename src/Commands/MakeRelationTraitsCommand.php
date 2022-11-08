<?php

namespace Kohutd\Laravel\RelationTraits\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class MakeRelationTraitsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:relation:all {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '!';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $name = $this->argument('name');

        Artisan::call('make:relation:has-many', ['name' => $name]);
        Artisan::call('make:relation:has-one', ['name' => $name]);
        Artisan::call('make:relation:belongs-to', ['name' => $name]);

        return 0;
    }
}
