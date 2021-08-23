<section class="content">
      <div class="container-fluid">
          <div class="card">
              <div class="card-header">
                <h3>Edit Bill</h3>
              </div>
              <div class="card-body">
                  <form action="<?php echo base_url()?>up_fee" method="post">
                  <div class="row">
                  <?php
                           foreach ($get_fee_det as $row){
                               $get_id=$this->db->get_where('bill_details',array('bill_no'=>$row->bill_no))->row();
                             ?>
                      <input type="hidden" value="<?php echo $get_id->id;?>" name="id">
                      <input type="hidden" value="<?php echo $row->bill_no?>" name="b_id">
                      <div class="col-6">
                           <div class="form-group">
                               <input type="text" name="particular[]" class="form-control" value="<?php echo $row->particular?>" readonly=""> 
                           </div>
                          </div>
                          <div class="col-6">
                           <div class="form-group">
                           
                               <input type="number" name="fee[]" placeholder="Enter Amount" class="form-control" value="<?php echo $row->fees?>" required="">
                    
                           </div>
                          </div>
                       
                          <?php
                           }
                           ?>
                   </div>
                  <button style="float: right; margin-right: 3rem" type="submit" class="btn btn-dark">Update</button>
                  </form>
              </div>
              
          </div>
      </div>
</section>
