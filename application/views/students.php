<section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
              <li class="nav-item">
                  <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true"><strong>Student List</strong></a>
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
                  <table id="ex2" style="text-align:left;" class="table table-hover table-responsive-lg">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Student Name</th>
                    <th>Student Photo</th>
                    <th>Student Info</th>
                    <th>Contact Details</th>
                    <th>Fees</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php
                      $k=1;
                      foreach ($get_stud as $row){
                         
                      ?>
                  <tr>
                    <td><?php echo $k;?></td>
                    <td><?php echo $row->s_name;?></td>
                    <td>
                        <?php 
                        if(!file_exists("$row->photo")):?>
                        <img height="70" width="70" src="<?php echo base_url()?>Assets/images/Men-Profile-Image-PNG.png">
                        <?php else:?>
                        <img style="border-radius: 50px" height="70" width="70" src="<?php echo base_url().$row->photo;?>">
                        <?php endif;?>
                    </td>
                    <td>
                        <span>Reg No: <?php echo $row->reg_no;?></span><br>
                        <span>Class: <?php echo $row->class;?></span><br>
                        <span>Sec: <?php echo $row->section;?></span><br>
                    </td>
                    <td>
                        <span>Email: </span><?php echo $row->email;?><br>
                        <span>PH No: </span><?php echo $row->num1;?>
                    </td>
                    <td>
                        <?php 
                    if($this->session->userdata('special')==1):?>
                        <?php if(($row->status)==2):?>
                        <a href="<?php echo base_url()?>fees/<?php echo $row->id?>" class="btn btn-success">Receipt</a>
                        <?php elseif(($row->status)==1):?>
                        <a href="<?php echo base_url()?>fees/<?php echo $row->id?>" class="btn btn-warning">Receipt</a>
                        <?php else:?>
                        <a href="<?php echo base_url()?>fees/<?php echo $row->id?>" class="btn btn-danger">Receipt</a>
                         <?php endif;?>
                            
                        <?php else:?>
                         <?php if(($row->status)==2):?>
                        <a href="<?php echo base_url()?>s_fees/<?php echo $row->id?>" class="btn btn-success">Receipt</a>
                        <?php elseif(($row->status)==1):?>
                        <a href="<?php echo base_url()?>s_fees/<?php echo $row->id?>" class="btn btn-warning">Receipt</a>
                        <?php else:?>
                        <a href="<?php echo base_url()?>s_fees/<?php echo $row->id?>" class="btn btn-danger">Receipt</a>
                         <?php endif;?>
                        <?php endif;?>
                    </td>
                    <td> 
                    <?php 
                    if($this->session->userdata('special')==1):?>
                    
                        <a data-toggle="tooltip" title="Delete" class="btn confirmation" href="<?php echo base_url()?>My_controller/delete_studs/<?php echo $row->id?>"><i class="fa fa-trash"></i></a>
                        <a data-toggle="tooltip" title="Edit" class="btn" href="<?php echo base_url()?>My_controller/edit_stud/<?php echo $row->id?>"><i class="fa fa-edit"></i></a>
                    
                    <?php else:?>
                         <a data-toggle="tooltip" title="Delete" class="btn confirmation" href="<?php echo base_url()?>My_controller/delete_studs/<?php echo $row->id?>"><i class="fa fa-trash"></i></a>
                        <a data-toggle="tooltip" title="Edit" class="btn" href="<?php echo base_url()?>user_controller/edit_students/<?php echo $row->id?>"><i class="fa fa-edit"></i></a>
                    
                    <?php endif;?>
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
                 
                  <form class="form-horizontal" action="<?php echo base_url()?>add_student" method="post" enctype="multipart/form-data" id="Formuser1">
                <div class="card-body">
                    <legend style="color:orange">Academic Details</legend><hr>
                  <div class="row">
                    <div class="col-sm-3">
                    <label>Academic Year</label>
                    <select class="form-control" name="year">
                        <option>2019-2020</option>
                        <option>2020-2021</option>
                        <option>2021-2022</option>
                    </select>
                    </div>
                    <div class="col-sm-3">
                        <label>Register No</label>
                        <input type="text" class="form-control" name="reg" placeholder="Enter Register No" required="">
                    </div>
                    
                    <div class="col-sm-3">
                        <label>Admission Date</label>
                        <input type="date" name="date" class="form-control" required="">
                    </div>
                      <div class="col-sm-3">
                        <label>Branch</label>
                        <select class="form-control" name="branch">
                            <?php echo $get_branch;?>
                        </select>
                    </div>
                    
                  </div>
                    <div class="row">
                    <div class="col-sm-3">
                    <label>Class</label>
                    <input type="text" name="class" class="form-control" placeholder="Enter Class" required="">
                    </div>
                    <div class="col-sm-3">
                        <label>Section</label>
                        <input type="text" class="form-control" name="sec" placeholder="Enter Section" required="">
                    </div>
                   </div>
                    <br>
                    <legend style="color:orange">Student Details</legend><hr>
                  <div class="row">
                    <div class="col-sm-3">
                    <label>Student Name</label>
                    <input type="text" class="form-control" name="s_name" placeholder="Enter Name" required="">
                    </div>
                    <div class="col-sm-3">
                    <label>Photo</label>
                    <input type="file" class="form-control" name="file" required="">
                    </div>
                    <div class="col-sm-3">
                        <label>Gender</label>
                        <select class="form-control" name="gender">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    
                    <div class="col-sm-3">
                       <label>Date of Birth</label>
                        <input type="date" name="dob" class="form-control" required="">
                    </div>
                 </div>
                    <div class="row">
                    <div class="col-sm-3">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email Id" required="">
                    </div>
                    </div>
                    <br>
                    <legend style="color:orange">Guardian Details</legend><hr>
                  <div class="row">
                    <div class="col-sm-3">
                    <label>Name</label>
                    <input type="text" class="form-control" name="g_name" placeholder="Enter Guardian Name" required="">
                    </div>
                    <div class="col-sm-3">
                        <label>Relation</label>
                        <input type="text" class="form-control" name="relation" placeholder="Enter Relation" required="">
                    </div>
                    
                    <div class="col-sm-3">
                        <label>Father Name</label>
                        <input type="text" class="form-control" name="f_name" placeholder="Enter Father Name" required="">
                    </div>
                      <div class="col-sm-3">
                        <label>Mother Name</label>
                        <input type="text" class="form-control" name="m_name" placeholder="Enter Mother Name" required="">
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-sm-3">
                    <label>Phone Number 1</label>
                    <input type="tel" class="form-control" name="num1" placeholder="Enter Phone No" required="" maxlength="10">
                    </div>
                    <div class="col-sm-3">
                    <label>Phone Number 2</label>
                    <input type="tel" class="form-control" name="num2" placeholder="Enter Phone No" required="" maxlength="10">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-6">
                    <label>Permanent Address</label>
                    <textarea name="p_add" class="form-control"></textarea>
                    </div>
                    <div class="col-sm-6">
                    <label>Present Address</label>
                    <textarea name="t_add" class="form-control"></textarea>
                    </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-8"></div>    
                    <div class="col-sm-4">
                    <button type="submit" class="btn btn-warning form-control">Submit</button>
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
