<?php

namespace App\Commands;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Facades\File;
use LaravelZero\Framework\Commands\Command;

class ExecuteCommand extends Command
{
    protected $signature = 'execute {alias?}';

    protected $description = 'Executes an alias.';

    protected array $aliases = [];

    public function handle()
    {
        $alias = $this->argument('alias');

        try {
            $this->getProjectAliases();

            if ($alias && ! in_array($alias, array_keys($this->aliases))) {
                $this->components->error("Alias $alias not found.");
            }

            if (! $alias) {
                $alias = $this->choice('Please select alias to execute', $this->aliases);
            }

            $this->components->info("Executing: $alias");

            shell_exec($this->aliases[$alias]);

            $this->newLine();
            $this->components->info('Finished.');
        } catch (\Exception $exception) {
            $this->components->error($exception->getMessage());
        }
    }

    protected function getProjectAliases(): array
    {
        $file = match (true) {
            File::exists($path = getcwd().'/aliases.dev.json') => File::get($path),
            File::exists($path = getcwd().'/aliases.json') => File::get($path),
            default => throw new FileNotFoundException('aliases.json or aliases.dev.json not found.')
        };

        return $this->aliases = json_decode($file, true);
    }
}
