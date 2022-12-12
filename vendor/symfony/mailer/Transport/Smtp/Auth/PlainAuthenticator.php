<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mailer\Transport\Smtp\Auth;

use Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport;

/**
 * Handles PLAIN authentication.
 *
 * @author Chris Corbyn
 */
class PlainAuthenticator implements AuthenticatorInterface
{
    public function getAuthKeyword(): string
    {
        return 'PLAIN';
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * {@inheritdoc}
     *
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     * @see https://www.ietf.org/rfc/rfc4954.txt
     */
    public function authenticate(EsmtpTransport $client): void
    {
        $client->executeCommand(sprintf("AUTH PLAIN %s\r\n", base64_encode($client->getUsername().\chr(0).$client->getUsername().\chr(0).$client->getPassword())), [235]);
    }
}
