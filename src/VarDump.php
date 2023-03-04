<?php
declare(strict_types=1);

namespace Maatcode\Tools;

class VarDump
{
    /**
     * @param $value
     * @return void
     */
    public static function dump($value) {
        $arr = debug_backtrace(0);
        var_dump($value . '           ' . $arr[0]['file'] . ':: line '  . $arr[0]['line']);
    }
}
