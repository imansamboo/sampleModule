<?php
/**
 * Created by PhpStorm.
 * User: iman
 * Date: 9/29/18
 * Time: 4:41 PM
 */

namespace WHMCS\Module\Addon\AddonModule\Client\Controllers;
use WHMCS\Module\Addon\AddonModule\Models\Invoice;


class VAController extends Controller
{
    protected $modelName = 'WHMCS\Module\Addon\AddonModule\Client\Models\VA';

    /**
     * @param $smarty
     */
    public function indexInvoices($smarty)
    {
        $model = new Invoice();
        $this->template($smarty, __FUNCTION__ .'.php' ,  $model->where('userid', '=', $_SESSION['uid'])->get());
    }

    /**
     * @param $smarty
     */
    public function indexVAInvoices($smarty)
    {
        $model = new Invoice();
        $this->template($smarty, __FUNCTION__ .'.php' ,  $model->where('tax' ,'>', 0)->where('userid', '=', $_SESSION['uid'])->get());
    }

    /**
     * @param $smarty
     */
    public function indexNVAInvoices($smarty)
    {
        $model = new Invoice();
        $this->template($smarty, __FUNCTION__ .'.php' ,  $model->where('tax' ,'=', 0)->where('userid', '=', $_SESSION['uid'])->get());
    }
}