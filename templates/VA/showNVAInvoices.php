
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
                </ul>
            </div>
        </div>
    </nav>
    <div class="connection-view">


        <table id="w0" class="table table-striped table-bordered detail-view"><tbody><tr><th>ID</th><td>2</td></tr>
            <tr><th>userid</th><td>{$args.userid}</td></tr>
            <tr><th>invoicenum</th><td>{$args.invoicenum}</td></tr>
            <tr><th>date</th><td>{$args.date}</td></tr>
            <tr><th>duedate</th><td>{$args.duedate}</td></tr>
            <tr><th>datepaid</th><td>{$args.datepaid}</td></tr>
            <tr><th>last_capture_attempt</th><td>{$args.last_capture_attempt}</td></tr>
            <tr><th>subtotal</th><td>{$args.subtotal}</td></tr>
            <tr><th>credit</th><td>{$args.credit}</td></tr>
            <tr><th>tax</th><td>{$args.tax}</td></tr>
            <tr><th>total</th><td>{$args.total}</td></tr>
            <tr><th>status</th><td>{$args.status}</td></tr>
            <tr><th>paymentmethod</th><td>{$args.paymentmethod}</td></tr>
            <tr><th>makeTaxed</th><td><a href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VA&action=createTaxed&id={$args.id}">click to taxed it</a></td></tr>
            </tbody>
        </table>
    </div>
</div>
