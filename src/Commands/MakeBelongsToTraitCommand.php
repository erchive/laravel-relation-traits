<?php

namespace Kohutd\Laravel\RelationTraits\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'make:relation:belongs-to')]
class MakeBelongsToTraitCommand extends GeneratorCommand
{
    protected $description = '!';

    protected function getRawNameInput(): string
    {
        return trim($this->argument('name'));
    }

    protected function getNameInput(): string
    {
        return 'BelongsTo' . $this->getRawNameInput();
    }

    protected function getFunctionName(): string
    {
        return Str::camel($this->getRawNameInput());
    }

    protected function getStub(): string
    {
        return __DIR__ . '/stubs/BelongsToTrait.stub';
    }

    protected function buildClass($name): string
    {
        $stub = $this->files->get($this->getStub());

        $functionName = $this->getFunctionName();
        $relatedName = $this->getRawNameInput();

        return $this->replaceNamespace($stub, $name)
            ->replaceRelated($stub, $relatedName)
            ->replaceFunction($stub, $functionName)
            ->replaceClass($stub, $name);
    }

    protected function replaceFunction(string &$stub, string $name): static
    {
        $stub = str_replace(['{{function}}'], $name, $stub);

        return $this;
    }

    protected function replaceRelated(string &$stub, string $name): static
    {
        $stub = str_replace(['{{related}}'], '\App\\Models\\' . $name, $stub);

        return $this;
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return is_dir(app_path('Models')) ? $rootNamespace . '\\Models\\Relations\\' . $this->getRawNameInput() : $rootNamespace;
    }
}
