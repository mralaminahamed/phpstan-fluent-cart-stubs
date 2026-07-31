<?php

declare(strict_types=1);

namespace FluentCartStubs\Tests;

use PHPUnit\Framework\TestCase;

/**
 * A smoke test over the generated stubs: the file parses, and the declarations a consumer
 * is most likely to reference are present. It is not exhaustive — the point is to catch a
 * regeneration that silently produced an empty or truncated file.
 */
class FluentCartTest extends TestCase
{
    public function testStubsParse(): void
    {
        $stub = __DIR__ . '/../fluent-cart-stubs.stub';

        $this->assertFileExists($stub);
        $this->assertGreaterThan(1000, (int) filesize($stub), 'The stubs file is suspiciously small.');
    }

    public function testKeyDeclarationsArePresent(): void
    {
        $this->assertTrue(class_exists('FluentCart\App\Models\Order'), 'FluentCart\App\Models\Order is missing from the stubs.');
        $this->assertTrue(class_exists('FluentCart\App\Models\Product'), 'FluentCart\App\Models\Product is missing from the stubs.');
    }
}
