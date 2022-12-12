<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-code-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report\Xml;

use DOMElement;
use TheSeer\Tokenizer\NamespaceUri;
use TheSeer\Tokenizer\Tokenizer;
use TheSeer\Tokenizer\XMLSerializer;

/**
 * @internal This class is not covered by the backward compatibility promise for phpunit/php-code-coverage
 */
final class Source
{
    /** @var DOMElement */
    private $context;

    public function __construct(DOMElement $context)
    {
        $this->context = $context;
    }

    public function setSourceCode(string $source): void
    {
        $context = $this->context;

<<<<<<< HEAD
        $tokens = (new Tokenizer())->parse($source);
=======
        $tokens = (new Tokenizer)->parse($source);
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
        $srcDom = (new XMLSerializer(new NamespaceUri($context->namespaceURI)))->toDom($tokens);

        $context->parentNode->replaceChild(
            $context->ownerDocument->importNode($srcDom->documentElement, true),
            $context
        );
    }
}
