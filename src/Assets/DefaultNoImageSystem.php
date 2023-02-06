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

class DefaultNoImageSystem
{
    public static function imagePath()
    {
        $path = __DIR__ . '/../../assets/image/system/';

        return realpath($path) . DIRECTORY_SEPARATOR;
    }

    public static function noImageAvailable()
    {
        return self::imagePath() . 'no-image-available.jpg';
    }

    public static function noImageAvailableThumb()
    {
        return self::imagePath() . 'no-image-available_thumb.jpg';
    }

    public static function noImageAvailable60px()
    {
        return self::imagePath() . 'no-image-available_60.jpg';
    }

    public static function noImageAvailable100px()
    {
        return self::imagePath() . 'no-image-available_100.jpg';
    }

    public static function noImageAvailable100x100px()
    {
        return self::imagePath() . 'no-image-available_100x100.jpg';
    }

    public static function noImageAvailable330px()
    {
        return self::imagePath() . 'no-image-available_330.jpg';
    }

    public static function noImageAvailable640px()
    {
        return self::imagePath() . 'no-image-available_640.jpg';
    }

    public static function noImageAvailableX100()
    {
        return self::imagePath() . 'no-image-available_x100.jpg';
    }

    public static function noImageAvailableX130()
    {
        return self::imagePath() . 'no-image-available_x130.jpg';
    }

    public static function noImageAvailableX330()
    {
        return self::imagePath() . 'no-image-available_x330.jpg';
    }

    public static function noImageAvailableX510()
    {
        return self::imagePath() . 'no-image-available_x510.jpg';
    }

    public static function noImageAvailableX530()
    {
        return self::imagePath() . 'no-image-available_x530.jpg';
    }

    public static function noImageAvailableX700()
    {
        return self::imagePath() . 'no-image-available_x700.jpg';
    }

    public static function noImageAvailableX800()
    {
        return self::imagePath() . 'no-image-available_x800.jpg';
    }

    public static function noImageAvailableX1250()
    {
        return self::imagePath() . 'no-image-available_x1250.jpg';
    }

    public static function noAvatar()
    {
        return self::imagePath() . 'no_avatar.jpg';
    }

    public static function noAvatar100x100()
    {
        return self::imagePath() . 'no_avatar_100x100.jpg';
    }

    public static function noVideoAvailable()
    {
        return self::imagePath() . 'no_video_available.jpg';
    }

    public static function noVideoAvailableThumb()
    {
        return self::imagePath() . 'no_video_available_thumb.jpg';
    }
}
