<?php

namespace Illuminate\Validation\Rules;

use Illuminate\Contracts\Validation\Rule;
use TypeError;

class Enum implements Rule
{
    /**
     * The type of the enum.
     *
     * @var string
     */
    protected $type;

    /**
     * Create a new rule instance.
     *
     * @param  string  $type
     * @return void
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
<<<<<<< HEAD
        if (is_null($value) || ! function_exists('enum_exists') || ! enum_exists($this->type) || ! method_exists($this->type, 'tryFrom')) {
            return false;
        }

=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
        if ($value instanceof $this->type) {
            return true;
        }

<<<<<<< HEAD
=======
        if (is_null($value) || ! function_exists('enum_exists') || ! enum_exists($this->type) || ! method_exists($this->type, 'tryFrom')) {
            return false;
        }

>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
        try {
            return ! is_null($this->type::tryFrom($value));
        } catch (TypeError $e) {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return array
     */
    public function message()
    {
        $message = trans('validation.enum');

        return $message === 'validation.enum'
            ? ['The selected :attribute is invalid.']
            : $message;
    }
}
