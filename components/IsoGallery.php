<?php namespace Rebel59\Isogallery\Components;

use Cms\Classes\ComponentBase;
use Rebel59\Isogallery\Models\Gallery;
use Rebel59\Isogallery\Models\Category;

class IsoGallery extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'rebel59.isogallery::lang.components.isoGallery.name',
            'description' => 'rebel59.isogallery::lang.components.isoGallery.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'defaultLayout' => [
                'title'         => 'rebel59.isogallery::lang.components.isoGallery.properties.defaultLayout.title',
                'description'   => 'rebel59.isogallery::lang.components.isoGallery.properties.defaultLayout.description',
                'type'          => 'checkbox',
                'default'       => '1',
            ],
            'defaultJs' => [
                'title'         => 'rebel59.isogallery::lang.components.isoGallery.properties.defaultJs.title',
                'description'   => 'rebel59.isogallery::lang.components.isoGallery.properties.defaultJs.description',
                'type'          => 'checkbox',
                'default'       => '1',
            ],
            'stripSource' => [
                'title'         => 'rebel59.isogallery::lang.components.isoGallery.properties.stripSource.title',
                'description'   => 'rebel59.isogallery::lang.components.isoGallery.properties.stripSource.description',
                'type'          => 'checkbox',
                'default'       => '1',
            ],
            'isotopeSource' => [
                'title'         => 'rebel59.isogallery::lang.components.isoGallery.properties.isotopeSource.title',
                'description'   => 'rebel59.isogallery::lang.components.isoGallery.properties.isotopeSource.description',
                'type'          => 'checkbox',
                'default'       => '1',
            ],
            'amount' => [
                'title'         => 'rebel59.isogallery::lang.components.isoGallery.properties.amount.title',
                'description'   => 'rebel59.isogallery::lang.components.isoGallery.properties.amount.description',
                'type'          => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'rebel59.isogallery::lang.components.isoGallery.properties.amount.title',
                'default'       => '0',
            ],
        ];
    }

    public function onRun()
    {
        $this->page['categories'] = Category::all();
        if($this->property('amount') == 0){
            $this->page['galleries'] = Gallery::orderBy('updated_at', 'desc')->get();
        }else{
            $this->page['galleries'] = Gallery::orderBy('updated_at', 'desc')->take($this->property('amount'))->get();
        }
        

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