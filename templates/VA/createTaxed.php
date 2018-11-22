<div class="container" style="width: 1000px">
    <nav class="navbar " style="background:#1A4D80;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false"> <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <ul class="nav navbar-nav">
                    <li  class="active"><a style="color: white; font-weight: bold" href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VAFactor">Invoices File</a></li>
                    <li  class=""><a style="color: white; font-weight: bold" href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=CompanySpecification">Company Specification</a></li>
                    <li ><a style="color: white; font-weight: bold" href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VA&action=indexInvoices">Invoices</a></li>
                    <li ><a style="color: white; font-weight: bold" href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VA&action=indexVAInvoices">Value Added Invoices</a></li>
                    <li ><a style="color: white; font-weight: bold" href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VA&action=indexNVAInvoices">NON-Value Added Invoices</a></li>                </ul>
            </div>
        </div>
    </nav>
    <h2>Assign <b>Tax</b></h2>
    <form action="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VA&action=storeTaxed" method="post">
        <div class="row" style="padding: 1%">
            <input type="hidden" name="invoice_id" value="{$args.invoice.id}">
            <div class="col-lg-6">
                <div class="input-group">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">select your Company ID</button>
                  </span>

                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
                <select name="company_id" style="width:300px;padding-left: -30%;">
                    {foreach $args.companys as $key => $arg}
                    <option value="{$arg.id}">
                        {$arg.name}
                    </option>
                    {/foreach}
                </select>
        </div><!-- /.row -->
            <div class="row">

                <div class="col-lg-6" style="padding-top: 15px;">
                    <button class="btn btn-primary right" style="float: right; margin-right: 10%;">submit</button>
                </div>
            </div>
        </div>
    </form>


</div>


