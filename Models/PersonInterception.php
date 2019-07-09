<?php
declare(strict_types=1);
namespace Models;

/**
 * Class PersonInterception
 *
 * @package Models
 */
class PersonInterception
{
    /** @var string $_name */
    private $privateName;
    /** @var int $privateAge */
    private $privateAge;

    /**
     * Interception for __get method
     *
     * @param string $name
     * @return mixed|null
     */
    public function __get(string $name)
    {
        $method = "get{$name}";
        if (method_exists($this, $method)) {
            return $this->{$method}();
        }

        return null;
    }

    /**
     * Interception for __isset method
     *
     * @param string $name
     * @return bool
     */
    public function __isset($name): bool
    {
        return (method_exists($this, "get{$name}"));
    }

    /**
     * Interception for __set method
     *
     * @param string $name
     * @param mixed $value
     * @return mixed
     */
    public function __set(string $name, $value)
    {
        $method = "set{$name}";
        if (method_exists($this, $method)) {
            return $this->{$method}($value);
        }

        return null;
    }

    /**
     * Interception for __unset method
     *
     * @param string $name
     * @return mixed
     */
    public function __unset(string $name)
    {
        return $this->__set($name, null);
    }

    /**
     * Setter for name attribute
     *
     * @param string|null $name
     * @return void
     */
    public function setName(?string $name): void
    {
        $this->privateName = is_string($name) ? strtoupper($name) : $name;
    }

    /**
     * Setter for name age
     *
     * @param int|null $age
     * @return void
     */
    public function setAge(?int $age): void
    {
        $this->privateAge = $age;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->privateName;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge(): ?int
    {
        return $this->privateAge;
    }
}
