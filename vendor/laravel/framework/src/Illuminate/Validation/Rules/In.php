<?php

namespace Illuminate\Validation\Rules;

class In
{
    /**
     * The name of the rule.
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
     */
    protected $rule = 'in';

    /**
     * The accepted values.
     *
     * @var array
     */
    protected $values;

    /**
     * Create a new in rule instance.
     *
     * @param  array  $values
     * @return void
     */
    public function __construct(array $values)
    {
        $this->values = $values;
    }

    /**
     * Convert the rule to a validation string.
     *
     * @return string
     *
     * @see \Illuminate\Validation\ValidationRuleParser::parseParameters
     */
    public function __toString()
    {
        $values = array_map(function ($value) {
            return '"'.str_replace('"', '""', $value).'"';
        }, $this->values);

        return $this->rule.':'.implode(',', $values);
    }
}
