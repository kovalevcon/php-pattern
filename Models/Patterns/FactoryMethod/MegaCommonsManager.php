<?php
declare(strict_types=1);

namespace Models\Patterns\FactoryMethod;

/**
 * Class MegaCommonsManager
 *
 * @package Models\Patterns\FactoryMethod
 */
class MegaCommonsManager extends CommonsManager
{
    /**
     * @inheritDoc
     */
    public function getMessageEncoder(): MessageEncoder
    {
        return new MegaMessageEncoder();
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
