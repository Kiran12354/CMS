<section class="content">
      <div class="container-fluid">
          <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Update Details</h3>
              </div>
              <form method="POST" action="<?php echo base_url()?>up_particular" enctype="multipart/form-data" id="Formuser1">
                  <br>
                  <input type="hidden" value="<?php echo $get_part_det->id;?>" name="id">
                <div class="row">
                    <div class="col-1"></div>
                          <div class="col-7">
                           <div class="form-group">
                               <input type="tel" name="particular" class="form-control" value="<?php echo $get_part_det->particular;?>" required="">
                           </div>
                          </div>
                        <div class="col-3">
                           <div class="form-group">
                               <button class="btn btn-md btn-icon icon-left btn-dark" type="submit">Update</button>
                           </div>
                        </div>
                          
                </div>
                      
                  </form>
              
              </div>
          
      </div>
</section>