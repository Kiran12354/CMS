<section class="content">
      <div class="container-fluid">
        
          
          
        <div class="card">
          <div class="card-body">
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
                  
              
            <table id="ex2" style="text-align:left;" class="table table-hover table-responsive-lg">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Year</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Actions</th>
                 </tr>
                  </thead>
                  <tbody>
                      <?php
                      $k=1;
                      foreach ($get_year as $row){
                      ?>
                  <tr>
                    <td><?php echo $k;?></td>
                    <td><?php echo $row->year;?></td>
                    <td><?php echo $row->start_date;?></td>
                    <td><?php echo $row->end_date;?></td>
                    <td>
                             <?php 
                            if($row->status == 1):  ?>
                                <span onclick="status_change('user_posts','<?php echo $row->id;?>','0')" class="btn  btn-success btn-sm"><i class="fa fa-eye"></i></span>

                             <?php else:?>
                                    <span onclick="status_change('user_posts','<?php echo $row->id;?>','1')" class="btn  btn-danger btn-sm"><i class="fa fa-eye-slash"></i></span>

                             <?php endif;?>
                    </td>
                    <td>
                        <a data-toggle="tooltip" title="Delete" class="btn confirmation" href="<?php echo base_url()?>My_controller/delete_years/<?php echo $row->id?>"><i class="fa fa-trash"></i></a>
                        <a data-toggle="tooltip" title="Edit" class="btn" href="<?php echo base_url()?>My_controller/edit_year/<?php echo $row->id?>"><i class="fa fa-edit"></i></a>
                    </td>
                  </tr>
                  <?php
                  $k++;
                      }
                  ?>
                  </tbody>
                </table>
                  
              
             
            
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>