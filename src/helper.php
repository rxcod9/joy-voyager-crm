<?php

use Illuminate\Support\Str;

// if (! function_exists('joyVoyagerCrm')) {
//     /**
//      * Helper
//      */
//     function joyVoyagerCrm($argument1 = null)
//     {
//         //
//     }
// }

if (!function_exists('uniqFingerprint')) {
    /**
     * Helper
     */
    function uniqFingerprint()
    {
        if (app()->bound('request') && request()->route()) {
            return request()->uniqFingerprint();
        }

        return sha1(Str::uuid());
    }
}
