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
 * Formatter style interface for defining styles.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface OutputFormatterStyleInterface
{
    /**
     * Sets style foreground color.
     */
<<<<<<< HEAD
    public function setForeground(?string $color);
=======
<<<<<<< HEAD
    public function setForeground(string $color = null);
=======
    public function setForeground(?string $color);
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0

    /**
     * Sets style background color.
     */
<<<<<<< HEAD
    public function setBackground(?string $color);
=======
<<<<<<< HEAD
    public function setBackground(string $color = null);
=======
    public function setBackground(?string $color);
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0

    /**
     * Sets some specific style option.
     */
    public function setOption(string $option);

    /**
     * Unsets some specific style option.
     */
    public function unsetOption(string $option);

    /**
     * Sets multiple style options at once.
     */
    public function setOptions(array $options);

    /**
     * Applies the style to a given text.
     */
    public function apply(string $text): string;
}
