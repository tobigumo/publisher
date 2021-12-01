<?php

/*
 * This file is part of the "andrey-helldar/laravel-lang-publisher" project.
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
 * @see https://github.com/andrey-helldar/laravel-lang-publisher
 */

declare(strict_types=1);

namespace LaravelLang\Publisher\Facades\Helpers;

use Illuminate\Support\Facades\Facade;
use LaravelLang\Publisher\Helpers\Config as Helper;

/**
 * @method static array excludes()
 * @method static array plugins()
 * @method static bool hasAlignment()
 * @method static bool hasInline()
 * @method static int case()
 * @method static string resources()
 * @method static string vendor()
 */
class Config extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Helper::class;
    }
}
