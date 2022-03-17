<?php

use Symfony\Component\VarDumper\VarDumper;

// if (! function_exists('joyVoyagerCrm')) {
//     /**
//      * Helper
//      */
//     function joyVoyagerCrm($argument1 = null)
//     {
//         //
//     }
// }

if (!function_exists('pr')) {
    /**
     * @return never
     */
    function pr(...$vars)
    {
        if (!in_array(\PHP_SAPI, ['cli', 'phpdbg'], true) && !headers_sent()) {
            header('HTTP/1.1 500 Internal Server Error');
        }

        foreach ($vars as $v) {
            VarDumper::dump($v);
        }

        // exit(1);
    }
}
