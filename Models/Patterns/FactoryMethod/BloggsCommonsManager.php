<?php
declare(strict_types=1);

namespace Models\Patterns\FactoryMethod;

/**
 * Class BloggsCommonsManager
 *
 * @package Models\Patterns\FactoryMethod
 */
class BloggsCommonsManager extends CommonsManager
{
    /**
     * @inheritDoc
     */
    public function getMessageEncoder(): MessageEncoder
    {
        return new BloggsMessageEncoder();
    }

    /**
     * @inheritDoc
     */
    public function getHeaderText(): string
    {
        return "BloggsCommons header message\n";
    }

    /**
     * @inheritDoc
     */
    public function getFooterText(): string
    {
        return "BloggsCommons footer message\n";
    }
}
