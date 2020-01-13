<?php
declare(strict_types=1);

namespace Models\Lesson;

/**
 * Class SmsNotifier
 *
 * @package Models\Lesson
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
