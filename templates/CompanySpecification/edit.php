

        <div class="container"  style="width: 1000px">
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


