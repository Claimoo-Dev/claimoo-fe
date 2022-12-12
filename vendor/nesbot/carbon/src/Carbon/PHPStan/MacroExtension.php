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

<<<<<<< HEAD
use PHPStan\Reflection\Assertions;
=======
<<<<<<< HEAD
=======
use PHPStan\Reflection\Assertions;
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
use PHPStan\Reflection\ClassReflection;
use PHPStan\Reflection\MethodReflection;
use PHPStan\Reflection\MethodsClassReflectionExtension;
use PHPStan\Reflection\Php\PhpMethodReflectionFactory;
<<<<<<< HEAD
use PHPStan\Reflection\ReflectionProvider;
=======
<<<<<<< HEAD
=======
use PHPStan\Reflection\ReflectionProvider;
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
use PHPStan\Type\TypehintHelper;

/**
 * Class MacroExtension.
 *
 * @codeCoverageIgnore Pure PHPStan wrapper.
 */
final class MacroExtension implements MethodsClassReflectionExtension
{
    /**
     * @var PhpMethodReflectionFactory
     */
    protected $methodReflectionFactory;

    /**
     * @var MacroScanner
     */
    protected $scanner;

    /**
     * Extension constructor.
     *
     * @param PhpMethodReflectionFactory $methodReflectionFactory
<<<<<<< HEAD
=======
<<<<<<< HEAD
     */
    public function __construct(PhpMethodReflectionFactory $methodReflectionFactory)
    {
        $this->scanner = new MacroScanner();
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     * @param ReflectionProvider         $reflectionProvider
     */
    public function __construct(
        PhpMethodReflectionFactory $methodReflectionFactory,
        ReflectionProvider $reflectionProvider
    ) {
        $this->scanner = new MacroScanner($reflectionProvider);
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        $this->methodReflectionFactory = $methodReflectionFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function hasMethod(ClassReflection $classReflection, string $methodName): bool
    {
        return $this->scanner->hasMethod($classReflection->getName(), $methodName);
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod(ClassReflection $classReflection, string $methodName): MethodReflection
    {
        $builtinMacro = $this->scanner->getMethod($classReflection->getName(), $methodName);
<<<<<<< HEAD
        $supportAssertions = class_exists(Assertions::class);
=======
<<<<<<< HEAD
=======
        $supportAssertions = class_exists(Assertions::class);
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0

        return $this->methodReflectionFactory->create(
            $classReflection,
            null,
            $builtinMacro,
            $classReflection->getActiveTemplateTypeMap(),
            [],
            TypehintHelper::decideTypeFromReflection($builtinMacro->getReturnType()),
            null,
            null,
            $builtinMacro->isDeprecated()->yes(),
            $builtinMacro->isInternal(),
            $builtinMacro->isFinal(),
<<<<<<< HEAD
=======
<<<<<<< HEAD
            $builtinMacro->getDocComment()
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
            $supportAssertions ? null : $builtinMacro->getDocComment(),
            $supportAssertions ? Assertions::createEmpty() : null,
            null,
            $builtinMacro->getDocComment(),
            []
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        );
    }
}
