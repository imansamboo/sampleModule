

        <div class="container"  style="width: 1000px">
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
                            <li ><a style="color: white; font-weight: bold" href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VA&action=indexNVAInvoices">NON-Value Added Invoices</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <h2>Enter <b>Company Specification</b></h2>
            <form action="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=CompanySpecification&action=update&id={$args.id}" method="post">
                <div class="row" style="padding: 1%">
                    <div class="col-lg-6">
                        <div class="input-group">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">username</button>
              </span>
                            <input value="{$args.user_id}" required name="user_id" type="text" class="form-control" placeholder="Enter user_id">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="input-group">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Registration Number</button>
              </span>
                            <input value="{$args.registration_number}" required name="registration_number" type="text" class="form-control" placeholder="Enter Registration Number">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->


                </div><!-- /.row -->
                <div class="row" style="padding: 1%">
                    <div class="col-lg-6">
                        <div class="input-group">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">name</button>
              </span>
                            <input value="{$args.name}" required name="name" type="text" class="form-control" placeholder="Enter name">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="input-group"  style="padding: 1%">
                    <span class="input-group-addon" id="basic-addon1">Address</span>
                    <input value="{$args.address}" required  name="address" type="text" class="form-control" placeholder="Address" aria-describedby="basic-addon1" >
                </div>
                <div class="row" style="padding: 1%">
                    <div class="col-lg-6">
                        <div class="input-group">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Economical Number</button>
              </span>
                            <input value="{$args.economical_number}" required name="economical_number" type="text" class="form-control" placeholder="Enter Economical Number">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="input-group">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Visibility</button>
              </span>
                            <input value="{$args.visibility}" required name="visibility" type="text" class="form-control" placeholder="Enter Visibility">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <button class="btn btn-primary right" style="float: right; margin-right: 10%;">submit</button>
                    </div>
                </div>
            </form>
        </div>


