

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
            <div class="col-sm-8"><h2>Table <b>Invoices File</b></h2></div>
            <div class="col-sm-4" style="padding-top: 0px;padding-left: 91%;">
                <a href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VAFactor&action=create"><button type="button" class="btn btn-info"><i></i> Add New</button></a>
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
                    <a href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VAFactor&action=show&id={$arg.id}" class="add" title="" data-toggle="tooltip" data-original-title="Add"><span class="glyphicon glyphicon-eye-open" style="color:greenyellow"></span></a>
                    <a href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VAFactor&action=edit&id={$arg.id}" class="edit" title="" data-toggle="tooltip" data-original-title="Edit"><span class="glyphicon glyphicon-pencil" style="color: darkorange"></span></a>
                    <a href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VAFactor&action=destroy&id={$arg.id}" class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><span class="glyphicon glyphicon-trash" style="color: red"></span></a>
                    <a href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=VAFactor&action=download&id={$arg.id}" target="_blank" class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><span class="glyphicon glyphicon-download-alt" style="color: cornflowerblue"></span></a>
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>


