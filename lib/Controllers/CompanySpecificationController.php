<?php
/**
 * Created by PhpStorm.
 * User: iman
 * Date: 9/29/18
 * Time: 4:41 PM
 */

namespace WHMCS\Module\Addon\AddonModule\Controllers;
use WHMCS\Database\Capsule as Capsule;

class CompanySpecificationController extends Controller
{
    protected $modelName = 'WHMCS\Module\Addon\AddonModule\Models\CompanySpecification';

    public function create($smarty)
    {
        $users = Capsule::table('tblclients')->get();
        $this->template($smarty,__FUNCTION__.'.php', $users);
    }

}