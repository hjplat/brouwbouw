<?php namespace Hjp\Brouwerbouwer\Models;

use Model;

/**
 * Model
 */
class MashScheme extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'hjp_brouwerbouwer_mash_scheme';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasOne =[ 
        'recipe' => [
            'Hjp\Brouwerbouwer\Models\Recipes',            
            'key' => 'id',
            'otherKey'=>'recipe_id'
        ],
    ];
   
}
