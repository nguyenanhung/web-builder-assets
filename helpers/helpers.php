<?php
if (!function_exists('smart_bear_wbsa_default_image_system')) {
    function smart_bear_wbsa_default_image_system()
    {
        return \nguyenanhung\WebBuilderSDKAssets\Assets\DefaultNoImageSystem::noImageAvailable();
    }

    function smart_bear_wbsa_default_image_system_thumb()
    {
        return \nguyenanhung\WebBuilderSDKAssets\Assets\DefaultNoImageSystem::noImageAvailableThumb();
    }

    function smart_bear_wbsa_default_image_system_640()
    {
        return \nguyenanhung\WebBuilderSDKAssets\Assets\DefaultNoImageSystem::noImageAvailable640px();
    }

    function smart_bear_wbsa_default_image_system_700()
    {
        return \nguyenanhung\WebBuilderSDKAssets\Assets\DefaultNoImageSystem::noImageAvailableX700();
    }

    function smart_bear_wbsa_default_image_no_avatar()
    {
        return \nguyenanhung\WebBuilderSDKAssets\Assets\DefaultNoImageSystem::noAvatar();
    }

    function smart_bear_wbsa_default_image_no_avatar_100x100()
    {
        return \nguyenanhung\WebBuilderSDKAssets\Assets\DefaultNoImageSystem::noAvatar100x100();
    }

    function smart_bear_wbsa_default_image_no_video_available()
    {
        return \nguyenanhung\WebBuilderSDKAssets\Assets\DefaultNoImageSystem::noVideoAvailable();
    }

    function smart_bear_wbsa_default_image_no_video_available_thumb()
    {
        return \nguyenanhung\WebBuilderSDKAssets\Assets\DefaultNoImageSystem::noVideoAvailableThumb();
    }
}
