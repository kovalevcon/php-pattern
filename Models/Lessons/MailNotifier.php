<?php
declare(strict_types=1);

namespace Models\Lessons;

/**
 * Class MailNotifier
 *
 * @package Models\Lessons
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
