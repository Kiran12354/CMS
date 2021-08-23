<section class="content">
      <div class="container-fluid">
          <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Update Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="<?php echo base_url()?>update_y" method="post" id="Formuser1">
                  <input type="hidden" name="id" value="<?php echo $get_yeardetails->id;?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Year</label>
                    <div class="col-sm-6" >
                        <select value="<?php echo $get_yeardetails->year;?>" name="year" class="form-control">
                            <option>2019-2020</option>
                            <option>2020-2021</option>
                            <option>2021-2022</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group row">
                     
                    <label class="col-sm-2 col-form-label">Start Date</label>
                    <div class="col-sm-6">
                        <input name="s_date" type="date" class="form-control" value="<?php echo $get_yeardetails->start_date;?>" >
                    </div>
                  </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">End Date</label>
                    <div class="col-sm-6">
                        <input name="e_date" type="date" class="form-control" value="<?php echo $get_yeardetails->end_date;?>" >
                    </div>
                    </div>
                    
                    <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Status</label>
                    <div class="col-sm-3">
                        <?php 
                            if($get_yeardetails->status == 1):  ?>
                        <input class="form-control" type="checkbox" value="1" name="status" checked>
                            <?php else:?>
                        <input class="form-control" type="checkbox" value="1" name="status">
                            <?php endif;?>
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