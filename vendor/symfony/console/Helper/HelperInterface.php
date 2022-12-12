<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Helper;

/**
 * HelperInterface is the interface all helpers must implement.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface HelperInterface
{
    /**
     * Sets the helper set associated with this helper.
     */
<<<<<<< HEAD
    public function setHelperSet(HelperSet $helperSet = null);
=======
    public function setHelperSet(?HelperSet $helperSet);
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2

    /**
     * Gets the helper set associated with this helper.
     */
    public function getHelperSet(): ?HelperSet;

    /**
     * Returns the canonical name of this helper.
     *
     * @return string
     */
    public function getName();
}
