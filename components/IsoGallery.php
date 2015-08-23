<?php namespace Rebel59\Isogallery\Components;

use Cms\Classes\ComponentBase;
use Rebel59\Isogallery\Models\Gallery;
use Rebel59\Isogallery\Models\Category;

class IsoGallery extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'isoGallery Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'defaultLayout' => [
                'title'         => 'rebel59.isogallery::lang.components.gallery.properties.defaultLayout.title',
                'description'   => 'rebel59.isogallery::lang.components.gallery.properties.defaultLayout.description',
                'type'          => 'checkbox',
                'default'       => 'true',
            ],
            'defaultJs' => [
                'title'         => 'rebel59.isogallery::lang.components.gallery.properties.defaultJs.title',
                'description'   => 'rebel59.isogallery::lang.components.gallery.properties.defaultJs.description',
                'type'          => 'checkbox',
                'default'       => 'true',
            ],
            'stripSource' => [
                'title'         => 'rebel59.isogallery::lang.components.gallery.properties.stripSource.title',
                'description'   => 'rebel59.isogallery::lang.components.gallery.properties.stripSource.description',
                'type'          => 'checkbox',
                'default'       => 'true',
            ],
            'isotopeSource' => [
                'title'         => 'rebel59.isogallery::lang.components.gallery.properties.isotopeSource.title',
                'description'   => 'rebel59.isogallery::lang.components.gallery.properties.isotopeSource.description',
                'type'          => 'checkbox',
                'default'       => 'true',
            ],
        ];
    }

    public function onRun()
    {
        $this->page['categories'] = Category::all();
        $this->page['galleries'] = Gallery::orderBy('updated_at', 'desc')->take(8)->get();

        if($this->property('defaultLayout') == true){
            $this->addCss('assets/css/defaultTheme.css');
        }
        if($this->property('defaultJs') == true){
            $this->addJs('assets/js/default.js');
        }

        if($this->property('stripSource') == true){
            $this->addCss('assets/css/strip.css');
            $this->addJs('assets/js/strip.pkgd.min.js');
        }
        if($this->property('isotopeSource') == true){
            $this->addJs('assets/js/isotope.pkgd.min.js');
        }
    }



}