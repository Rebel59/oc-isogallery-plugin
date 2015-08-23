<?php namespace Rebel59\Isogallery\Models;

use Model;

/**
 * gallery Model
 */
class Gallery extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'rebel59_isogallery_galleries';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['category_id', 'title', 'url'];

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'category' => ['Rebel59\IsoGallery\Models\Category'],
    ];
    public $attachMany = [
        'photos' => ['System\Models\File', 'order' => 'sort_order'],
    ];

}