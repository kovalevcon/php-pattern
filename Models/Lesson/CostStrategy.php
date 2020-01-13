<?php
declare(strict_types=1);

namespace Models\Lesson;

/**
 * Class CostStrategy
 *
 * @package Models\Lesson
 */
abstract class CostStrategy
{
    /**
     * Calculate cost for lesson
     *
     * @param Lesson $lesson
     *
     * @return int
     */
    abstract public function cost(Lesson $lesson): int;

    /**
     * Return charge type of lesson
     *
     * @return string
     */
    abstract public function chargeType(): string;
}
