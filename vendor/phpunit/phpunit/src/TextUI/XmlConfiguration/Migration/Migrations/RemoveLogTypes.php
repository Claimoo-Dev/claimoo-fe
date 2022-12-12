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

<<<<<<< HEAD
use function assert;
=======
<<<<<<< HEAD
=======
use function assert;
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
use DOMDocument;
use DOMElement;
use PHPUnit\Util\Xml\SnapshotNodeList;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class RemoveLogTypes implements Migration
{
    public function migrate(DOMDocument $document): void
    {
        $logging = $document->getElementsByTagName('logging')->item(0);

        if (!$logging instanceof DOMElement) {
            return;
        }

        foreach (SnapshotNodeList::fromNodeList($logging->getElementsByTagName('log')) as $logNode) {
<<<<<<< HEAD
            assert($logNode instanceof DOMElement);

=======
<<<<<<< HEAD
=======
            assert($logNode instanceof DOMElement);

>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
            switch ($logNode->getAttribute('type')) {
                case 'json':
                case 'tap':
                    $logging->removeChild($logNode);
            }
        }
    }
}
