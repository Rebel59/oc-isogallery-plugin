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
    protected $fillable = [];

    /**
     * @var array Relations
     */

}