<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    #[DataProvider('warningDemoProvider')]
    public function test_that_intentionally_triggers_a_warning_for_ci_demo(string $first): void
    {
        $this->assertSame('first-value', $first);
    }

    public static function warningDemoProvider(): array
    {
        return [
            'mismatched-arguments' => ['first-value', 'extra-value'],
        ];
    }
}
