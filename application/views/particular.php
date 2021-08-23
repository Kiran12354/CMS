<section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
              <li class="nav-item">
                  <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true"><strong>Fee-Particulars</strong></a>
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
                    <th>Particulars</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php
                      $k=1;
                      foreach ($get_particular as $row){
                      ?>
                  <tr>
                    <td><?php echo $k;?></td>
                    
                    <td><?php echo $row->particular;?></td>
                    
                    <td> 
                    <?php 
                    if($this->session->userdata('special')==1):?>
                    
                        <a data-toggle="tooltip" title="Delete" class="btn confirmation" href="<?php echo base_url()?>My_controller/delete_particular/<?php echo $row->id?>"><i class="fa fa-trash"></i></a>
                        <a data-toggle="tooltip" title="Edit" class="btn" href="<?php echo base_url()?>My_controller/edit_particular/<?php echo $row->id?>"><i class="fa fa-edit"></i></a>
                    
                    <?php else:?>
                         <a data-toggle="tooltip" title="Delete" class="btn confirmation" href="<?php echo base_url()?>My_controller/delete_particular/<?php echo $row->id?>"><i class="fa fa-trash"></i></a>
                        <a data-toggle="tooltip" title="Edit" class="btn" href="<?php echo base_url()?>user_controller/edit_particular/<?php echo $row->id?>"><i class="fa fa-edit"></i></a>
                    
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
                  <br>
                 <form method="POST" action="<?php echo base_url()?>particular" enctype="multipart/form-data" id="Formuser1">
                     
                <div class="row">
                    <div class="col-1"></div>
                          <div class="col-7">
                           <div class="form-group">
                               <input type="tel" name="particular[]" class="form-control" placeholder="Enter particular" required="">
                           </div>
                          </div>
                        <div class="col-3">
                           <div class="form-group">
                               <button class="btn btn-md btn-icon icon-left btn-dark" type="button" onclick="addrow()">Add Row</button>
                           </div>
                        </div>
                          
                </div>
                      <div id="add_new" class="form-group"></div>
                      <div class="form-group">
                          <button style="float: right; margin-right: 255px" class="btn btn-md btn-icon icon-left btn-dark" type="submit">submit</button>
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

<script>
         var num = 1;
    
    function addrow() {
		var new_row = "";
		new_row += '<div class="row" style="margin-bottom:15px;" id="al_row_' + num + '"><div class="col-1"></div><div class="col-7">';
		new_row += '<input type="text" name="particular[]" class="form-control" placeholder="Enter particular" required="">';
		new_row += '</div>';
		new_row += '<div class="col-3"><button type="button" class="btn btn-danger" onclick="deleteRow(' + num + ')">Remove</i> </button></div></div>';
		$("#add_new").append(new_row);
		num++;
	}

    function deleteRow(id) {
        $("#al_row_" + id).remove();
      
    }
    </script>