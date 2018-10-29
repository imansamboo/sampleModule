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
                <tr><th>user ID</th><td>{$args.user_id}</td></tr>
                <tr><th>product Type</th><td>{$args.product_type}</td></tr>
                <tr><th>product ID</th><td>{$args.product_id}</td></tr>
                <tr><th>company ID</th><td>{$args.company_id}</td></tr>
                <tr><th>factor ID</th><td>{$args.factor_id}</td></tr>
            </tbody>
        </table>
    </div>
</div>

