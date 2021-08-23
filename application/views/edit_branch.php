<section class="content">
      <div class="container-fluid">
          <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Update Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="<?php echo base_url()?>update_b" method="post" id="Formuser1">
                  <input type="hidden" name="id" value="<?php echo $get_branchdetails->id;?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Branch Name</label>
                    <div class="col-sm-6">
                        <input type="text" name="bname" class="form-control" value="<?php echo $get_branchdetails->branch_name;?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Branch ID</label>
                    <div class="col-sm-6">
                        <input name="bid" type="text" class="form-control" value="<?php echo $get_branchdetails->branch_id;?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-8">
                        <button style="float: right" type="submit" class="btn btn-info">Update</button>
                    </div>
                  </div>
                </div>
                
              </form>
            </div>
          
      </div>
</section>