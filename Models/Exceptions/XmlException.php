<?php
declare(strict_types=1);
namespace Exceptions;

use Exception;
use LibXMLError;

/**
 * Class XmlException
 *
 * @package Exceptions
 */
class XmlException extends Exception
{
    /** @var \LibXMLError $error */
    private $error;

    /**
     * XmlException constructor.
     *
     * @param \LibXMLError $error
     */
    public function __construct(LibXMLError $error)
    {
        $this->error = $error;
        $shortFile = basename($error->file);
        parent::__construct(
            "[{$shortFile}, line {$error->line}, column {$error->column}] {$error->message}",
            $error->code
        );
    }

    /**
     * Get LibXMLError object
     *
     * @return \LibXMLError
     */
    public function getLibXMLError()
    {
        return $this->error;
    }
}
