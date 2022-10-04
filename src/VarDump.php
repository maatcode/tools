<?php

namespace Maatcode\Tools;

class VarDump
{
    public static function dump($value) {
        $arr = debug_backtrace(0);
        var_dump($value . '           ' . $arr[0]['file'] . ':: line '  . $arr[0]['line']);
    }
}
