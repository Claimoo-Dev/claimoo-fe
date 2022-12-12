<?php

namespace Illuminate\Hashing;

abstract class AbstractHasher
{
    /**
     * Get information about the given hashed value.
     *
     * @param  string  $hashedValue
     * @return array
     */
    public function info($hashedValue)
    {
        return password_get_info($hashedValue);
    }

    /**
     * Check the given plain value against a hash.
     *
     * @param  string  $value
<<<<<<< HEAD
     * @param  string  $hashedValue
=======
     * @param  string|null  $hashedValue
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
     * @param  array  $options
     * @return bool
     */
    public function check($value, $hashedValue, array $options = [])
    {
<<<<<<< HEAD
        if (strlen($hashedValue) === 0) {
=======
        if (is_null($hashedValue) || strlen($hashedValue) === 0) {
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
            return false;
        }

        return password_verify($value, $hashedValue);
    }
}
