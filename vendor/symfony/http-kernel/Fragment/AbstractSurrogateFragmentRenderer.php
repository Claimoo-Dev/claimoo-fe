<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Fragment;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ControllerReference;
use Symfony\Component\HttpKernel\HttpCache\SurrogateInterface;
use Symfony\Component\HttpKernel\UriSigner;

/**
 * Implements Surrogate rendering strategy.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class AbstractSurrogateFragmentRenderer extends RoutableFragmentRenderer
{
    private ?SurrogateInterface $surrogate;
    private FragmentRendererInterface $inlineStrategy;
    private ?UriSigner $signer;

    /**
     * The "fallback" strategy when surrogate is not available should always be an
     * instance of InlineFragmentRenderer.
     *
     * @param FragmentRendererInterface $inlineStrategy The inline strategy to use when the surrogate is not supported
     */
    public function __construct(SurrogateInterface $surrogate = null, FragmentRendererInterface $inlineStrategy, UriSigner $signer = null)
    {
        $this->surrogate = $surrogate;
        $this->inlineStrategy = $inlineStrategy;
        $this->signer = $signer;
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
     * Note that if the current Request has no surrogate capability, this method
     * falls back to use the inline rendering strategy.
     *
     * Additional available options:
     *
     *  * alt: an alternative URI to render in case of an error
     *  * comment: a comment to add when returning the surrogate tag
<<<<<<< HEAD
     *  * absolute_uri: whether to generate an absolute URI or not. Default is false
=======
<<<<<<< HEAD
=======
     *  * absolute_uri: whether to generate an absolute URI or not. Default is false
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     *
     * Note, that not all surrogate strategies support all options. For now
     * 'alt' and 'comment' are only supported by ESI.
     *
     * @see Symfony\Component\HttpKernel\HttpCache\SurrogateInterface
     */
    public function render(string|ControllerReference $uri, Request $request, array $options = []): Response
    {
        if (!$this->surrogate || !$this->surrogate->hasSurrogateCapability($request)) {
            if ($uri instanceof ControllerReference && $this->containsNonScalars($uri->attributes)) {
                throw new \InvalidArgumentException('Passing non-scalar values as part of URI attributes to the ESI and SSI rendering strategies is not supported. Use a different rendering strategy or pass scalar values.');
            }

            return $this->inlineStrategy->render($uri, $request, $options);
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
        if ($uri instanceof ControllerReference) {
            $uri = $this->generateSignedFragmentUri($uri, $request);
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        $absolute = $options['absolute_uri'] ?? false;

        if ($uri instanceof ControllerReference) {
            $uri = $this->generateSignedFragmentUri($uri, $request, $absolute);
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        }

        $alt = $options['alt'] ?? null;
        if ($alt instanceof ControllerReference) {
<<<<<<< HEAD
            $alt = $this->generateSignedFragmentUri($alt, $request, $absolute);
=======
<<<<<<< HEAD
            $alt = $this->generateSignedFragmentUri($alt, $request);
=======
            $alt = $this->generateSignedFragmentUri($alt, $request, $absolute);
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        }

        $tag = $this->surrogate->renderIncludeTag($uri, $alt, $options['ignore_errors'] ?? false, $options['comment'] ?? '');

        return new Response($tag);
    }

<<<<<<< HEAD
    private function generateSignedFragmentUri(ControllerReference $uri, Request $request, bool $absolute): string
    {
        return (new FragmentUriGenerator($this->fragmentPath, $this->signer))->generate($uri, $request, $absolute);
=======
<<<<<<< HEAD
    private function generateSignedFragmentUri(ControllerReference $uri, Request $request): string
    {
        return (new FragmentUriGenerator($this->fragmentPath, $this->signer))->generate($uri, $request);
=======
    private function generateSignedFragmentUri(ControllerReference $uri, Request $request, bool $absolute): string
    {
        return (new FragmentUriGenerator($this->fragmentPath, $this->signer))->generate($uri, $request, $absolute);
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    }

    private function containsNonScalars(array $values): bool
    {
        foreach ($values as $value) {
            if (\is_scalar($value) || null === $value) {
                continue;
            }

            if (!\is_array($value) || $this->containsNonScalars($value)) {
                return true;
            }
        }

        return false;
    }
}
