<?php

/**
 * Created by PhpStorm.
 * User: iman
 * Date: 9/23/18
 * Time: 3:41 PM
 */
namespace WHMCS\Module\Addon\AddonModule\Models;
use Illuminate\Database\Eloquent\Model;

class VA extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'VA-main';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that  be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','product_type', 'product_id', 'company_id', 'factor_id'];
}