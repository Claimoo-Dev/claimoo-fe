<?php

declare(strict_types=1);

/*
 * This file is part of the league/config package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\Config;

use Dflydev\DotAccessData\Data;
<<<<<<< HEAD
=======
use Dflydev\DotAccessData\DataInterface;
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
use Dflydev\DotAccessData\Exception\DataException;
use Dflydev\DotAccessData\Exception\InvalidPathException;
use Dflydev\DotAccessData\Exception\MissingPathException;
use League\Config\Exception\UnknownOptionException;
use League\Config\Exception\ValidationException;
use Nette\Schema\Expect;
use Nette\Schema\Processor;
use Nette\Schema\Schema;
use Nette\Schema\ValidationException as NetteValidationException;

final class Configuration implements ConfigurationBuilderInterface, ConfigurationInterface
{
    /** @psalm-readonly */
    private Data $userConfig;

    /**
     * @var array<string, Schema>
     *
     * @psalm-allow-private-mutation
     */
    private array $configSchemas = [];

    /** @psalm-allow-private-mutation */
<<<<<<< HEAD
    private ?Data $finalConfig = null;
=======
    private Data $finalConfig;
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2

    /**
     * @var array<string, mixed>
     *
     * @psalm-allow-private-mutation
     */
    private array $cache = [];

    /** @psalm-readonly */
    private ConfigurationInterface $reader;

    /**
     * @param array<string, Schema> $baseSchemas
     */
    public function __construct(array $baseSchemas = [])
    {
        $this->configSchemas = $baseSchemas;
        $this->userConfig    = new Data();
<<<<<<< HEAD
=======
        $this->finalConfig   = new Data();
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2

        $this->reader = new ReadOnlyConfiguration($this);
    }

    /**
     * Registers a new configuration schema at the given top-level key
     *
     * @psalm-allow-private-mutation
     */
    public function addSchema(string $key, Schema $schema): void
    {
        $this->invalidate();

        $this->configSchemas[$key] = $schema;
    }

    /**
     * {@inheritDoc}
     *
     * @psalm-allow-private-mutation
     */
    public function merge(array $config = []): void
    {
        $this->invalidate();

<<<<<<< HEAD
        $this->userConfig->import($config, Data::REPLACE);
=======
        $this->userConfig->import($config, DataInterface::REPLACE);
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
    }

    /**
     * {@inheritDoc}
     *
     * @psalm-allow-private-mutation
     */
    public function set(string $key, $value): void
    {
        $this->invalidate();

        try {
            $this->userConfig->set($key, $value);
        } catch (DataException $ex) {
            throw new UnknownOptionException($ex->getMessage(), $key, (int) $ex->getCode(), $ex);
        }
    }

    /**
     * {@inheritDoc}
     *
     * @psalm-external-mutation-free
     */
    public function get(string $key)
    {
<<<<<<< HEAD
        if ($this->finalConfig === null) {
            $this->finalConfig = $this->build();
        } elseif (\array_key_exists($key, $this->cache)) {
=======
        if (\array_key_exists($key, $this->cache)) {
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
            return $this->cache[$key];
        }

        try {
<<<<<<< HEAD
=======
            $this->build(self::getTopLevelKey($key));

>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
            return $this->cache[$key] = $this->finalConfig->get($key);
        } catch (InvalidPathException | MissingPathException $ex) {
            throw new UnknownOptionException($ex->getMessage(), $key, (int) $ex->getCode(), $ex);
        }
    }

    /**
     * {@inheritDoc}
     *
     * @psalm-external-mutation-free
     */
    public function exists(string $key): bool
    {
<<<<<<< HEAD
        if ($this->finalConfig === null) {
            $this->finalConfig = $this->build();
        } elseif (\array_key_exists($key, $this->cache)) {
=======
        if (\array_key_exists($key, $this->cache)) {
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
            return true;
        }

        try {
<<<<<<< HEAD
            return $this->finalConfig->has($key);
        } catch (InvalidPathException $ex) {
=======
            $this->build(self::getTopLevelKey($key));

            return $this->finalConfig->has($key);
        } catch (InvalidPathException | UnknownOptionException $ex) {
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
            return false;
        }
    }

    /**
     * @psalm-mutation-free
     */
    public function reader(): ConfigurationInterface
    {
        return $this->reader;
    }

    /**
     * @psalm-external-mutation-free
     */
    private function invalidate(): void
    {
        $this->cache       = [];
<<<<<<< HEAD
        $this->finalConfig = null;
=======
        $this->finalConfig = new Data();
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
    }

    /**
     * Applies the schema against the configuration to return the final configuration
     *
<<<<<<< HEAD
     * @throws ValidationException
     *
     * @psalm-allow-private-mutation
     */
    private function build(): Data
    {
        try {
            $schema    = Expect::structure($this->configSchemas);
            $processor = new Processor();
            $processed = $processor->process($schema, $this->userConfig->export());

            $this->raiseAnyDeprecationNotices($processor->getWarnings());

            return $this->finalConfig = new Data(self::convertStdClassesToArrays($processed));
=======
     * @throws ValidationException|UnknownOptionException|InvalidPathException
     *
     * @psalm-allow-private-mutation
     */
    private function build(string $topLevelKey): void
    {
        if ($this->finalConfig->has($topLevelKey)) {
            return;
        }

        if (! isset($this->configSchemas[$topLevelKey])) {
            throw new UnknownOptionException(\sprintf('Missing config schema for "%s"', $topLevelKey), $topLevelKey);
        }

        try {
            $userData = [$topLevelKey => $this->userConfig->get($topLevelKey)];
        } catch (DataException $ex) {
            $userData = [];
        }

        try {
            $schema    = $this->configSchemas[$topLevelKey];
            $processor = new Processor();

            $processed = $processor->process(Expect::structure([$topLevelKey => $schema]), $userData);

            $this->raiseAnyDeprecationNotices($processor->getWarnings());

            $this->finalConfig->import((array) self::convertStdClassesToArrays($processed));
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
        } catch (NetteValidationException $ex) {
            throw new ValidationException($ex);
        }
    }

    /**
     * Recursively converts stdClass instances to arrays
     *
<<<<<<< HEAD
     * @param mixed $data
     *
     * @return mixed
     *
=======
     * @phpstan-template T
     *
     * @param T $data
     *
     * @return mixed
     *
     * @phpstan-return ($data is \stdClass ? array<string, mixed> : T)
     *
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
     * @psalm-pure
     */
    private static function convertStdClassesToArrays($data)
    {
        if ($data instanceof \stdClass) {
            $data = (array) $data;
        }

        if (\is_array($data)) {
            foreach ($data as $k => $v) {
                $data[$k] = self::convertStdClassesToArrays($v);
            }
        }

        return $data;
    }

    /**
     * @param string[] $warnings
     */
    private function raiseAnyDeprecationNotices(array $warnings): void
    {
        foreach ($warnings as $warning) {
            @\trigger_error($warning, \E_USER_DEPRECATED);
        }
    }
<<<<<<< HEAD
=======

    /**
     * @throws InvalidPathException
     */
    private static function getTopLevelKey(string $path): string
    {
        if (\strlen($path) === 0) {
            throw new InvalidPathException('Path cannot be an empty string');
        }

        $path = \str_replace(['.', '/'], '.', $path);

        $firstDelimiter = \strpos($path, '.');
        if ($firstDelimiter === false) {
            return $path;
        }

        return \substr($path, 0, $firstDelimiter);
    }
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
}
