<?php
declare(strict_types=1);
namespace Models;

/**
 * Class ClassInfo
 *
 * @package Models
 */
class ClassInfo
{
    /**
     * Get array info about of class
     *
     * @param \ReflectionClass $class
     * @return array
     */
    public static function getClassInfoData(\ReflectionClass $class): array
    {
        $details = [];
        $name = $class->getName();

        if ($class->isUserDefined()) {
            $details[] = "{$name} - is defined by user;";
        }

        if ($class->isInternal()) {
            $details[] = "{$name} - is internal class;";
        }

        if ($class->isInterface()) {
            $details[] = "{$name} - is interface;";
        }

        if ($class->isAbstract()) {
            $details[] = "{$name} - is abstract class;";
        }

        if ($class->isFinal()) {
            $details[] = "{$name} - is final class;";
        }

        if ($class->isInstantiable()) {
            $details[] = "{$name} - may create instance of class;";
        } else {
            $details[] = "{$name} - cannot create instance of class;";
        }

        if ($class->isCloneable()) {
            $details[] = "{$name} - may clone of class;";
        } else {
            $details[] = "{$name} - cannot clone of class;";
        }

        return $details;
    }

    /**
     * Get array info about of method in class
     *
     * @param \ReflectionMethod $method
     * @return array
     */
    public static function getMethodInfoData(\ReflectionMethod $method): array
    {
        $details = [];
        $name = $method->getName();

        if ($method->isUserDefined()) {
            $details[] = "{$name} - is defined by user;";
        }

        if ($method->isInternal()) {
            $details[] = "{$name} - is internal method";
        }

        if ($method->isAbstract()) {
            $details[] = "{$name} - is abstract method;";
        }

        if ($method->isPublic()) {
            $details[] = "{$name} - is public method;";
        }

        if ($method->isProtected()) {
            $details[] = "{$name} - is protected method;";
        }

        if ($method->isPrivate()) {
            $details[] = "{$name} - is private method;";
        }

        if ($method->isStatic()) {
            $details[] = "{$name} - is static method;";
        }

        if ($method->isFinal()) {
            $details[] = "{$name} - is final method;";
        }

        if ($method->isConstructor()) {
            $details[] = "{$name} - is constructor of class;";
        }

        if ($method->returnsReference()) {
            $details[] = "{$name} - is return link, not value;";
        }

        return $details;
    }

    /**
     * Get class source code
     *
     * @param \ReflectionClass $class
     * @return string
     */
    public static function getClassSource(\ReflectionClass $class): string
    {
        $from = $class->getStartLine();
        $to = $class->getEndLine();

        return implode(array_slice(file($class->getFileName()), $from - 1, $to - $from + 1));
    }

    /**
     * Get method source code
     *
     * @param \ReflectionMethod $method
     * @return string
     */
    public static function getMethodSource(\ReflectionMethod $method): string
    {
        $from = $method->getStartLine();
        $to = $method->getEndLine();

        return implode(array_slice(@file($method->getFileName()), $from - 1, $to - $from + 1));
    }
}
