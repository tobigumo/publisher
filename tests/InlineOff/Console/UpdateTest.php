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

use Tests\InlineOffTestCase;

class UpdateTest extends InlineOffTestCase
{
    public function testUpdate()
    {
        $this->copyFixtures();

        $this->assertSame('Foo Failed', __('auth.failed'));
        $this->assertSame('Foo Throttle', __('auth.throttle'));
        $this->assertSame('Das eingegebene Passwort ist nicht korrekt.', __('auth.password'));

        $this->assertSame('Foo Accepted', __('validation.accepted'));

        $this->assertSame('Custom rule message', __('validation.custom.foo.required'));

        $this->assertSame('Foo Attribute', __('validation.attributes.foo'));
        $this->assertSame('Bar Attribute', __('validation.attributes.bar'));
        $this->assertSame('Baz Attribute', __('validation.attributes.baz'));

        $this->assertSame('This is Foo', __('Foo'));
        $this->assertSame('This is Bar', __('Bar'));
        $this->assertSame('This is Baz', __('Baz'));

        $this->assertSame('This is Baz', __('All rights reserved.'));
        $this->assertSame('This is Baq', __('Confirm Password'));

        $this->artisan('lang:update')->run();

        $this->refreshLocales();

        $this->assertSame('Foo Failed', __('auth.failed'));
        $this->assertSame('Too many login attempts. Please try again in :seconds seconds.', __('auth.throttle'));
        $this->assertSame('The provided password is incorrect.', __('auth.password'));

        $this->assertSame('The :attribute must be accepted.', __('validation.accepted'));

        $this->assertSame('Custom rule message', __('validation.custom.foo.required'));

        $this->assertSame('Foo Attribute', __('validation.attributes.foo'));
        $this->assertSame('Bar Attribute', __('validation.attributes.bar'));
        $this->assertSame('Baz Attribute', __('validation.attributes.baz'));

        $this->assertSame('This is Foo', __('Foo'));
        $this->assertSame('This is Bar', __('Bar'));
        $this->assertSame('This is Baz', __('Baz'));

        $this->assertSame('This is Baz', __('All rights reserved.'));
        $this->assertSame('Confirm Password', __('Confirm Password'));
    }
}
