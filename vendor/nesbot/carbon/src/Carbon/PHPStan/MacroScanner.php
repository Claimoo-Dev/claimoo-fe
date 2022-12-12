<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Carbon\PHPStan;

use Carbon\CarbonInterface;
<<<<<<< HEAD
=======
use PHPStan\Reflection\ReflectionProvider;
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
use ReflectionClass;
use ReflectionException;

final class MacroScanner
{
    /**
<<<<<<< HEAD
=======
     * @var \PHPStan\Reflection\ReflectionProvider
     */
    private $reflectionProvider;

    /**
     * MacroScanner constructor.
     *
     * @param \PHPStan\Reflection\ReflectionProvider $reflectionProvider
     */
    public function __construct(ReflectionProvider $reflectionProvider)
    {
        $this->reflectionProvider = $reflectionProvider;
    }

    /**
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
     * Return true if the given pair class-method is a Carbon macro.
     *
     * @param string $className
     * @phpstan-param class-string $className
     *
     * @param string $methodName
     *
     * @return bool
     */
    public function hasMethod(string $className, string $methodName): bool
    {
<<<<<<< HEAD
        return is_a($className, CarbonInterface::class, true) &&
            \is_callable([$className, 'hasMacro']) &&
=======
        $classReflection = $this->reflectionProvider->getClass($className);

        if (
            $classReflection->getName() !== CarbonInterface::class &&
            !$classReflection->isSubclassOf(CarbonInterface::class)
        ) {
            return false;
        }

        return \is_callable([$className, 'hasMacro']) &&
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
            $className::hasMacro($methodName);
    }

    /**
     * Return the Macro for a given pair class-method.
     *
     * @param string $className
     * @phpstan-param class-string $className
     *
     * @param string $methodName
     *
     * @throws ReflectionException
     *
     * @return Macro
     */
    public function getMethod(string $className, string $methodName): Macro
    {
        $reflectionClass = new ReflectionClass($className);
        $property = $reflectionClass->getProperty('globalMacros');

        $property->setAccessible(true);
        $macro = $property->getValue()[$methodName];

        return new Macro(
            $className,
            $methodName,
            $macro
        );
    }
}
