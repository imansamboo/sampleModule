<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<!--header end-->

        <div class="container"  style="width: 1000px">
            <nav class="navbar " style="background:#1A4D80;">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false"> <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <ul class="nav navbar-nav">
                            <li  class="active"><a style="color: white; font-weight: bold" href="http://localhost/whmcs/index.php?m=addonmodule&controller=VAFactor">Invoices File</a></li>
                            <li  class=""><a style="color: white; font-weight: bold" href="http://localhost/whmcs/index.php?m=addonmodule&controller=CompanySpecification">Company Specification</a></li>
                            <li ><a style="color: white; font-weight: bold" href="http://localhost/whmcs/index.php?m=addonmodule&controller=VA">Value Added</a></li>
                            <li ><a style="color: white; font-weight: bold" href="http://localhost/whmcs/index.php?m=addonmodule&controller=VA&action=indexInvoices">Invoices</a></li>
                            <li ><a style="color: white; font-weight: bold" href="http://localhost/whmcs/index.php?m=addonmodule&controller=VA&action=indexVAInvoices">Value Added Invoices</a></li>
                            <li ><a style="color: white; font-weight: bold" href="http://localhost/whmcs/index.php?m=addonmodule&controller=VA&action=indexNVAInvoices">NON-Value Added Invoices</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <h2>Enter <b>Company Specification</b></h2>
            <form action="http://localhost/whmcs/index.php?m=addonmodule&controller=CompanySpecification&action=update&id={$args.id}" method="post">
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
                        <button class="btn btn-primary right" style="float: right; margin-right: 10%;">submit</button>
                    </div>
                </div>
            </form>
        </div>


<!--top of footer-->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>