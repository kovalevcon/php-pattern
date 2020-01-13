<?php
declare(strict_types=1);

namespace Models\Lesson;

/**
 * Class TimedCostStrategy
 *
 * @package Models\Lesson
 */
class TimedCostStrategy extends CostStrategy
{
    /**
     * @inheritDoc
     */
    public function cost(Lesson $lesson): int
    {
        return ($lesson->getDuration() * 5);
    }

    /**
     * @inheritDoc
     */
    public function chargeType(): string
    {
        return 'Hourly payment';
    }
}
