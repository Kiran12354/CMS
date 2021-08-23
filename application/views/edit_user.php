<section class="content">
      <div class="container-fluid">
          <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Update Details</h3>
              </div>
              <form class="form-horizontal" action="<?php echo base_url()?>update_user" method="post" enctype="multipart/form-data" id="Formuser1">
                  <input type="hidden" name="id" value="<?php echo $get_userdetails->id;?>">
                  <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Name</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="name" value="<?php echo $get_userdetails->name;?>">
                    </div>
                    <div class="col-sm-1"></div>
                   <label class="col-sm-1 col-form-label">City</label>
                    
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="city" value="<?php echo $get_userdetails->city;?>">
                    </div>
                    
                  </div>
                   <div class="form-group row">
                   <label class="col-sm-1 col-form-label">Phone</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="number" value="<?php echo $get_userdetails->phone;?>">
                    </div>
                   <div class="col-sm-1"></div>
                   <label class="col-sm-1 col-form-label">Email</label>
                    <div class="col-sm-4">
                        <input type="email" name="email" class="form-control" value="<?php echo $get_userdetails->email;?>">
                    </div> 
                   
                  </div>
                   
                  <div class="form-group row">
                   <label class="col-sm-1 col-form-label">Branch</label>
                    <div class="col-sm-4">
                        <select name="branch" class="form-control">
                            <option><?php echo $get_userdetails->branch;?></option>
                            <?php echo $get_branch;?>
                        </select>
                    </div>
                   <div class="col-sm-1"></div>
                   
                   <label class="col-sm-1 col-form-label">Branch Id</label>
                    <div class="col-sm-4">
                        <select name="branch_id" class="form-control">
                            <option><?php echo $get_userdetails->branch_id;?></option>
                            <?php echo $get_branch_id;?>
                        </select>
                    </div>
                  </div>   
                      
                   <div class="form-group row">
                   <label class="col-sm-1 col-form-label">User Id</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" maxlength="10" name="user_id" value="<?php echo $get_userdetails->user_id;?>">
                    </div>
                   <div class="col-sm-1"></div>
                   <label class="col-sm-1 col-form-label">Password</label>
                    <div class="col-sm-4">
                        <input type="text" name="user_password" maxlength="12" class="form-control" value="<?php echo $get_userdetails->password;?>">
                    </div> 
                   
                  </div>
                    <div class="form-group row">
                     <label class="col-sm-1 col-form-label">Photo</label>
                    <div class="col-sm-4">
                        <input type="file" name="image" class="form-control">
                    </div>
                    
                    <div class="col-sm-1"></div>
                    <label class="col-sm-1 col-form-label">Current photo</label>
                    <div class="col-sm-4">
                       <img height="70" width="70" src="<?php echo base_url().$get_userdetails->user_photo;?>">
                    </div>
                   </div>
                    
                    
                 
                  <div class="form-group row">
                   <label class="col-sm-1 col-form-label">Address</label>
                    <div class="col-sm-5">
                        <textarea class="form-control" name="address"><?php echo $get_userdetails->address;?></textarea>
                            
                        
                    </div>
                   <div class="col-sm-1"></div>
                   <div class="col-sm-4">
                        <br>
                  <button type="submit" class="btn btn-md btn-info form-control">Update</button>
                   </div>
                  </div>
                    
                  
                </div>
                
              </form>
              </div>
          </div>
</section>