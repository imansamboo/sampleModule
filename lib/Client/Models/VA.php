<?php

/**
 * Created by PhpStorm.
 * User: iman
 * Date: 9/23/18
 * Time: 3:41 PM
 */
namespace WHMCS\Module\Addon\AddonModule\Client\Models;
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
    protected $fillable = ['invoice-id', 'company-id'];

    /**
     * @return mixed
     */
    public function invoice()
    {
        return $this->belongsTo(Invoice::class,'id', 'invoice-id');
    }

    /**
     * @return mixed
     */
    public function company()
    {
        return $this->belongsTo(CompanySpecification::class, 'company-id', 'id');
    }
}