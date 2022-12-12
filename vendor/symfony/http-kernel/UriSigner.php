<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel;

use Symfony\Component\HttpFoundation\Request;

/**
 * Signs URIs.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class UriSigner
{
    private string $secret;
    private string $parameter;

    /**
     * @param string $secret    A secret
     * @param string $parameter Query string parameter to use
     */
<<<<<<< HEAD
    public function __construct(#[\SensitiveParameter] string $secret, string $parameter = '_hash')
=======
<<<<<<< HEAD
    public function __construct(string $secret, string $parameter = '_hash')
=======
    public function __construct(#[\SensitiveParameter] string $secret, string $parameter = '_hash')
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    {
        $this->secret = $secret;
        $this->parameter = $parameter;
    }

    /**
     * Signs a URI.
     *
     * The given URI is signed by adding the query string parameter
     * which value depends on the URI and the secret.
     */
    public function sign(string $uri): string
    {
        $url = parse_url($uri);
<<<<<<< HEAD
=======
<<<<<<< HEAD
        if (isset($url['query'])) {
            parse_str($url['query'], $params);
        } else {
            $params = [];
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        $params = [];

        if (isset($url['query'])) {
            parse_str($url['query'], $params);
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        }

        $uri = $this->buildUrl($url, $params);
        $params[$this->parameter] = $this->computeHash($uri);

        return $this->buildUrl($url, $params);
    }

    /**
     * Checks that a URI contains the correct hash.
     */
    public function check(string $uri): bool
    {
        $url = parse_url($uri);
<<<<<<< HEAD
=======
<<<<<<< HEAD
        if (isset($url['query'])) {
            parse_str($url['query'], $params);
        } else {
            $params = [];
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        $params = [];

        if (isset($url['query'])) {
            parse_str($url['query'], $params);
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        }

        if (empty($params[$this->parameter])) {
            return false;
        }

        $hash = $params[$this->parameter];
        unset($params[$this->parameter]);

        return hash_equals($this->computeHash($this->buildUrl($url, $params)), $hash);
    }

    public function checkRequest(Request $request): bool
    {
        $qs = ($qs = $request->server->get('QUERY_STRING')) ? '?'.$qs : '';

        // we cannot use $request->getUri() here as we want to work with the original URI (no query string reordering)
        return $this->check($request->getSchemeAndHttpHost().$request->getBaseUrl().$request->getPathInfo().$qs);
    }

    private function computeHash(string $uri): string
    {
        return base64_encode(hash_hmac('sha256', $uri, $this->secret, true));
    }

    private function buildUrl(array $url, array $params = []): string
    {
        ksort($params, \SORT_STRING);
        $url['query'] = http_build_query($params, '', '&');

        $scheme = isset($url['scheme']) ? $url['scheme'].'://' : '';
        $host = $url['host'] ?? '';
        $port = isset($url['port']) ? ':'.$url['port'] : '';
        $user = $url['user'] ?? '';
        $pass = isset($url['pass']) ? ':'.$url['pass'] : '';
        $pass = ($user || $pass) ? "$pass@" : '';
        $path = $url['path'] ?? '';
<<<<<<< HEAD
        $query = $url['query'] ? '?'.$url['query'] : '';
=======
<<<<<<< HEAD
        $query = isset($url['query']) && $url['query'] ? '?'.$url['query'] : '';
=======
        $query = $url['query'] ? '?'.$url['query'] : '';
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        $fragment = isset($url['fragment']) ? '#'.$url['fragment'] : '';

        return $scheme.$user.$pass.$host.$port.$path.$query.$fragment;
    }
}
