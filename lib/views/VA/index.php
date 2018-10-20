<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="table-title">
        <div class="row">
            <div class="col-sm-8"><h2>Table <b>Bought Items</b></h2></div>
            <div class="col-sm-4" style="padding-top: 0px;padding-left: 91%;">
                <a href="http://localhost:2001?controller=VA&action=create"><button type="button" class="btn btn-info"><i></i> Add New</button></a>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>user Id</th>
                <th>product Type</th>
                <th>product Id</th>
                <th>company Id</th>
                <th>factor Id</th>
            </tr>
        </thead>
        <tbody>
        {% for key,arg in args %}
            <tr>
                <td>{{key + 1}}</td>
                <td>{{arg.user_id}}</td>
                <td>{{arg.product_type}}</td>
                <td>{{arg.product_id}}</td>
                <td>{{arg.company_id}}</td>
                <td>{{arg.factor_id}}</td>
                <td>
                    <a href="http://localhost:2001?controller=VA&action=show&id={{arg.id}}" class="add" title="" data-toggle="tooltip" data-original-title="Add"><span class="glyphicon glyphicon-eye-open" style="color:greenyellow"></span></a>
                    <a href="http://localhost:2001?controller=VA&action=edit&id={{arg.id}}" class="edit" title="" data-toggle="tooltip" data-original-title="Edit"><span class="glyphicon glyphicon-pencil" style="color: darkorange"></span></a>
                    <a href="http://localhost:2001?controller=VA&action=destroy&id={{arg.id}}" class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><span class="glyphicon glyphicon-trash" style="color: red"></span></a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>

</body>
</html>
