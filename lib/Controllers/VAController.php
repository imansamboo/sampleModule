<?php
/**
 * Created by PhpStorm.
 * User: iman
 * Date: 9/29/18
 * Time: 4:41 PM
 */

namespace WHMCS\Module\Addon\AddonModule\Controllers;
use WHMCS\Module\Addon\AddonModule\Models\Invoice;
use WHMCS\Module\Addon\AddonModule\Models\CompanySpecification;
use WHMCS\Database\Capsule as Capsule;


class VAController extends Controller
{
    protected $modelName = 'WHMCS\Module\Addon\AddonModule\Models\VA';

    /**
     * @param $smarty
     */
    public function indexInvoices($smarty)
    {
        $model = new Invoice();
        $this->template($smarty, __FUNCTION__ .'.php' ,  $model->all());
    }

    /**
     * @param $smarty
     */
    public function indexVAInvoices($smarty)
    {
        $model = new Invoice();
        $this->template($smarty, __FUNCTION__ .'.php' ,  $model->where('tax' ,'>', 0)->get());
    }

    /**
     * @param $smarty
     */
    public function indexNVAInvoices($smarty)
    {
        $model = new Invoice();
        $this->template($smarty, __FUNCTION__ .'.php' ,  $model->where('tax' ,'=', 0)->get());
    }

    public function showNVAInvoices($smarty, $id)
    {
        $factor = Invoice::findOrFail($id);
        $this->template($smarty, __FUNCTION__.'.php',$factor );
    }

    /**
     * @param $smarty
     * @param $id
     */
    public function createTaxed($smarty, $id)
    {
        $invoice = Invoice::findOrFail($id);
        $companys = CompanySpecification::where('user_id', '=', $invoice->userid)->get();
        $factor = array(
            'invoice' => $invoice,
            'companys' => $companys,
        );
        $this->template($smarty,__FUNCTION__.'.php',$factor);
    }

    /**
     * @param $smarty
     * @param $invoiceId
     */
    public function storeTaxed($smarty, $invoiceId, $companyId)
    {
        $invoice = Invoice::findOrFail($invoiceId);
        $oldTotal = $invoice->total;
        if($invoice->tax != 0) {
            return $this->indexInvoices($smarty);
        }
        Capsule::table('tblinvoices')
            ->where('id', $invoiceId)
            ->update(
                [
                    'tax' => 0.09*$oldTotal,
                    'total' => 1.09*$oldTotal,
                ]
            );
        Capsule::table('tblinvoiceitems')
            ->where('invoiceid', $invoiceId)
            ->update(
                [
                    'taxed' => 1,
                ]
            );

        $InvoiceItems = Capsule::table('tblinvoiceitems')
            ->where('invoiceid', '=',$invoiceId)
            ->get();

        foreach ($InvoiceItems as $InvoiceItem){
            Capsule::table('tblinvoiceitems')
                ->where('id', $InvoiceItem->id)
                ->update(
                    [
                        'amount' => 1.09*$InvoiceItem->amount,
                    ]
                );
        }
        ($this->modelName)::create(
            array(
                'company-id' => $companyId,
                'invoice-id' => $invoiceId,
            )
        );


        return $this->indexNVAInvoices($smarty);
    }
}