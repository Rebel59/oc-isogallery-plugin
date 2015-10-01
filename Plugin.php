<?php namespace Rebel59\Isogallery;

use System\Classes\PluginBase;
use Backend;

/**
 * isogallery Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'rebel59.isogallery::lang.plugin.name',
            'description' => 'rebel59.isogallery::lang.plugin.description',
            'author'      => 'Rebel59',
            'icon'        => 'icon-info'
        ];
    }

    public function registerComponents()
    {
        return [
            'Rebel59\Isogallery\Components\IsoGallery' => 'isogallery',
        ];
    }

    public function registerPermissions(){
        return [
        'rebel59.isogallery.access_galleries' => ['tab' => 'rebel59.isogallery::lang.plugin.name', 'label' => 'rebel59.isogallery::lang.permissions.access_galleries'],
        ];
    }

    public function registerNavigation()
    {
        return [
            'isogallery' => [
                'label' => 'rebel59.isogallery::lang.menu.name',
                'url'   => Backend::url('rebel59/isogallery/galleries'),
                'icon'        => 'icon-camera',
                'permissions' => ['rebel59.isogallery'],
                'order'       => 500,
                'sideMenu' => [
                    'galleries' => [
                        'label'       => 'rebel59.isogallery::lang.menu.sidemenu.galleries',
                        'icon'        => 'icon-files-o',
                        'url'         => Backend::url('rebel59/isogallery/galleries'),
                        'attributes'  => ['data-menu-item'=>'pages'],
                        'permissions' => ['rebel59.isogallery.galleries']
                    ],
                    'categories' => [
                        'label'       => 'rebel59.isogallery::lang.menu.sidemenu.categories',
                        'icon'        => 'icon-sitemap',
                        'url'         => Backend::url('rebel59/isogallery/categories'),
                        'permissions' => ['rebel59.isogallery.categoriespuu']
                    ]
                ]
            ],
        ];
    }

}
