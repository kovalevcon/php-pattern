<?php
declare(strict_types=1);

namespace Models\Lessons;

/**
 * Class Notifier
 *
 * @package Models\Lessons
 */
abstract class Notifier
{
    /**
     * Get notifier instance
     *
     * @return Notifier
     */
    public static function getNotifier(): Notifier
    {
        return rand(1, 2) === 1 ? new MailNotifier() : new SmsNotifier();
    }

    /**
     * Send notification
     *
     * @param string $message
     *
     * @return void
     */
    abstract public function notify(string $message): void;
}
