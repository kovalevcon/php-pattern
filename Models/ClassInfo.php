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
    public static function getInfoData(\ReflectionClass $class): array
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
}
