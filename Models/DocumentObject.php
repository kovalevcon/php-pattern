<?php
declare(strict_types=1);
namespace Models;

/**
 * Class DocumentObject
 *
 * @package Models
 */
class DocumentObject extends DomainObject
{
    /**
     * @inheritDoc
     */
    public static function getGroup(): string
    {
        return 'document';
    }
}
