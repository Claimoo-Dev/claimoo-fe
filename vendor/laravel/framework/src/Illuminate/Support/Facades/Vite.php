<?php

namespace Illuminate\Support\Facades;

/**
 * @method static string useCspNonce(?string $nonce = null)
 * @method static string|null cspNonce()
<<<<<<< HEAD
=======
<<<<<<< HEAD
 * @method static string|null manifestHash(?string $buildDirectory = null)
 * @method static string asset(string $asset, ?string $buildDirectory = null)
 * @method static string hotFile()
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
 * @method static \Illuminate\Foundation\Vite useManifestFilename(string $filename)
 * @method static string|null manifestHash(?string $buildDirectory = null)
 * @method static string asset(string $asset, ?string $buildDirectory = null)
 * @method static string hotFile()
 * @method static bool isRunningHot()
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
 * @method static \Illuminate\Foundation\Vite useBuildDirectory(string $path)
 * @method static \Illuminate\Foundation\Vite useHotFile(string $path)
 * @method static \Illuminate\Foundation\Vite useIntegrityKey(string|false $key)
 * @method static \Illuminate\Foundation\Vite useScriptTagAttributes(callable|array $callback)
 * @method static \Illuminate\Foundation\Vite useStyleTagAttributes(callable|array $callback)
 * @method static \Illuminate\Foundation\Vite withEntryPoints(array $entryPoints)
 *
 * @see \Illuminate\Foundation\Vite
 */
class Vite extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Illuminate\Foundation\Vite::class;
    }
}
