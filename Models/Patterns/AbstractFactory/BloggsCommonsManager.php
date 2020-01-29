<?php
declare(strict_types=1);

namespace Models\Patterns\AbstractFactory;

/**
 * Class BloggsCommonsManager
 *
 * @package Models\Patterns\AbstractFactory
 */
class BloggsCommonsManager extends CommonsManager
{
    /**
     * @inheritDoc
     */
    public function getAppEncoder(): AppEncoder
    {
        return new BloggsAppEncoder();
    }

    /**
     * @inheritDoc
     */
    public function getTtdEncoder(): TtdEncoder
    {
        return new BloggsTtdEncoder();
    }

    /**
     * @inheritDoc
     */
    public function getContactEncoder(): ContactEncoder
    {
        return new BloggsContactEncoder();
    }

    /**
     * @inheritDoc
     */
    public function getHeaderText(): string
    {
        return "BloggsCommonsManager header message\n";
    }

    /**
     * @inheritDoc
     */
    public function getFooterText(): string
    {
        return "BloggsCommonsManager footer message\n";
    }
}
