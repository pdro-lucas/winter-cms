<?php namespace Imagin8\Banners;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Imagin8\Banners\Components\BannerRender' => 'bannerRender',
        ];
    }

    public function registerSettings()
    {
    }
}
