<?php
declare(strict_types=1);

namespace Models\Lessons;

/**
 * Class SmsNotifier
 *
 * @package Models\Lessons
 */
class SmsNotifier extends Notifier
{
    /**
     * @inheritDoc
     */
    public function notify(string $message): void
    {
        print "Send sms notification: {$message}";
    }
}
