<?php
declare(strict_types=1);
namespace Models;

use Exception;

/**
 * Class AddressInterception
 *
 * @package Models
 * @property mixed $streetAddress
 */
class AddressInterception
{
    /** @var int $number */
    private $number;
    /** @var string $street */
    private $street;

    /**
     * AddressInterception constructor.
     *
     * @param string|int    $maybeNumber
     * @param string|null   $maybeStreet
     */
    public function __construct($maybeNumber, $maybeStreet = null)
    {
        if (is_null($maybeStreet)) {
            $this->streetAddress = $maybeNumber; // It is a composite property, use __set method to set other attributes
        } else {
            $this->number = $maybeNumber;
            $this->street = $maybeStreet;
        }
    }

    /**
     * Interception for __set method
     *
     * @param string $name
     * @param mixed  $value
     * @return mixed
     * @throws Exception
     */
    public function __set(string $name, $value)
    {
        if ($name === 'streetAddress') {
            if (preg_match("/^(\d.*?)[\s,]+(.+)$/", $value, $matches)) {
                $this->number = $matches[1];
                $this->street = $matches[2];
            } else {
                throw new Exception("Error in address: '{$value}'");
            }
        }

        return null;
    }

    /**
     * Interception for __get method
     *
     * @param string $name
     * @return mixed|null
     */
    public function __get(string $name)
    {
        if ($name === 'streetAddress') {
            return "{$this->number} - {$this->street}";
        }

        return null;
    }
}
