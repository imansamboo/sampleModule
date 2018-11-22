

<div class="container" style="width: 1000px">
    <nav class="navbar " style="background:#1A4D80;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false"> <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <ul class="nav navbar-nav">
                    <li  class="active"><a style="color: white; font-weight: bold" href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VAFactor">Invoices File</a></li>
                    <li  class=""><a style="color: white; font-weight: bold" href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=CompanySpecification">Company Specification</a></li>
                    <li ><a style="color: white; font-weight: bold" href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VA">Value Added</a></li>
                    <li ><a style="color: white; font-weight: bold" href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VA&action=indexInvoices">Invoices</a></li>
                    <li ><a style="color: white; font-weight: bold" href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VA&action=indexVAInvoices">Value Added Invoices</a></li>
                    <li ><a style="color: white; font-weight: bold" href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VA&action=indexNVAInvoices">NON-Value Added Invoices</a></li>                </ul>
            </div>
        </div>
    </nav>
    <div class="table-title">
        <div class="row">
            <div class="col-sm-8"><h2>Table <b>Bought Items</b></h2></div>
            <div class="col-sm-4" style="padding-top: 0px;padding-left: 91%;">
                <a href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VA&action=create"><button type="button" class="btn btn-info"><i></i> Add New</button></a>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>id</th>
                <th>invoice-id</th>
                <th>company-id</th>
                <th>invoice subtotal</th>
                <th>invoice tax</th>
                <th>invoice total</th>
                <th>company address</th>
                <th>company name</th>
            </tr>
        </thead>
        <tbody>
        {foreach $args as $key => $arg}
            <tr>
                <td>{$key + 1}</td>
                <td>{$arg.id}</td>
                <td>{$arg.invoice-id}</td>
                <td>{$arg.company-id}</td>
                <td>{$arg.invoice.subtotal}</td>
                <td>{$arg.invoice.tax}</td>
                <td>{$arg.invoice.total}</td>
                <td>{$arg.company.address}</td>
                <td>{$arg.company.name}</td>
                <td>
                    <a href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VA&action=show&id={$arg.id}" class="add" title="" data-toggle="tooltip" data-original-title="Add"><span class="glyphicon glyphicon-eye-open" style="color:greenyellow"></span></a>
                    <a href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VA&action=edit&id={$arg.id}" class="edit" title="" data-toggle="tooltip" data-original-title="Edit"><span class="glyphicon glyphicon-pencil" style="color: darkorange"></span></a>
                    <a href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VA&action=destroy&id={$arg.id}" class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><span class="glyphicon glyphicon-trash" style="color: red"></span></a>
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>


