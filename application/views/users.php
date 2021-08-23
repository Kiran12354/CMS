<section class="content">
      <div class="container-fluid">
        
          
          
        <div class="card">
          <div class="card-body">
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
              <li class="nav-item">
                  <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true"><strong>User List</strong></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false"><strong><i class="fa fa-plus"></i>&nbsp; Add</strong></a>
              </li>
              <li class="nav-item">
                
                <?php if($this->session->flashdata('success')) :?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $this->session->flashdata('success')?></strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <?php endif;?>
          
          
                <?php if($this->session->flashdata('danger')) :?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo $this->session->flashdata('danger')?></strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <?php endif;?>
                  
              </li>
              
            </ul>
            <div class="tab-content" id="custom-content-below-tabContent">
              <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                  <br>
                  <table id="ex2" style="text-align:left;" class="table table-hover table-responsive">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>User Name</th>
                    <th>Photo</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>City</th>
                    <th>Branch</th>
                    <th>Branch Id</th>
                    <th>User Id</th>
                    <th>Password</th>
                    <th>Address</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php
                      $k=1;
                      foreach ($get_user as $row){
                      ?>
                  <tr>
                    <td><?php echo $k;?></td>
                    <td><?php echo $row->name;?></td>
                    <td>
                        <?php 
                        if(!file_exists("$row->user_photo")):?>
                        <img height="70" width="70" src="<?php echo base_url()?>Assets/images/Men-Profile-Image-PNG.png">
                        <?php else:?>
                        <img style="border-radius: 50px" height="70" width="70" src="<?php echo base_url().$row->user_photo;?>">
                        <?php endif;?>
                    </td>
                    <td><?php echo $row->email;?></td>
                    <td><?php echo $row->phone;?></td>
                    <td><?php echo $row->city;?></td>
                    <td><?php echo $row->branch;?></td>
                    <td><?php echo $row->branch_id;?></td>
                    <td><?php echo $row->user_id;?></td>
                    <td><?php echo $row->password;?></td>
                    <td><?php echo $row->address;?></td>
                    <td>
                        <a data-toggle="tooltip" title="Delete" class="btn confirmation" href="<?php echo base_url()?>My_controller/delete_users/<?php echo $row->id?>"><i class="fa fa-trash"></i></a>
                        <a data-toggle="tooltip" title="Edit" class="btn" href="<?php echo base_url()?>My_controller/edit_users/<?php echo $row->id?>"><i class="fa fa-edit"></i></a>
                    </td>
                  </tr>
                  <?php
                  $k++;
                      }
                  ?>
                  </tbody>
                </table>
                  
              
              </div>
            
                
              <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                 
                  <form class="form-horizontal" action="<?php echo base_url()?>add_user" method="post" enctype="multipart/form-data" id="Formuser1">
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Name</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="name" placeholder="Enter User Name" required="">
                    </div>
                    <div class="col-sm-1"></div>
                    <label class="col-sm-1 col-form-label">Photo</label>
                    <div class="col-sm-4">
                        <input type="file" name="image" class="form-control" required="">
                    </div>
                    
                  </div>
                    
                    <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Email</label>
                    <div class="col-sm-4">
                        <input type="email" name="email" class="form-control" placeholder="Enter Email Id" required="">
                    </div>  
                    <div class="col-sm-1"></div>
                    <label class="col-sm-1 col-form-label">City</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="city" placeholder="Enter City" required="">
                    </div>
                   </div>
                    
                    <div class="form-group row">
                   <label class="col-sm-1 col-form-label">Branch</label>
                    <div class="col-sm-4">
                        <select name="branch" class="form-control">
                            <?php echo $get_branch;?>
                        </select>
                    </div>
                   <div class="col-sm-1"></div>
                   
                   <label class="col-sm-1 col-form-label">Branch Id</label>
                    <div class="col-sm-4">
                        <select name="branch_id" class="form-control">
                            <?php echo $get_branch_id;?>
                        </select>
                    </div>
                  </div>
                    
                  <div class="form-group row">
                   <label class="col-sm-1 col-form-label">User Id</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="user_id" placeholder="Enter User ID" maxlength="10" required="">
                    </div>
                   <div class="col-sm-1"></div>
                   
                   <label class="col-sm-1 col-form-label">Password</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="user_password" maxlength="12" placeholder="Enter Password">
                    </div>
                  </div>
                  <div class="form-group row">
                   <label class="col-sm-1 col-form-label">Address</label>
                    <div class="col-sm-4">
                        <textarea class="form-control" name="address" required=""></textarea>
                    </div>
                   <div class="col-sm-1"></div>
                   
                   <label class="col-sm-1 col-form-label">Phone</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="number" placeholder="Enter Phone Number" required="">
                    </div>
                  </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-7"></div>
                    <div class="col-sm-4">
                       <br>
                       <button type="submit" class="btn btn-md btn-info form-control">Submit</button>
                    </div>
                    </div>
                </div>
              </form>
           
              
              </div>
              
            </div>
            
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
    