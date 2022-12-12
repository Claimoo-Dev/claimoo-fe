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
 * Handles XOAUTH2 authentication.
 *
 * @author xu.li<AthenaLightenedMyPath@gmail.com>
 *
 * @see https://developers.google.com/google-apps/gmail/xoauth2_protocol
 */
class XOAuth2Authenticator implements AuthenticatorInterface
{
    public function getAuthKeyword(): string
    {
        return 'XOAUTH2';
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
     * @see https://developers.google.com/google-apps/gmail/xoauth2_protocol#the_sasl_xoauth2_mechanism
     */
    public function authenticate(EsmtpTransport $client): void
    {
        $client->executeCommand('AUTH XOAUTH2 '.base64_encode('user='.$client->getUsername()."\1auth=Bearer ".$client->getPassword()."\1\1")."\r\n", [235]);
    }
}
