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
    <h2>Enter <b>Invoice Specification</b></h2>
    <form action="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VA&action=store" method="post">
        <div class="row" style="padding: 1%">
            <div class="col-lg-6">
                <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">user ID</button>
      </span>
                    <input required name="user_id" type = "text" class="form-control" placeholder="Enter username">
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">product Type</button>
      </span>
                    <input required name="product_type" type="text" class="form-control" placeholder="Enter product Type">
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->


        </div><!-- /.row -->
        <div class="input-group"  style="padding: 1%">
            <span class="input-group-addon" id="basic-addon1">product ID</span>
            <input required type="text" class="form-control" placeholder="product ID" aria-describedby="basic-addon1" name="product_id"   >     </div>
        <div class="row" style="padding: 1%">
            <div class="col-lg-6">
                <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">company ID</button>
      </span>
                    <input required name="company_id" type="text" class="form-control" placeholder="Enter company ID">
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">factor ID</button>
      </span>
                    <input required name="factor_id" type="text" class="form-control" placeholder="Enter factor ID">
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="row">
                <div class="col-lg-6">
                </div>
                <div class="col-lg-6" style="padding-top: 15px;">
                    <button class="btn btn-primary right" style="float: right; margin-right: 10%;">submit</button>
                </div>
            </div>
        </div>
    </form>


</div>


