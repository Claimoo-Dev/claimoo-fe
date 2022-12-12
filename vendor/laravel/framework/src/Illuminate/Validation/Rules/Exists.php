<?php

namespace Illuminate\Validation\Rules;

use Illuminate\Support\Traits\Conditionable;

class Exists
{
    use Conditionable, DatabaseRule;

    /**
<<<<<<< HEAD
     * Ignore soft deleted models during the existence check.
     *
     * @param  string  $deletedAtColumn
     * @return $this
     */
    public function withoutTrashed($deletedAtColumn = 'deleted_at')
    {
        $this->whereNull($deletedAtColumn);

        return $this;
    }

    /**
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
     * Convert the rule to a validation string.
     *
     * @return string
     */
    public function __toString()
    {
        return rtrim(sprintf('exists:%s,%s,%s',
            $this->table,
            $this->column,
            $this->formatWheres()
        ), ',');
    }
}
