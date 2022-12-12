<?php

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 * (c) Rezo Zero / Ambroise Maupate
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace League\CommonMark\Extension\Footnote\Renderer;

use League\CommonMark\Extension\Footnote\Node\FootnoteRef;
use League\CommonMark\Node\Node;
use League\CommonMark\Renderer\ChildNodeRendererInterface;
use League\CommonMark\Renderer\NodeRendererInterface;
use League\CommonMark\Util\HtmlElement;
use League\CommonMark\Xml\XmlNodeRendererInterface;
use League\Config\ConfigurationAwareInterface;
use League\Config\ConfigurationInterface;

final class FootnoteRefRenderer implements NodeRendererInterface, XmlNodeRendererInterface, ConfigurationAwareInterface
{
    private ConfigurationInterface $config;

    /**
     * @param FootnoteRef $node
     *
     * {@inheritDoc}
     *
     * @psalm-suppress MoreSpecificImplementedParamType
     */
    public function render(Node $node, ChildNodeRendererInterface $childRenderer): \Stringable
    {
        FootnoteRef::assertInstanceOf($node);

        $attrs = $node->data->getData('attributes');
        $attrs->append('class', $this->config->get('footnote/ref_class'));
<<<<<<< HEAD
        $attrs->set('href', \mb_strtolower($node->getReference()->getDestination()));
=======
        $attrs->set('href', \mb_strtolower($node->getReference()->getDestination(), 'UTF-8'));
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
        $attrs->set('role', 'doc-noteref');

        $idPrefix = $this->config->get('footnote/ref_id_prefix');

        return new HtmlElement(
            'sup',
            [
<<<<<<< HEAD
                'id' => $idPrefix . \mb_strtolower($node->getReference()->getLabel()),
=======
                'id' => $idPrefix . \mb_strtolower($node->getReference()->getLabel(), 'UTF-8'),
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
            ],
            new HtmlElement(
                'a',
                $attrs->export(),
                $node->getReference()->getTitle()
            ),
            true
        );
    }

    public function setConfiguration(ConfigurationInterface $configuration): void
    {
        $this->config = $configuration;
    }

    public function getXmlTagName(Node $node): string
    {
        return 'footnote_ref';
    }

    /**
     * @param FootnoteRef $node
     *
     * @return array<string, scalar>
     *
     * @psalm-suppress MoreSpecificImplementedParamType
     */
    public function getXmlAttributes(Node $node): array
    {
        FootnoteRef::assertInstanceOf($node);

        return [
            'reference' => $node->getReference()->getLabel(),
        ];
    }
}
