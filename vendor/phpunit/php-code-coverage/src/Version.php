<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-code-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage;

use function dirname;
use SebastianBergmann\Version as VersionId;

final class Version
{
    /**
     * @var string
     */
    private static $version;

    public static function id(): string
    {
        if (self::$version === null) {
<<<<<<< HEAD
            self::$version = (new VersionId('9.2.19', dirname(__DIR__)))->getVersion();
=======
<<<<<<< HEAD
            self::$version = (new VersionId('9.2.18', dirname(__DIR__)))->getVersion();
=======
            self::$version = (new VersionId('9.2.19', dirname(__DIR__)))->getVersion();
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        }

        return self::$version;
    }
}
