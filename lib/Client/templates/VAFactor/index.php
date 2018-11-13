<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
</head>
<body>
<!--header end-->

<div class="container" style="width: 1000px">
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
                    <li ><a style="color: white; font-weight: bold" href="http://localhost/whmcs/index.php?m=addonmodule&controller=VA&action=indexNVAInvoices">NON-Value Added Invoices</a></li>                </ul>
            </div>
        </div>
    </nav>
    <div class="table-title">
        <div class="row">
            <div class="col-sm-8"><h2>Table <b>Invoices File</b></h2></div>
            <div class="col-sm-4" style="padding-top: 0px;padding-left: 91%;">
                <a href="http://localhost/whmcs/index.php?m=addonmodule&controller=VAFactor&action=create"><button type="button" class="btn btn-info"><i></i> Add New</button></a>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>User ID</th>
                <th>Company ID</th>
            </tr>
        </thead>
        <tbody>
        {foreach $args as $key => $arg}
            <tr>
                <td>{$key + 1}</td>
                <td>{$arg.name}</td>
                <td>{$arg.user_id}</td>
                <td>{$arg.company_id}</td>
                <td>
                    <a href="http://localhost/whmcs/index.php?m=addonmodule&controller=VAFactor&action=show&id={$arg.id}" class="add" title="" data-toggle="tooltip" data-original-title="Add"><span class="glyphicon glyphicon-eye-open" style="color:greenyellow"></span></a>
                    <a href="http://localhost/whmcs/index.php?m=addonmodule&controller=VAFactor&action=edit&id={$arg.id}" class="edit" title="" data-toggle="tooltip" data-original-title="Edit"><span class="glyphicon glyphicon-pencil" style="color: darkorange"></span></a>
                    <a href="http://localhost/whmcs/index.php?m=addonmodule&controller=VAFactor&action=destroy&id={$arg.id}" class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><span class="glyphicon glyphicon-trash" style="color: red"></span></a>
                    <a href="http://localhost/whmcs/index.php?m=addonmodule&controller=VAFactor&action=download&id={$arg.id}" target="_blank" class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><span class="glyphicon glyphicon-download-alt" style="color: cornflowerblue"></span></a>
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>

<!--top of footer-->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
