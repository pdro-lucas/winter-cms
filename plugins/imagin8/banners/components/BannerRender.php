<?php namespace Imagin8\Banners\Components;

use Cms\Classes\ComponentBase;
use Imagin8\Banners\Models\Category;

class BannerRender extends ComponentBase
{
    public $category;
    public $banners;

    /**
     * Gets the details for the component
     */
    public function componentDetails()
    {
        return [
            'name'        => 'Banner Render',
            'description' => 'Exibe o valor de banners na página.'
        ];
    }

    /**
     * Returns the properties provided by the component
     */
    public function defineProperties(): array
    {
        return [
            'code' => [
                'title' => 'Código do Slider',
                'description' => 'O código da categoria criada no admin (ex: home_hero)',
                'default' => 'home_hero',
                'type' => 'string',
            ]
        ];
    }

    public function onRun(): void
    {
        $this->addCss('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
        $this->addJs('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');

        $code = $this->property('code');
        $this->category = Category::query()->where('code', $code)->with('items')->first();

        if ($this->category) {
            $this->banners = $this->category->items()->where('is_active', true)->get();
        }
    }
}
