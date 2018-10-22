<?php
/**
 * WHMCS SDK Sample Addon Module
 *
 * An addon module allows you to add additional functionality to WHMCS. It
 * can provide both client and admin facing user interfaces, as well as
 * utilise hook functionality within WHMCS.
 *
 * This sample file demonstrates how an addon module for WHMCS should be
 * structured and exercises all supported functionality.
 *
 * Addon Modules are stored in the /modules/addons/ directory. The module
 * name you choose must be unique, and should be all lowercase, containing
 * only letters & numbers, always starting with a letter.
 *
 * Within the module itself, all functions must be prefixed with the module
 * filename, followed by an underscore, and then the function name. For this
 * example file, the filename is "addonmodule" and therefore all functions
 * begin "addonmodule_".
 *
 * For more information, please refer to the online documentation.
 *
 * @see https://developers.whmcs.com/addon-modules/
 *
 * @copyright Copyright (c) WHMCS Limited 2017
 * @license http://www.whmcs.com/license/ WHMCS Eula
 */



/*require_once "/var/www/html/whmcs/vendor/smarty/smarty/libs/Smarty.class.php";*/

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

// Require any libraries needed for the module to function.
// require_once __DIR__ . '/path/to/library/loader.php';
//
// Also, perform any initialization required by the service's library.
use WHMCS\Module\Addon\AddonModule\Controllers\Iman;
use WHMCS\Module\Addon\AddonModule\Admin\AdminDispatcher;
use WHMCS\Module\Addon\AddonModule\Client\ClientDispatcher;

/**
 * Define addon module configuration parameters.
 *
 * Includes a number of required system fields including name, description,
 * author, language and version.
 *
 * Also allows you to define any configuration parameters that should be
 * presented to the user when activating and configuring the module. These
 * values are then made available in all module function calls.
 *
 * Examples of each and their possible configuration parameters are provided in
 * the fields parameter below.
 *
 * @return array
 */
function addonmodule_config()
{
    return array(
        'name' => 'Addon Module Sample', // Display name for your module
        'description' => 'This module provides an example WHMCS Addon Module which can be used as a basis for building a custom addon module.', // Description displayed within the admin interface
        'author' => 'Your name goes here', // Module author name
        'language' => 'english', // Default language
        'version' => '1.0', // Version number
        'fields' => array(
            // a text field type allows for single line text input
            'Text Field Name' => array(
                'FriendlyName' => 'Text Field Name',
                'Type' => 'text',
                'Size' => '25',
                'Default' => 'Default value',
                'Description' => 'Description goes here',
            ),
            // a password field type allows for masked text input
            'Password Field Name' => array(
                'FriendlyName' => 'Password Field Name',
                'Type' => 'password',
                'Size' => '25',
                'Default' => '',
                'Description' => 'Enter secret value here',
            ),
            // the yesno field type displays a single checkbox option
            'Checkbox Field Name' => array(
                'FriendlyName' => 'Checkbox Field Name',
                'Type' => 'yesno',
                'Description' => 'Tick to enable',
            ),
            // the dropdown field type renders a select menu of options
            'Dropdown Field Name' => array(
                'FriendlyName' => 'Dropdown Field Name',
                'Type' => 'dropdown',
                'Options' => array(
                    'option1' => 'Display Value 1',
                    'option2' => 'Second Option',
                    'option3' => 'Another Option',
                ),
                'Description' => 'Choose one',
            ),
            // the radio field type displays a series of radio button options
            'Radio Field Name' => array(
                'FriendlyName' => 'Radio Field Name',
                'Type' => 'radio',
                'Options' => 'First Option,Second Option,Third Option',
                'Description' => 'Choose your option!',
            ),
            // the textarea field type allows for multi-line text input
            'Textarea Field Name' => array(
                'FriendlyName' => 'Textarea Field Name',
                'Type' => 'textarea',
                'Rows' => '3',
                'Cols' => '60',
                'Description' => 'Freeform multi-line text input field',
            ),
        )
    );
}

/**
 * Activate.
 *
 * Called upon activation of the module for the first time.
 * Use this function to perform any database and schema modifications
 * required by your module.
 *
 * This function is optional.
 *
 * @return array Optional success/failure message
 */
function addonmodule_activate()
{
    // Create custom tables and schema required by your module
    //create VA table
    $query = "CREATE TABLE `whmcs`.`VA-main` ( `id` INT NOT NULL AUTO_INCREMENT ,`user_id` INT NOT NULL ,  `product_type` VARCHAR(255) NOT NULL , `product_id` INT NOT NULL , `company_id` INT NOT NULL , `factor_id` INT NOT NULL , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    full_query($query);

    //create company specification table
    $query = "CREATE TABLE `whmcs`.`VA-company-specification` ( `id` INT NOT NULL AUTO_INCREMENT , `user_id` INT NOT NULL , `address` TEXT NOT NULL , `economical_number` INT NOT NULL , `registration_number` INT NOT NULL , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    full_query($query);

    //create factor  table
    $query = "CREATE TABLE `whmcs`.`VA-factor` ( `id` INT NOT NULL AUTO_INCREMENT , `user_id` INT NOT NULL ,  `company_id` INT NOT NULL , `name` VARCHAR(255) NOT NULL , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB; ";
    full_query($query);


    return array(
        'status' => 'success', // Supported values here include: success, error or info
        'description' => 'Value added system waked up',
    );
}

/**
 * Deactivate.
 *
 * Called upon deactivation of the module.
 * Use this function to undo any database and schema modifications
 * performed by your module.
 *
 * This function is optional.
 *
 * @return array Optional success/failure message
 */
function addonmodule_deactivate()
{
    // Undo any database and schema modifications made by your module here
    $query = "DROP TABLE `VA-main`";
    full_query($query);

    $query = "DROP TABLE `VA-company-specification`";
    full_query($query);

    $query = "DROP TABLE `VA-factor`";
    full_query($query);

    return array(
        'status' => 'success', // Supported values here include: success, error or info
        'description' => 'Value added system slept.',
    );
}

/**
 * Upgrade.
 *
 * Called the first time the module is accessed following an update.
 * Use this function to perform any required database and schema modifications.
 *
 * This function is optional.
 *
 * @return void
 */
function addonmodule_upgrade($vars)
{

}
function addonmodule_output($vars)
{

    $twig = new WHMCS\Module\Addon\AddonModule\Controllers\CompanySpecificationController();
    if(isset($_GET['controller'])){
        $controller = 'WHMCS\Module\Addon\AddonModule\Controllers'. "\\". $_GET['controller'];
    }else{
        $controller = 'WHMCS\Module\Addon\AddonModule\Controllers\CompanySpecification';
    }
    $controller .= 'Controller';
    try {
        $controller = new $controller;
    }
//catch exception
    catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }
    if(isset($_GET['action']) && $_GET['action'] == 'store') {
        echo '<pre>';
        print_r(array_diff_key($_POST,array('token'=>rand())));
        echo '</pre>';
        exit();
        $controller->store(array_diff_key($_POST,array('token'=>rand()))) ;
    }elseif (isset($_GET['action']) && $_GET['action'] == 'update' && isset($_GET['id'])) {
        $controller->update($_POST, $_GET['id']) ;
    }elseif (isset($_GET['action']) && $_GET['action'] == 'destroy' && isset($_GET['id'])) {
        $controller->destroy( $_GET['id']) ;
    }elseif (isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['id'])) {
        $controller->edit(new Smarty, $_GET['id']) ;
    }elseif (isset($_GET['action']) && $_GET['action'] == 'show' && isset($_GET['id'])) {
        $controller->show(new Smarty, $_GET['id']) ;
    }elseif (isset($_GET['action']) && $_GET['action'] == 'create') {
        $controller->create(new Smarty ) ;
    }elseif (isset($_GET['action']) && $_GET['action'] == 'download') {
        $controller->download( $_GET['id']) ;
    }else{
        $controller->index(new Smarty);
    }
    // Get common module parameters
   /* $modulelink = $vars['modulelink']; // eg. addonmodules.php?module=addonmodule
    $version = $vars['version']; // eg. 1.0
    $_lang = $vars['_lang']; // an array of the currently loaded language variables

    // Get module configuration parameters
    $configTextField = $vars['Text Field Name'];
    $configPasswordField = $vars['Password Field Name'];
    $configCheckboxField = $vars['Checkbox Field Name'];
    $configDropdownField = $vars['Dropdown Field Name'];
    $configRadioField = $vars['Radio Field Name'];
    $configTextareaField = $vars['Textarea Field Name'];

    // Dispatch and handle request here. What follows is a demonstration of one
    // possible way of handling this using a very basic dispatcher implementation.

    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
    //new Iman();

    $twig = new WHMCS\Module\Addon\AddonModule\Controllers\CompanySpecificationController();
    $twig->test();*/
    /*echo '<pre>';
    print_r(WHMCS\Module\Addon\AddonModule\Models\CompanySpecification::all());
    echo '</pre>';*/
    /*$dispatcher = new AdminDispatcher();
    $response = $dispatcher->dispatch($action, $vars);
    echo $response;*/

}

/**
 * Admin Area Sidebar Output.
 *
 * Used to render output in the admin area sidebar.
 * This function is optional.
 *
 * @param array $vars
 *
 * @return string
 */
function addonmodule_sidebar($vars)
{
    // Get common module parameters
    $modulelink = $vars['modulelink'];
    $version = $vars['version'];
    $_lang = $vars['_lang'];

    // Get module configuration parameters
    $configTextField = $vars['Text Field Name'];
    $configPasswordField = $vars['Password Field Name'];
    $configCheckboxField = $vars['Checkbox Field Name'];
    $configDropdownField = $vars['Dropdown Field Name'];
    $configRadioField = $vars['Radio Field Name'];
    $configTextareaField = $vars['Textarea Field Name'];

    $sidebar = '<p>Sidebar output HTML goes here</p>';
    return $sidebar;
}

/**
 * Client Area Output.
 *
 * Called when the addon module is accessed via the client area.
 * Should return an array of output parameters.
 *
 * This function is optional.
 *
 * @see AddonModule\Client\Controller@index
 *
 * @return array
 */
function addonmodule_clientarea($vars)
{
    // Get common module parameters
    $modulelink = $vars['modulelink']; // eg. index.php?m=addonmodule
    $version = $vars['version']; // eg. 1.0
    $_lang = $vars['_lang']; // an array of the currently loaded language variables

    // Get module configuration parameters
    $configTextField = $vars['Text Field Name'];
    $configPasswordField = $vars['Password Field Name'];
    $configCheckboxField = $vars['Checkbox Field Name'];
    $configDropdownField = $vars['Dropdown Field Name'];
    $configRadioField = $vars['Radio Field Name'];
    $configTextareaField = $vars['Textarea Field Name'];

    // Dispatch and handle request here. What follows is a demonstration of one
    // possible way of handling this using a very basic dispatcher implementation.

    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

    $dispatcher = new ClientDispatcher();
    return $dispatcher->dispatch($action, $vars);
}
