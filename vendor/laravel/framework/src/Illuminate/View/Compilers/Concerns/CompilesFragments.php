<?php

namespace Illuminate\View\Compilers\Concerns;

trait CompilesFragments
{
    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     * The last compiled fragment.
     *
     * @var string
     */
    protected $lastFragment;

    /**
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     * Compile the fragment statements into valid PHP.
     *
     * @param  string  $expression
     * @return string
     */
    protected function compileFragment($expression)
    {
        $this->lastFragment = trim($expression, "()'\" ");

        return "<?php \$__env->startFragment{$expression}; ?>";
    }

    /**
     * Compile the end-fragment statements into valid PHP.
     *
     * @return string
     */
    protected function compileEndfragment()
    {
        return '<?php echo $__env->stopFragment(); ?>';
    }
}
