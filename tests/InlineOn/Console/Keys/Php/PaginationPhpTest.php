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

namespace Tests\InlineOn\Console\Keys\Php;

use Tests\InlineOn\Console\Keys\BasePhpTestCase;

class PaginationPhpTest extends BasePhpTestCase
{
    protected $trans_prefix = 'pagination.';

    protected $items = [
        'next'     => ['Next &raquo;', 'Вперёд &raquo;'],
        'previous' => ['&laquo; Previous', '&laquo; Назад'],
    ];
}
