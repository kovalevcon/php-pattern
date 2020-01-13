<?php
declare(strict_types=1);

namespace Models\Lesson;

/**
 * Class MailNotifier
 *
 * @package Models\Lesson
 */
class MailNotifier extends Notifier
{
    /**
     * @inheritDoc
     */
    public function notify(string $message): void
    {
        print "Send email notification: {$message}";
    }
}
