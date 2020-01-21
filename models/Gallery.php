<?php namespace Rebel59\Isogallery\Models;

use Model;


/**
 * gallery Model
 */
class Gallery extends Model
{

    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\Validation;

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
    protected $fillable = ['title', 'url'];

    /**
     * @var array Relations
     */
    public $belongsToMany = [
        'categories' => ['Rebel59\Isogallery\Models\Category','table' => 'rebel59_isogallery_gally_cats', 'order' => 'title'],
    ];
    public $attachMany = [
        'photos' => ['System\Models\File', 'order' => 'sort_order'],
    ];
    

    public $rules = [
        'title'                  => 'required',
        'url'                 => 'required',
        'photos'    => 'required'
    ];
    public $customMessages = [
        'required' => 'The :attribute field is required.'
    ];

}