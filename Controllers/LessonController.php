<?php
declare(strict_types=1);

namespace Controllers;

use Models\Lessons\FixedCostStrategy;
use Models\Lessons\Lecture;
use Models\Lessons\Lesson;
use Models\Lessons\RegistrationMqr;
use Models\Lessons\Seminar;
use Models\Lessons\TimedCostStrategy;

/**
 * Class LessonController
 *
 * @package Controllers
 */
class LessonController
{
    /**
     * Show lesson costs
     *
     * @return void
     */
    public function getLessonCosts(): void
    {
        /** @var Lesson[] $lessons */
        $lessons = [
          new Seminar(10, new TimedCostStrategy()),
          new Lecture(5, new FixedCostStrategy()),
        ];

        foreach ($lessons as $lesson) {
            print "Cost from lesson: {$lesson->cost()}. Type charge: {$lesson->chargeType()}\n";
        }
    }

    /**
     * Send notification about new lessons
     *
     * @return void
     */
    public function sendNotificationAboutNewLesson(): void
    {
        $lesson1 = new Seminar(10, new TimedCostStrategy());
        $lesson2 = new Lecture(5, new FixedCostStrategy());
        $mqr = new RegistrationMqr();
        $mqr->register($lesson1);
        $mqr->register($lesson2);
    }
}
