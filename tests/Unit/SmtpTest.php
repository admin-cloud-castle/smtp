<?php

declare(strict_types=1);

namespace CloudCastle\Smtp\Tests\Unit;

use CloudCastle\Smtp\Exception\SmtpException;
use CloudCastle\Smtp\Smtp;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

/**
 * Модульные тесты заглушки Smtp.
 */
#[CoversClass(Smtp::class)]
final class SmtpTest extends TestCase
{
    /**
     * Проверяет, что name() возвращает composer-имя пакета.
     */
    public function testNameReturnsComposerPackageName(): void
    {
        $package = new Smtp();

        self::assertSame('cloud-castle/smtp', $package->name());
    }

    /**
     * Проверяет, что abort() бросает SmtpException.
     */
    public function testAbortThrowsSmtpException(): void
    {
        $package = new Smtp();

        $this->expectException(SmtpException::class);
        $this->expectExceptionMessage('тест');

        $package->abort('тест');
    }
}
