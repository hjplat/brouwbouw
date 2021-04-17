<?php namespace Hjp\Brouwerbouwer\Models;

use Model;

/**
 * Model
 */
class Gear extends Model
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
    public $table = 'hjp_brouwerbouwer_brewing_gear';

    public $belongsTo =[  
        'waterprofile' => [
            'Hjp\Brouwerbouwer\Models\WaterProfiles',            
            'key' => 'waterprofile_id',
            'otherKey'=>'id'
        ],    
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
