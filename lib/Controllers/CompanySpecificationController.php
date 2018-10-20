<?php
/**
 * Created by PhpStorm.
 * User: iman
 * Date: 9/29/18
 * Time: 4:41 PM
 */

namespace WHMCS\Module\Addon\AddonModule\Controllers;

class CompanySpecificationController extends Controller
{
    protected $modelName = 'WHMCS\Module\Addon\AddonModule\Models\CompanySpecification';
    public function test($smarty)
    {



// create object




// Example assign variable

        $smarty->assign('name', 'george smith');



        $smarty->caching = false;



        $smarty->compile_dir = $GLOBALS['templates_compiledir'];




// display file from template folder within add-on folder

        $smarty->display(dirname(__FILE__) . '/../../templates/sample.tpl');
    }

}