<?php

/*
 * This file is part of the "laravel-lang/publisher" project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 *
 * @copyright 2021 Andrey Helldar
 *
 * @license MIT
 *
 * @see https://github.com/Laravel-Lang/publisher
 */

declare(strict_types=1);

namespace Tests\InlineOff\Console;

use LaravelLang\Publisher\Facades\Helpers\Locales;
use Tests\InlineOffTestCase;

class RemoveTest extends InlineOffTestCase
{
    public function testWithoutLanguageAttribute()
    {
        foreach ($this->locales as $locale) {
            $this->assertFileDoesNotExist($this->resourcesPath($locale . '.json'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'auth.php'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'pagination.php'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'passwords.php'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'validation.php'));
            $this->assertDirectoryDoesNotExist($this->resourcesPath($locale));

            $this->artisan('lang:add', ['locales' => $locale])->run();

            $this->assertFileExists($this->resourcesPath($locale . '.json'));
            $this->assertFileExists($this->resourcesPath($locale, 'auth.php'));
            $this->assertFileExists($this->resourcesPath($locale, 'pagination.php'));
            $this->assertFileExists($this->resourcesPath($locale, 'passwords.php'));
            $this->assertFileExists($this->resourcesPath($locale, 'validation.php'));
            $this->assertDirectoryExists($this->resourcesPath($locale));

            $this->artisan('lang:rm')
                ->expectsConfirmation('Do you want to remove all localizations?')
                ->expectsChoice('Select localizations to remove (specify the necessary localizations separated by commas):', $locale, Locales::installed())
                ->assertExitCode(0);

            $this->assertFileDoesNotExist($this->resourcesPath($locale . '.json'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'auth.php'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'pagination.php'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'passwords.php'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'validation.php'));
            $this->assertDirectoryDoesNotExist($this->resourcesPath($locale));
        }
    }

    public function testUninstall()
    {
        foreach ($this->locales as $locale) {
            $this->assertFileDoesNotExist($this->resourcesPath($locale . '.json'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'auth.php'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'pagination.php'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'passwords.php'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'validation.php'));
            $this->assertDirectoryDoesNotExist($this->resourcesPath($locale));

            $this->artisan('lang:add', ['locales' => $locale])->run();

            $this->assertFileExists($this->resourcesPath($locale . '.json'));
            $this->assertFileExists($this->resourcesPath($locale, 'auth.php'));
            $this->assertFileExists($this->resourcesPath($locale, 'pagination.php'));
            $this->assertFileExists($this->resourcesPath($locale, 'passwords.php'));
            $this->assertFileExists($this->resourcesPath($locale, 'validation.php'));
            $this->assertDirectoryExists($this->resourcesPath($locale));

            $this->artisan('lang:rm', ['locales' => $locale])->run();

            $this->assertFileDoesNotExist($this->resourcesPath($locale . '.json'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'auth.php'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'pagination.php'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'passwords.php'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'validation.php'));
            $this->assertDirectoryDoesNotExist($this->resourcesPath($locale));
        }
    }

    public function testUninstalled()
    {
        foreach ($this->locales as $locale) {
            $this->assertFileDoesNotExist($this->resourcesPath($locale . '.json'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'auth.php'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'pagination.php'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'passwords.php'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'validation.php'));
            $this->assertDirectoryDoesNotExist($this->resourcesPath($locale));

            $this->artisan('lang:rm', ['locales' => $locale])->run();

            $this->assertFileDoesNotExist($this->resourcesPath($locale . '.json'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'auth.php'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'pagination.php'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'passwords.php'));
            $this->assertFileDoesNotExist($this->resourcesPath($locale, 'validation.php'));
            $this->assertDirectoryDoesNotExist($this->resourcesPath($locale));
        }
    }

    public function testUninstallDefaultLocale()
    {
        $locales = Locales::protects();

        foreach ($locales as $locale) {
            $this->assertFileExists($this->resourcesPath($locale . '.json'));
            $this->assertFileExists($this->resourcesPath($locale, 'auth.php'));
            $this->assertFileExists($this->resourcesPath($locale, 'pagination.php'));
            $this->assertFileExists($this->resourcesPath($locale, 'passwords.php'));
            $this->assertFileExists($this->resourcesPath($locale, 'validation.php'));
            $this->assertDirectoryExists($this->resourcesPath($locale));

            $this->artisan('lang:rm', ['locales' => $locale])->run();

            $this->assertFileExists($this->resourcesPath($locale . '.json'));
            $this->assertFileExists($this->resourcesPath($locale, 'auth.php'));
            $this->assertFileExists($this->resourcesPath($locale, 'pagination.php'));
            $this->assertFileExists($this->resourcesPath($locale, 'passwords.php'));
            $this->assertFileExists($this->resourcesPath($locale, 'validation.php'));
            $this->assertDirectoryExists($this->resourcesPath($locale));
        }
    }
}
