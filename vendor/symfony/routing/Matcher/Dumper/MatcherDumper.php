<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing\Matcher\Dumper;

use Symfony\Component\Routing\RouteCollection;

/**
 * MatcherDumper is the abstract class for all built-in matcher dumpers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class MatcherDumper implements MatcherDumperInterface
{
    private RouteCollection $routes;

    public function __construct(RouteCollection $routes)
    {
        $this->routes = $routes;
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
    public function getRoutes(): RouteCollection
    {
        return $this->routes;
    }
}
