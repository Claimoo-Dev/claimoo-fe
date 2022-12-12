<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\Schema\Elements;

use Nette;
use Nette\Schema\Context;
use Nette\Schema\Helpers;
use Nette\Schema\Schema;


final class AnyOf implements Schema
{
	use Base;
	use Nette\SmartObject;

	/** @var array */
	private $set;


	/**
	 * @param  mixed|Schema  ...$set
	 */
	public function __construct(...$set)
	{
		if (!$set) {
			throw new Nette\InvalidStateException('The enumeration must not be empty.');
		}
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======

>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
		$this->set = $set;
	}


	public function firstIsDefault(): self
	{
		$this->default = $this->set[0];
		return $this;
	}


	public function nullable(): self
	{
		$this->set[] = null;
		return $this;
	}


	public function dynamic(): self
	{
		$this->set[] = new Type(Nette\Schema\DynamicParameter::class);
		return $this;
	}


	/********************* processing ****************d*g**/


	public function normalize($value, Context $context)
	{
		return $this->doNormalize($value, $context);
	}


	public function merge($value, $base)
	{
		if (is_array($value) && isset($value[Helpers::PREVENT_MERGING])) {
			unset($value[Helpers::PREVENT_MERGING]);
			return $value;
		}
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======

>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
		return Helpers::merge($value, $base);
	}


	public function complete($value, Context $context)
	{
		$expecteds = $innerErrors = [];
		foreach ($this->set as $item) {
			if ($item instanceof Schema) {
				$dolly = new Context;
				$dolly->path = $context->path;
				$res = $item->complete($item->normalize($value, $dolly), $dolly);
				if (!$dolly->errors) {
					$context->warnings = array_merge($context->warnings, $dolly->warnings);
					return $this->doFinalize($res, $context);
				}
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======

>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
				foreach ($dolly->errors as $error) {
					if ($error->path !== $context->path || empty($error->variables['expected'])) {
						$innerErrors[] = $error;
					} else {
						$expecteds[] = $error->variables['expected'];
					}
				}
			} else {
				if ($item === $value) {
					return $this->doFinalize($value, $context);
				}
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======

>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
				$expecteds[] = Nette\Schema\Helpers::formatValue($item);
			}
		}

		if ($innerErrors) {
			$context->errors = array_merge($context->errors, $innerErrors);
		} else {
			$context->addError(
				'The %label% %path% expects to be %expected%, %value% given.',
				Nette\Schema\Message::TYPE_MISMATCH,
				[
					'value' => $value,
					'expected' => implode('|', array_unique($expecteds)),
				]
			);
		}
	}


	public function completeDefault(Context $context)
	{
		if ($this->required) {
			$context->addError(
				'The mandatory item %path% is missing.',
				Nette\Schema\Message::MISSING_ITEM
			);
			return null;
		}
<<<<<<< HEAD
=======
<<<<<<< HEAD
		if ($this->default instanceof Schema) {
			return $this->default->completeDefault($context);
		}
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0

		if ($this->default instanceof Schema) {
			return $this->default->completeDefault($context);
		}

<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
		return $this->default;
	}
}
