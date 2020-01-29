<?php
declare(strict_types=1);

namespace Models\Patterns\AbstractFactory;

/**
 * Class MegaCommonsManager
 *
 * @package Models\Patterns\AbstractFactory
 */
class MegaCommonsManager extends CommonsManager
{
    /**
     * @inheritDoc
     */
    public function getAppEncoder(): AppEncoder
    {
        return new MegaAppEncoder();
    }

    /**
     * @inheritDoc
     */
    public function getTtdEncoder(): TtdEncoder
    {
        return new MegaTtdEncoder();
    }

    /**
     * @inheritDoc
     */
    public function getContactEncoder(): ContactEncoder
    {
        return new MegaContactEncoder();
    }

    /**
     * @inheritDoc
     */
    public function getHeaderText(): string
    {
        return "MegaCommons header message\n";
    }

    /**
     * @inheritDoc
     */
    public function getFooterText(): string
    {
        return "MegaCommons footer message\n";
    }
}
