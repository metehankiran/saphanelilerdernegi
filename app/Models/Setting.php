<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    public static function getAllSettings()
    {
        $settings = self::all();
        $settingsArray = [];
        foreach ($settings as $setting) {
            $settingsArray[$setting->key] = $setting->value;
        }

        return $settingsArray;
    }
}
