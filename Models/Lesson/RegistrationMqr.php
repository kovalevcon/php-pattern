<?php
declare(strict_types=1);

namespace Models\Lesson;

/**
 * Class RegistrationMqr
 *
 * @package Models\Lesson
 */
class RegistrationMqr
{
    /**
     * Registration notifier for lesson
     *
     * @param Lesson $lesson
     */
    public function register(Lesson $lesson): void
    {
        $notifier = Notifier::getNotifier();
        $notifier->notify("New lesson: cost - ({$lesson->cost()})\n");
    }
}
