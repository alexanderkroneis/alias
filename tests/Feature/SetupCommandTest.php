<?php

use Illuminate\Support\Facades\File;

test('execute setup creates aliases.json file', function () {
    if (File::exists(base_path().'/aliases.json')) {
        File::delete(base_path().'/aliases.json');
    }

    $this->artisan('setup')
        ->assertExitCode(0);

    $this->assertTrue(File::exists('aliases.json'));
});

test('execute setup asks for overwriting aliases.json file', function () {
    File::put(
        base_path().'/aliases.json',
        File::get(base_path().'/stubs/aliases.json.stub')
    );

    /** @var \Illuminate\Testing\PendingCommand $output */
    $this->artisan('setup')
        ->expectsConfirmation('aliases.json already exists. Do you want to overwrite it?')
        ->assertExitCode(0);
});
