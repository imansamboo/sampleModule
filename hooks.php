<?php
if (!defined('WHMCS'))
die('This file cannot be accessed directly');

use Illuminate\Database\Capsule\Manager as Capsule;

add_hook('InvoiceCreated', 1, function($vars) {
    Capsule::table('VA-main')->where('id', 1)->update([
        'user_id' => 1055
    ]);
});

/*
use WHMCS\Database\Capsule;
use WHMCS\View\Menu\Item as MenuItem;
use WHMCS\Module\Addon\AddonModule\Client\Models\VA;


add_hook('InvoiceCreated', 1, function($vars) {
// Rename all clients named "John Deo" to "John Doe" using an update statement.
    try {
        if(isset($_GET['financial']) && $_GET['financial'] ==1){
            $invoice = Capsule::table('tblinvoices')->where('id', '=', $vars['invoiceid'])->get();
            $tax = 0.09*$invoice[0]->subtotal;
            $updateInvoices = Capsule::table('tblinvoices')
                ->where('id', $vars['invoiceid'])
                ->update(
                    [
                        'tax' => $tax,
                        'total' => 100/9*$tax + $tax,
                    ]
                );

            $updateInvoiceIItems = Capsule::table('tblinvoiceitems')
                ->where('invoiceid', $vars['invoiceid'])
                ->update(
                    [
                        'taxed' => 1,
                    ]
                );
            $InvoiceIItems = Capsule::table('tblinvoiceitems')
                ->where('invoiceid', '=',$vars['invoiceid'])
                ->get();

            foreach ($InvoiceIItems as $InvoiceIItem){
                Capsule::table('tblinvoiceitems')
                    ->where('id', $InvoiceIItem->id)
                    ->update(
                        [
                            'amount' => 1.09*$InvoiceIItem->amount,
                        ]
                    );
            }


        }
        VA::create(array('company-id' => $_GET['companyId'], 'invoice-id' => $vars['invoiceid']));


    } catch (\Exception $e) {
        echo "I couldn't update client names. {$e->getMessage()}";
    }

});
add_hook('ClientAreaPrimaryNavbar', 1, function(MenuItem $primaryNavbar) {
    /** @var \WHMCS\View\Menu\Item $primaryNavbar */
/*$newMenu = $primaryNavbar->getChild('Billing');
if (is_null($newMenu)) {
    return;
}
$newMenu->addChild(
    'uniqueSubMenuItemName',
    array(
        'name' => 'VAInvoices',
        'label' => 'VAInvoices',
        'uri' => 'index.php?m=addonmodule',
        'order' => 10,
    )
);
});
*/
