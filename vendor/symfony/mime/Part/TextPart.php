<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mime\Part;

use Symfony\Component\Mime\Encoder\Base64ContentEncoder;
use Symfony\Component\Mime\Encoder\ContentEncoderInterface;
use Symfony\Component\Mime\Encoder\EightBitContentEncoder;
use Symfony\Component\Mime\Encoder\QpContentEncoder;
use Symfony\Component\Mime\Exception\InvalidArgumentException;
use Symfony\Component\Mime\Header\Headers;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TextPart extends AbstractPart
{
    /** @internal */
    protected $_headers;

    private static $encoders = [];

    private $body;
    private $charset;
    private $subtype;
    /**
     * @var ?string
     */
    private $disposition;
    private $name;
    private $encoding;
    private $seekable;

    /**
<<<<<<< HEAD
     * @param resource|string|File $body Use a File instance to defer loading the file until rendering
=======
<<<<<<< HEAD
     * @param resource|string $body
=======
     * @param resource|string|File $body Use a File instance to defer loading the file until rendering
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     */
    public function __construct($body, ?string $charset = 'utf-8', string $subtype = 'plain', string $encoding = null)
    {
        unset($this->_headers);

        parent::__construct();

<<<<<<< HEAD
=======
<<<<<<< HEAD
        if (!\is_string($body) && !\is_resource($body)) {
            throw new \TypeError(sprintf('The body of "%s" must be a string or a resource (got "%s").', self::class, get_debug_type($body)));
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        if (!\is_string($body) && !\is_resource($body) && !$body instanceof File) {
            throw new \TypeError(sprintf('The body of "%s" must be a string, a resource, or an instance of "%s" (got "%s").', self::class, File::class, get_debug_type($body)));
        }

        if ($body instanceof File) {
            $path = $body->getPath();
            if ((is_file($path) && !is_readable($path)) || is_dir($path)) {
                throw new InvalidArgumentException(sprintf('Path "%s" is not readable.', $path));
            }
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        }

        $this->body = $body;
        $this->charset = $charset;
        $this->subtype = $subtype;
        $this->seekable = \is_resource($body) ? stream_get_meta_data($body)['seekable'] && 0 === fseek($body, 0, \SEEK_CUR) : null;

        if (null === $encoding) {
            $this->encoding = $this->chooseEncoding();
        } else {
            if ('quoted-printable' !== $encoding && 'base64' !== $encoding && '8bit' !== $encoding) {
                throw new InvalidArgumentException(sprintf('The encoding must be one of "quoted-printable", "base64", or "8bit" ("%s" given).', $encoding));
            }
            $this->encoding = $encoding;
        }
    }

    public function getMediaType(): string
    {
        return 'text';
    }

    public function getMediaSubtype(): string
    {
        return $this->subtype;
    }

    /**
     * @param string $disposition one of attachment, inline, or form-data
     *
     * @return $this
     */
    public function setDisposition(string $disposition): static
    {
        $this->disposition = $disposition;

        return $this;
    }

    /**
     * Sets the name of the file (used by FormDataPart).
     *
     * @return $this
     */
    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
<<<<<<< HEAD
     * Gets the name of the file.
=======
<<<<<<< HEAD
     * Gets the name of the file (used by FormDataPart).
=======
     * Gets the name of the file.
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    public function getBody(): string
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        if ($this->body instanceof File) {
            return file_get_contents($this->body->getPath());
        }

<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        if (null === $this->seekable) {
            return $this->body;
        }

        if ($this->seekable) {
            rewind($this->body);
        }

        return stream_get_contents($this->body) ?: '';
    }

    public function bodyToString(): string
    {
        return $this->getEncoder()->encodeString($this->getBody(), $this->charset);
    }

    public function bodyToIterable(): iterable
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
        if (null !== $this->seekable) {
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        if ($this->body instanceof File) {
            $path = $this->body->getPath();
            if (false === $handle = @fopen($path, 'r', false)) {
                throw new InvalidArgumentException(sprintf('Unable to open path "%s".', $path));
            }

            yield from $this->getEncoder()->encodeByteStream($handle);
        } elseif (null !== $this->seekable) {
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
            if ($this->seekable) {
                rewind($this->body);
            }
            yield from $this->getEncoder()->encodeByteStream($this->body);
        } else {
            yield $this->getEncoder()->encodeString($this->body);
        }
    }

    public function getPreparedHeaders(): Headers
    {
        $headers = parent::getPreparedHeaders();

        $headers->setHeaderBody('Parameterized', 'Content-Type', $this->getMediaType().'/'.$this->getMediaSubtype());
        if ($this->charset) {
            $headers->setHeaderParameter('Content-Type', 'charset', $this->charset);
        }
        if ($this->name && 'form-data' !== $this->disposition) {
            $headers->setHeaderParameter('Content-Type', 'name', $this->name);
        }
        $headers->setHeaderBody('Text', 'Content-Transfer-Encoding', $this->encoding);

        if (!$headers->has('Content-Disposition') && null !== $this->disposition) {
            $headers->setHeaderBody('Parameterized', 'Content-Disposition', $this->disposition);
            if ($this->name) {
                $headers->setHeaderParameter('Content-Disposition', 'name', $this->name);
            }
        }

        return $headers;
    }

    public function asDebugString(): string
    {
        $str = parent::asDebugString();
        if (null !== $this->charset) {
            $str .= ' charset: '.$this->charset;
        }
        if (null !== $this->disposition) {
            $str .= ' disposition: '.$this->disposition;
        }

        return $str;
    }

    private function getEncoder(): ContentEncoderInterface
    {
        if ('8bit' === $this->encoding) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
            return self::$encoders[$this->encoding] ?? (self::$encoders[$this->encoding] = new EightBitContentEncoder());
        }

        if ('quoted-printable' === $this->encoding) {
            return self::$encoders[$this->encoding] ?? (self::$encoders[$this->encoding] = new QpContentEncoder());
        }

        return self::$encoders[$this->encoding] ?? (self::$encoders[$this->encoding] = new Base64ContentEncoder());
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
            return self::$encoders[$this->encoding] ??= new EightBitContentEncoder();
        }

        if ('quoted-printable' === $this->encoding) {
            return self::$encoders[$this->encoding] ??= new QpContentEncoder();
        }

        return self::$encoders[$this->encoding] ??= new Base64ContentEncoder();
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    }

    private function chooseEncoding(): string
    {
        if (null === $this->charset) {
            return 'base64';
        }

        return 'quoted-printable';
    }

    public function __sleep(): array
    {
        // convert resources to strings for serialization
<<<<<<< HEAD
        if (null !== $this->seekable || $this->body instanceof File) {
=======
<<<<<<< HEAD
        if (null !== $this->seekable) {
=======
        if (null !== $this->seekable || $this->body instanceof File) {
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
            $this->body = $this->getBody();
            $this->seekable = null;
        }

        $this->_headers = $this->getHeaders();

        return ['_headers', 'body', 'charset', 'subtype', 'disposition', 'name', 'encoding'];
    }

    public function __wakeup()
    {
        $r = new \ReflectionProperty(AbstractPart::class, 'headers');
        $r->setValue($this, $this->_headers);
        unset($this->_headers);
    }
}
