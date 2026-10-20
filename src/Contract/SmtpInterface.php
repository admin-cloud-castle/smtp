<?php

declare(strict_types=1);

namespace CloudCastle\Smtp\Contract;

/**
 * Контракт публичного API пакета Smtp.
 */
interface SmtpInterface
{
    /**
     * Возвращает идентификатор пакета Composer.
     */
    public function name(): string;
}
