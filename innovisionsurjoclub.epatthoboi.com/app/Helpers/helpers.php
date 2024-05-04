<?php

use App\Models\SiteSetting as Setting;
use App\Models\District;

if (!function_exists('SiteSetting')) {
    function SiteSetting()
    {
        $site = Setting::first();
        return $site ? $site : $site = null;
    }
}
if (!function_exists('Districts')) {
    function Districts()
    {
        $site = District::orderBy('title_en','ASC')->get();
        return $site ? $site : $site = null;
    }
}
