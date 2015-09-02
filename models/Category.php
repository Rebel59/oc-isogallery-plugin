<?php namespace Rebel59\Isogallery\Models;

use Model;

/**
 * category Model
 */
class Category extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'rebel59_isogallery_categories';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['title', 'slug'];

    /**
     * @var array Relations
     */

    public $belongsToMany = [
        'galleries' => ['Rebel59\Isogallery\Models\Gallery', 'table' => 'rebel59_isogallery_gally_cats']
    ];

}