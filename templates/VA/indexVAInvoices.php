

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
                <th>userid</th>
                <th>invoicenum</th>
                <th>date</th>
                <th>duedate</th>
                <th>datepaid</th>
                <th>last_capture_attempt</th>
                <th>subtotal</th>
                <th>credit</th>
                <th>tax</th>
                <th>tax2</th>
                <th>total</th>
                <th>taxrate</th>
                <th>taxrate2</th>
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
                <td>{$arg.tax2}</td>
                <td>{$arg.total}</td>
                <td>{$arg.taxrate}</td>
                <td>{$arg.taxrate2}</td>
                <td>{$arg.status}</td>
                <td>{$arg.paymentmethod}</td>
                <td>{$arg.notes}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>


