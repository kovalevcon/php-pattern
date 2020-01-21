<?php
declare(strict_types=1);

namespace Models\Lessons;

/**
 * Class FixedCostStrategy
 *
 * @package Models\Lessons
 */
class FixedCostStrategy extends CostStrategy
{
    /**
     * @inheritDoc
     */
    public function cost(Lesson $lesson): int
    {
        return 30;
    }

    /**
     * @inheritDoc
     */
    public function chargeType(): string
    {
        return 'Fixed payment';
    }
}
