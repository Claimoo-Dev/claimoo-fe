<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Dumper;

use Symfony\Component\Translation\MessageCatalogue;

/**
 * PhpFileDumper generates PHP files from a message catalogue.
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 */
class PhpFileDumper extends FileDumper
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    public function formatCatalogue(MessageCatalogue $messages, string $domain, array $options = []): string
    {
        return "<?php\n\nreturn ".var_export($messages->all($domain), true).";\n";
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
    protected function getExtension(): string
    {
        return 'php';
    }
}
