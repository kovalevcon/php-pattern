<?php
declare(strict_types=1);

namespace Controllers;

use Models\Lesson\FixedCostStrategy;
use Models\Lesson\Lecture;
use Models\Lesson\Lesson;
use Models\Lesson\Seminar;
use Models\Lesson\TimedCostStrategy;

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
}
