<?php

declare(strict_types=1);

namespace CloudCastle\Smtp;

use CloudCastle\Smtp\Contract\SmtpInterface;
use CloudCastle\Smtp\Exception\SmtpException;

/**
 * Точка входа пакета Smtp.
 *
 * Заглушка скаффолда: замените на реальный публичный API.
 */
final class Smtp implements SmtpInterface
{
    /**
     * Версия пакета для диагностики.
     */
    public const VERSION = '0.1.0';

    /**
     * Возвращает идентификатор пакета Composer.
     */
    #[\Override]
    public function name(): string
    {
        return 'cloud-castle/smtp';
    }

    /**
     * Завершает работу с ошибкой пакета.
     *
     * @throws SmtpException
     */
    public function abort(string $message): never
    {
        throw new SmtpException($message);
    }
}
