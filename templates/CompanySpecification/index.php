
<div class="container" style="width: 1000px">
    <div class="table-title">
        <div class="row">
            <div class="col-sm-8"><h2>Table <b>Company Specification</b></h2></div>
            <div class="col-sm-4" style="padding-top: 0px;padding-left: 91%;">
                <a href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=CompanySpecification&action=create"><button type="button" class="btn btn-info"><i></i> Add New</button></a>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>userID</th>
                <th>Address</th>
                <th>Economical Number</th>
                <th>Registration Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {foreach $args as $key => $arg}
                <tr>
                    <td>{$key +1}</td>
                    <td>{$arg.user_id}</td>
                    <td>{$arg.address}</td>
                    <td>{$arg.economical_number}</td>
                    <td>{$arg.registration_number}</td>
                    <td>

                        <a href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=CompanySpecification&action=show&id={$arg.id}" class="add" title="" data-toggle="tooltip" data-original-title="Add"><span class="glyphicon glyphicon-eye-open" style="color:greenyellow"></span></a>
                        <a href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=CompanySpecification&action=edit&id={$arg.id}" class="edit" title="" data-toggle="tooltip" data-original-title="Edit"><span class="glyphicon glyphicon-pencil" style="color: darkorange"></span></a>
                        <a href="http://localhost/whmcs/admin/addonmodules.php?module=addonmodule&controller=CompanySpecification&action=destroy&id={$arg.id}" class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><span class="glyphicon glyphicon-trash" style="color: red"></span></a>

                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>

