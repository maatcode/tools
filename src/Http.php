<?php
declare(strict_types=1);

namespace Maatcode\Tools;


class Http
{
    /**
     * @return string
     */
    public static function getHostName(): string
    {
        $protocol = isset($_SERVER['HTTPS']) && strcasecmp('off', $_SERVER['HTTPS']) !== 0 ? "https" : "http";
        $hostname = $_SERVER['HTTP_HOST'];
        return $protocol . '://' . $hostname;
    }

    /**
     * @return string
     */
    public static function getProtocol (): string
    {
        return stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://';
    }
}
