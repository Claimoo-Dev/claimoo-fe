<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Formatter;

/**
 * @author Tien Xuan Vo <tien.xuan.vo@gmail.com>
 */
final class NullOutputFormatterStyle implements OutputFormatterStyleInterface
{
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
    public function apply(string $text): string
    {
        return $text;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function setBackground(string $color = null): void
    {
        // do nothing
    }

    /**
     * {@inheritdoc}
     */
    public function setForeground(string $color = null): void
    {
        // do nothing
    }

    /**
     * {@inheritdoc}
     */
=======
    public function setBackground(string $color = null): void
    {
        if (1 > \func_num_args()) {
            trigger_deprecation('symfony/console', '6.2', 'Calling "%s()" without any arguments is deprecated, pass null explicitly instead.', __METHOD__);
        }
        // do nothing
    }

    public function setForeground(string $color = null): void
    {
        if (1 > \func_num_args()) {
            trigger_deprecation('symfony/console', '6.2', 'Calling "%s()" without any arguments is deprecated, pass null explicitly instead.', __METHOD__);
        }
        // do nothing
    }

>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
    public function setOption(string $option): void
    {
        // do nothing
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
    public function setOptions(array $options): void
    {
        // do nothing
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
    public function unsetOption(string $option): void
    {
        // do nothing
    }
}
