<?php

namespace Illuminate\Hashing;

use RuntimeException;

class Argon2IdHasher extends ArgonHasher
{
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
     *
     * @throws \RuntimeException
     */
    public function check($value, $hashedValue, array $options = [])
    {
        if ($this->verifyAlgorithm && $this->info($hashedValue)['algoName'] !== 'argon2id') {
            throw new RuntimeException('This password does not use the Argon2id algorithm.');
        }

<<<<<<< HEAD
        if (strlen($hashedValue) === 0) {
=======
        if (is_null($hashedValue) || strlen($hashedValue) === 0) {
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
            return false;
        }

        return password_verify($value, $hashedValue);
    }

    /**
     * Get the algorithm that should be used for hashing.
     *
     * @return int
     */
    protected function algorithm()
    {
        return PASSWORD_ARGON2ID;
    }
}
