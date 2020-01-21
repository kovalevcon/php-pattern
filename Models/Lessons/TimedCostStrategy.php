<?php
declare(strict_types=1);

namespace Models\Lessons;

/**
 * Class TimedCostStrategy
 *
 * @package Models\Lessons
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
