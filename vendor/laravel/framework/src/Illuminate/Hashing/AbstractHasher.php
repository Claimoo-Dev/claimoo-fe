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
     * @param  string|null  $hashedValue
=======
<<<<<<< HEAD
     * @param  string  $hashedValue
=======
     * @param  string|null  $hashedValue
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     * @param  array  $options
     * @return bool
     */
    public function check($value, $hashedValue, array $options = [])
    {
<<<<<<< HEAD
        if (is_null($hashedValue) || strlen($hashedValue) === 0) {
=======
<<<<<<< HEAD
        if (strlen($hashedValue) === 0) {
=======
        if (is_null($hashedValue) || strlen($hashedValue) === 0) {
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
            return false;
        }

        return password_verify($value, $hashedValue);
    }
}
