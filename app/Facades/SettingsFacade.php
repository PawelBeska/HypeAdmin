<?php namespace App\Facades;

/*
 * DBS
 */

use App\Setting;
use Illuminate\Support\Facades\Facade;

class SettingsFacade extends Facade
{

    public static function getFacadeAccessor()
    {
        return 'Settings';
    }

    public static function get($name)
    {
        if ($setting = Setting::where('name', $name)->first()) {
            return $setting->value;
        }
        return false;
    }

    public static function getBoolean($name)
    {
        if ($setting = Setting::where('name', $name)->first()) {
            if ($setting->value == 'true') {
                return true;
            } else {
                return false;
            }
        }
        return false;
    }

    public static function all()
    {
        return Setting::all();
    }
}
