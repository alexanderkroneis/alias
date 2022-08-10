<?php

test('execute command test will show aliases without argument', function () {
    $output = $this->artisan('execute');

    $output
        ->expectsChoice('Please select alias to execute', 'about', ['about'])
        ->assertExitCode(0);
});

test('execute about will description', function () {
    $output = $this->artisan('execute about');

    /** @var \Illuminate\Testing\PendingCommand $output */
    $output
        ->expectsOutputToContain('Executing: about.')
        ->expectsOutputToContain('A PHP CLI application that helps you organize your aliases.')
        ->assertExitCode(0);
});