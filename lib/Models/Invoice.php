<?php
/**
 * Created by PhpStorm.
 * User: iman
 * Date: 9/23/18
 * Time: 3:41 PM
 */

namespace WHMCS\Module\Addon\AddonModule\Models;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tblinvoices';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userid',
        'invoicenum',
        'date',
        'duedate',
        'datepaid',
        'last_capture_attempt',
        'subtotal',
        'credit',
        'tax',
        'tax2',
        'total',
        'taxrate',
        'taxrate2',
        'status',
        'paymentmethod',
        'notes'
    ];

    /**
     * @return mixed
     */
    public function va()
    {
        return $this->hasOne(VA::class,   'invoice-id', 'id');
    }

}