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

use function count;
use function iterator_count;
use Countable;
use Iterator;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
<<<<<<< HEAD
 *
 * @template-implements Iterator<int, TestFile>
=======
<<<<<<< HEAD
=======
 *
 * @template-implements Iterator<int, TestFile>
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
 */
final class TestFileCollectionIterator implements Countable, Iterator
{
    /**
     * @var TestFile[]
     */
    private $files;

    /**
     * @var int
     */
    private $position;

    public function __construct(TestFileCollection $files)
    {
        $this->files = $files->asArray();
    }

    public function count(): int
    {
        return iterator_count($this);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        return $this->position < count($this->files);
    }

    public function key(): int
    {
        return $this->position;
    }

    public function current(): TestFile
    {
        return $this->files[$this->position];
    }

    public function next(): void
    {
        $this->position++;
    }
}
