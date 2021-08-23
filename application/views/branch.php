<section class="content">
      <div class="container-fluid">
        
          
          
        <div class="card">
          <div class="card-body">
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
              <li class="nav-item">
                  <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true"><strong>Branch List</strong></a>
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
                  <table id="ex1" style="text-align:left;" class="table table-hover table-responsive-lg table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Branch Name</th>
                    <th>Branch Id</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php
                      $k=1;
                      foreach($get_branch as $row){
                          ?>
                  <tr>
                    <td><?php echo $k;?></td>
                    <td><?php echo $row->branch_name;?></td>
                    <td><?php echo $row->branch_id;?></td>
                    <td>
                        <a data-toggle="tooltip" title="Delete" class="btn confirmation" href="<?php echo base_url()?>My_controller/delete_branch/<?php echo $row->id?>"><i class="fa fa-trash"></i></a>
                        <a data-toggle="tooltip" title="Edit" class="btn" href="<?php echo base_url()?>My_controller/edit_branch/<?php echo $row->id?>"><i class="fa fa-edit"></i></a>
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
                 
                  <form class="form-horizontal" action="<?php echo base_url()?>add_branch" method="post" id="Formuser1">
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Branch Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="bname" placeholder="Enter Branch Name" required="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Branch ID</label>
                    <div class="col-sm-6">
                        <input type="text" name="bid" class="form-control" placeholder="Enter ranch ID" required="">
                    </div>
                  </div>
                    
                  <div class="form-group row">  
                     <div class="col-sm-8">
                  <button style="float:right" type="submit" class="btn btn-info">Submit</button>
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
    