#!/bin/bash

printf "\nUpdating composer\n"
composer update --prefer-dist

printf "\nPreparing Codeception\n"
php vendor/bin/codecept build

printf "\nRunning Acceptance Tests\n"
php vendor/bin/codecept run tests/acceptance --steps --debug --xml --html --env=chrome-headless
