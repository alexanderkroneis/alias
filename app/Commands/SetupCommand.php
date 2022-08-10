<?php

namespace App\Commands;

use Illuminate\Support\Facades\File;
use LaravelZero\Framework\Commands\Command;

class SetupCommand extends Command
{
    protected $signature = 'setup';

    protected $description = 'Runs a few commands to setup the project.';

    public function handle()
    {
        if (File::exists('aliases.json')) {
            $overwrite = $this->confirm('aliases.json already exists. Do you want to overwrite it?');

            if ($overwrite === false) {
                return;
            }
        }

        File::copy(base_path().'/stubs/aliases.json.stub', getcwd().'/aliases.json');

        $this->components->info('aliases.json created.');
    }
}
