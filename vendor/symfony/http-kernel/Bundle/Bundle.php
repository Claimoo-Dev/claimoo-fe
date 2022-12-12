<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Bundle;

use Symfony\Component\Console\Application;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

/**
 * An implementation of BundleInterface that adds a few conventions for DependencyInjection extensions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Bundle implements BundleInterface
{
    use ContainerAwareTrait;

    protected $name;
    protected $extension;
    protected $path;
    private string $namespace;

<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    public function boot()
    {
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    public function shutdown()
    {
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * {@inheritdoc}
     *
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     * This method can be overridden to register compilation passes,
     * other extensions, ...
     */
    public function build(ContainerBuilder $container)
    {
    }

    /**
     * Returns the bundle's container extension.
     *
     * @throws \LogicException
     */
    public function getContainerExtension(): ?ExtensionInterface
    {
        if (null === $this->extension) {
            $extension = $this->createContainerExtension();

            if (null !== $extension) {
                if (!$extension instanceof ExtensionInterface) {
                    throw new \LogicException(sprintf('Extension "%s" must implement Symfony\Component\DependencyInjection\Extension\ExtensionInterface.', get_debug_type($extension)));
                }

                // check naming convention
                $basename = preg_replace('/Bundle$/', '', $this->getName());
                $expectedAlias = Container::underscore($basename);

                if ($expectedAlias != $extension->getAlias()) {
                    throw new \LogicException(sprintf('Users will expect the alias of the default extension of a bundle to be the underscored version of the bundle name ("%s"). You can override "Bundle::getContainerExtension()" if you want to use "%s" or another alias.', $expectedAlias, $extension->getAlias()));
                }

                $this->extension = $extension;
            } else {
                $this->extension = false;
            }
        }

        return $this->extension ?: null;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    public function getNamespace(): string
    {
        if (!isset($this->namespace)) {
            $this->parseClassName();
        }

        return $this->namespace;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    public function getPath(): string
    {
        if (null === $this->path) {
            $reflected = new \ReflectionObject($this);
            $this->path = \dirname($reflected->getFileName());
        }

        return $this->path;
    }

    /**
     * Returns the bundle name (the class short name).
     */
    final public function getName(): string
    {
        if (null === $this->name) {
            $this->parseClassName();
        }

        return $this->name;
    }

    public function registerCommands(Application $application)
    {
    }

    /**
     * Returns the bundle's container extension class.
     */
    protected function getContainerExtensionClass(): string
    {
        $basename = preg_replace('/Bundle$/', '', $this->getName());

        return $this->getNamespace().'\\DependencyInjection\\'.$basename.'Extension';
    }

    /**
     * Creates the bundle's container extension.
     */
    protected function createContainerExtension(): ?ExtensionInterface
    {
        return class_exists($class = $this->getContainerExtensionClass()) ? new $class() : null;
    }

    private function parseClassName()
    {
        $pos = strrpos(static::class, '\\');
        $this->namespace = false === $pos ? '' : substr(static::class, 0, $pos);
<<<<<<< HEAD
        $this->name ??= false === $pos ? static::class : substr(static::class, $pos + 1);
=======
<<<<<<< HEAD
        if (null === $this->name) {
            $this->name = false === $pos ? static::class : substr(static::class, $pos + 1);
        }
=======
        $this->name ??= false === $pos ? static::class : substr(static::class, $pos + 1);
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    }
}
