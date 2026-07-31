<?php

declare(strict_types=1);

namespace FluentCartStubs\Tests;

use PHPUnit\Framework\TestCase;

/**
 * The constants stubs are a separate file because PHPStan scans them rather than analysing
 * them; this checks the generator actually captured them.
 */
class ConstantsTest extends TestCase
{
    public function testConstantsAreDefined(): void
    {
        $this->assertTrue(defined('FLUENTCART_PLUGIN_PATH'), 'FLUENTCART_PLUGIN_PATH is missing from the constants stubs.');
        $this->assertTrue(defined('FLUENTCART_URL'), 'FLUENTCART_URL is missing from the constants stubs.');
        $this->assertTrue(defined('FLUENTCART_DB_VERSION'), 'FLUENTCART_DB_VERSION is missing from the constants stubs.');
    }
}
