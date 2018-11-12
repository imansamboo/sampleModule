

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
            <div class="col-sm-8"><h2>Table <b>Invoices  with value added</b></h2></div>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>userid</th>
            <th>invoicenum</th>
            <th>date</th>
            <th>duedate</th>
            <th>datepaid</th>
            <th>last_capture_attempt</th>
            <th>subtotal</th>
            <th>credit</th>
            <th>tax</th>
            <th>total</th>
            <th>status</th>
            <th>paymentmethod</th>
            <th>notes</th>
        </tr>
        </thead>
        <tbody>
        {foreach $args as $key => $arg}
        <tr>
            <td>{$key + 1}</td>
            <td>{$arg.userid}</td>
            <td>{$arg.invoicenum}</td>
            <td>{$arg.date}</td>
            <td>{$arg.duedate}</td>
            <td>{$arg.datepaid}</td>
            <td>{$arg.last_capture_attempt}</td>
            <td>{$arg.subtotal}</td>
            <td>{$arg.credit}</td>
            <td>{$arg.tax}</td>
            <td>{$arg.total}</td>
            <td>{$arg.status}</td>
            <td>{$arg.paymentmethod}</td>
            <td>{$arg.notes}</td>
        </tr>
        {/foreach}
        </tbody>
    </table>
</div>


