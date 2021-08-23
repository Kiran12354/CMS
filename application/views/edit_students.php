<section class="content">
      <div class="container-fluid">
          <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Update Details</h3>
              </div>
              <form class="form-horizontal" action="<?php echo base_url()?>update_student" method="post" enctype="multipart/form-data" id="Formuser1">
                  <input type="hidden" value="<?php echo $get_stud_det->id;?>" name="id">
                  <div class="card-body">
                    <legend style="color:orange">Academic Details</legend><hr>
                  <div class="row">
                    <div class="col-sm-3">
                    <label>Academic Year</label>
                    <select class="form-control" name="year" >
                        <option><?php echo $get_stud_det->academic_year;?></option>
                        <option>2019-2020</option>
                        <option>2020-2021</option>
                        <option>2021-2022</option>
                    </select>
                    </div>
                    <div class="col-sm-3">
                        <label>Register No</label>
                        <input type="text" class="form-control" name="reg" value="<?php echo $get_stud_det->reg_no;?>" required="">
                    </div>
                    
                    <div class="col-sm-3">
                        <label>Admission Date</label>
                        <input type="date" name="date" class="form-control" required="" value="<?php echo $get_stud_det->admision_date;?>">
                    </div>
                     <div class="col-sm-3">
                        <label>Branch</label>
                        <select class="form-control" name="branch">
                            <option><?php echo $get_stud_det->branch;?></option>
                            <?php echo $get_branch;?>
                        </select>
                    </div>
                    
                  </div>
                    <div class="row">
                    <div class="col-sm-3">
                    <label>Class</label>
                    <input type="text" name="class" class="form-control" value="<?php echo $get_stud_det->class;?>" required="">
                    </div>
                    <div class="col-sm-3">
                        <label>Section</label>
                        <input type="text" class="form-control" name="sec" value="<?php echo $get_stud_det->section;?>" required="">
                    </div>
                        <div class="col-sm-6">
                        <label>Fee Status</label>
                        <br>
                        <?php if(($get_stud_det->status)==0):?>
                        <input type="radio" value="0" name="status" checked="">&nbsp;<span>Pending</span>&nbsp;&nbsp;
                        <input type="radio" value="1" name="status">&nbsp;<span>Partial Payment</span>&nbsp;&nbsp;
                        <input type="radio" value="2" name="status">&nbsp;<span>Full Payment</span>
                        <?php elseif(($get_stud_det->status)==1):?>
                        <input type="radio" value="0" name="status">&nbsp;<span>Pending</span>&nbsp;&nbsp;
                        <input type="radio" value="1" name="status" checked="">&nbsp;<span>Partial Payment</span>&nbsp;&nbsp;
                        <input type="radio" value="2" name="status">&nbsp;<span>Full Payment</span>
                        <?php else:?>
                        <input type="radio" value="0" name="status">&nbsp;<span>Pending</span>&nbsp;&nbsp;
                        <input type="radio" value="1" name="status">&nbsp;<span>Partial Payment</span>&nbsp;&nbsp;
                        <input type="radio" value="2" name="status" checked="">&nbsp;<span>Full Payment</span>
                        <?php endif;?>
                    </div>
                        
                   </div>
                    <br>
                    <legend style="color:orange">Student Details</legend><hr>
                  <div class="row">
                    <div class="col-sm-3">
                    <label>Student Name</label>
                    <input type="text" class="form-control" name="s_name" value="<?php echo $get_stud_det->s_name;?>" required="">
                    </div>
                    <div class="col-sm-3">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $get_stud_det->email;?>" required="">
                    </div>
                    <div class="col-sm-3">
                        <label>Gender</label>
                        <select class="form-control" name="gender">
                            <option><?php echo $get_stud_det->gender;?></option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    
                    <div class="col-sm-3">
                       <label>Date of Birth</label>
                        <input type="date" name="dob" class="form-control" required="" value="<?php echo $get_stud_det->dob;?>">
                    </div>
                 </div>
                    <div class="row">
                    <div class="col-sm-3">
                    <label>Photo</label>
                    <input type="file" class="form-control" name="file">
                    </div>
                    <div class="col-sm-3">
                    <label>Current Photo</label>
                    <br>
                    <?php 
                        if(!file_exists("$get_stud_det->photo")):?>
                        <img height="70" width="70" src="<?php echo base_url()?>Assets/images/Men-Profile-Image-PNG.png">
                        <?php else:?>
                        <img height="70" width="70" src="<?php echo base_url().$get_stud_det->photo;?>">
                        <?php endif;?>
                    </div>
                    </div>
                    <br>
                    <legend style="color:orange">Guardian Details</legend><hr>
                  <div class="row">
                    <div class="col-sm-3">
                    <label>Name</label>
                    <input type="text" class="form-control" name="g_name" value="<?php echo $get_stud_det->g_name;?>" required="">
                    </div>
                    <div class="col-sm-3">
                        <label>Relation</label>
                        <input type="text" class="form-control" name="relation" value="<?php echo $get_stud_det->relation;?>" required="">
                    </div>
                    
                    <div class="col-sm-3">
                        <label>Father Name</label>
                        <input type="text" class="form-control" name="f_name" value="<?php echo $get_stud_det->f_name;?>" required="">
                    </div>
                      <div class="col-sm-3">
                        <label>Mother Name</label>
                        <input type="text" class="form-control" name="m_name" value="<?php echo $get_stud_det->m_name;?>" required="">
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-sm-3">
                    <label>Phone Number 1</label>
                    <input type="tel" class="form-control" name="num1" value="<?php echo $get_stud_det->num1;?>" required="" maxlength="10">
                    </div>
                    <div class="col-sm-3">
                    <label>Phone Number 2</label>
                    <input type="tel" class="form-control" name="num2" value="<?php echo $get_stud_det->num2;?>" required="" maxlength="10">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-6">
                    <label>Permanent Address</label>
                    <textarea name="p_add" class="form-control"><?php echo $get_stud_det->p_add;?></textarea>
                    </div>
                    <div class="col-sm-6">
                    <label>Present Address</label>
                    <textarea name="t_add" class="form-control"><?php echo $get_stud_det->t_add;?></textarea>
                    </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-8"></div>    
                    <div class="col-sm-4">
                    <button type="submit" class="btn btn-warning form-control">Update</button>
                    </div>
                    </div>
                </div>
                      
              </form>
           
              </div>
          </div>
</section>