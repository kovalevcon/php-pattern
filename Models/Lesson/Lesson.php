<?php
declare(strict_types=1);

namespace Models\Lesson;

/**
 * Class Lesson
 *
 * @package Models\Lesson
 */
abstract class Lesson
{
    /** @var int */
    private $duration;

    /** @var CostStrategy */
    private $costStrategy;

    /**
     * Lesson constructor.
     *
     * @param int          $duration
     * @param CostStrategy $costStrategy
     */
    public function __construct(int $duration, CostStrategy $costStrategy)
    {
        $this->duration = $duration;
        $this->costStrategy = $costStrategy;
    }

    /**
     * Get lesson duration
     *
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Get cost of lesson
     *
     * @return int
     */
    public function cost(): int
    {
        return $this->costStrategy->cost($this);
    }

    /**
     * Get charge type of lesson
     *
     * @return string
     */
    public function chargeType(): string
    {
        return $this->costStrategy->chargeType();
    }
}
