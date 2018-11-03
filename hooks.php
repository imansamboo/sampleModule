<?php
if (!defined('WHMCS'))
die('This file cannot be accessed directly');

use Illuminate\Database\Capsule\Manager as Capsule;

add_hook('InvoiceCreated', 1, function($vars) {
    Capsule::table('VA-main')->where('id', 1)->update([
        'user_id' => 1055
    ]);
});