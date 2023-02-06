<?php
/**
 * Project web-builder-sdk-assets
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 06/02/2023
 * Time: 14:16
 */

namespace nguyenanhung\WebBuilderSDKAssets\Assets;

class DefaultNoImageError
{
    const IMG_PATH = __DIR__ . '/../../assets/image/system/error/';

    public static function errorImage01()
    {
        return self::IMG_PATH . '404-1.jpg';
    }

    public static function errorImage02()
    {
        return self::IMG_PATH . '404-2.png';
    }

    public static function errorImage03()
    {
        return self::IMG_PATH . '404-3.png';
    }

    public static function errorImage04()
    {
        return self::IMG_PATH . '404-4.gif';
    }

    public static function errorImage05()
    {
        return self::IMG_PATH . '404-5.jpg';
    }

    public static function errorImage06()
    {
        return self::IMG_PATH . '404-6.jpg';
    }
}
