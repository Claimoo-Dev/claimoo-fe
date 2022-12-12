<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\XmlConfiguration;

use IteratorAggregate;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
<<<<<<< HEAD
 *
 * @template-implements IteratorAggregate<int, Extension>
=======
<<<<<<< HEAD
=======
 *
 * @template-implements IteratorAggregate<int, Extension>
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
 */
final class ExtensionCollection implements IteratorAggregate
{
    /**
     * @var Extension[]
     */
    private $extensions;

    /**
     * @param Extension[] $extensions
     */
    public static function fromArray(array $extensions): self
    {
        return new self(...$extensions);
    }

    private function __construct(Extension ...$extensions)
    {
        $this->extensions = $extensions;
    }

    /**
     * @return Extension[]
     */
    public function asArray(): array
    {
        return $this->extensions;
    }

    public function getIterator(): ExtensionCollectionIterator
    {
        return new ExtensionCollectionIterator($this);
    }
}
