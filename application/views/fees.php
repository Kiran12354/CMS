<section class="content">
      <div class="container-fluid">
          <div class="card">
              <div class="card-header">
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
                  <h3>Fee Payment <span style="float: right;margin-right: 220px">Student Bills</span></h3>
                <h3></h3>
              </div>
            <div class="card-body">
                <div class="row">   
                <div class="col-sm-4">
                    <form class="form-horizontal" action="<?php echo base_url()?>add_fee" method="post" enctype="multipart/form-data" id="Formuser1">
                    <input type="hidden" name="s_id" value="<?php echo $id;?>"  class="form-control">
                    <div class="row">
                        
                        <div class="col-6">
                        <label>Particulars</label>
                        </div>
                        <div class="col-5">
                        <label>Fees</label>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                           foreach ($get_particular as $row){
                           ?>
                          <div class="col-6">
                           <div class="form-group">
                               <input type="text" name="particular[]" class="form-control" value="<?php echo $row->particular?>" readonly=""> 
                           </div>
                          </div>
                          <div class="col-5">
                           <div class="form-group">
                           
                               <input type="number" name="fee[]" placeholder="Enter Amount" class="form-control" required="">
                    
                           </div>
                          </div>
                        <div class="col-1">
                           <div class="form-group">
                               <button style="margin-top: 5px" class="btn btn-sm btn-icon icon-left btn-dark" type="button" onclick="addrow()">+</button>
                           </div>
                        </div>
                          <?php
                           }
                           ?>
                      </div>
                    <div id="add_new" class="form-group"></div>
                    <label>Payment Date</label>
                    <input type="date" name="date" class="form-control" required="">
                    <label>Payment Method</label>
                    <select class="form-control" name="method" required="">
                        <option>Bank</option>
                        <option>Cash</option>
                        <option>Other</option>
                    </select>
                    <label>Description</label>
                    <textarea class="form-control" name="des"></textarea>
                    <br>
                    <button style="float: right" type="submit" class="btn btn-dark">Submit</button>
                  </form>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-7">
                    
                    <table id="ex2" style="text-align:left;" class="table table-hover table-responsive-lg">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Bill_no</th>
                    <th>Payment Date</th>
                    <th>Payment Method</th>
                    <th>&nbsp;&nbsp;Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php
                      $k=1;
                      foreach ($payment_his as $row){
                      ?>
                  <tr>
                    <td><?php echo $k;?></td>
                    <td><?php echo $row->bill_no;?></td>
                    <td><?php echo $row->p_date;?></td>
                    <td><?php echo $row->p_method;?></td>
                    <td> 
                    <?php 
                    if($this->session->userdata('special')==1):?>
                        <a data-toggle="tooltip" title="Delete" class="btn btn-xs confirmation" href="<?php echo base_url()?>My_controller/delete_payment/<?php echo $row->bill_no;?>"><i class="fa fa-trash"></i></a>
                        <a data-toggle="tooltip" title="Edit" class="btn btn-xs" href="<?php echo base_url()?>My_controller/edit_payment/<?php echo $row->bill_no;?>"><i class="fa fa-edit"></i></a>
                        <a data-toggle="tooltip" title="Print" class="btn btn-xs" href="<?php echo base_url()?>Ptap_pdf/fee_report/<?php echo $row->bill_no;?>"><i class="fa fa-print"></i></a>
                    
                    <?php else:?>
                        <a data-toggle="tooltip" title="Delete" class="btn btn-xs confirmation" href="<?php echo base_url()?>My_controller/delete_payment/<?php echo $row->bill_no;?>"><i class="fa fa-trash"></i></a>
                        <a data-toggle="tooltip" title="Edit" class="btn btn-xs" href="<?php echo base_url()?>user_controller/edit_payment/<?php echo $row->bill_no?>"><i class="fa fa-edit"></i></a>
                        <a data-toggle="tooltip" title="Print" class="btn btn-xs" href="<?php echo base_url()?>Ptap_pdf/fee_report/<?php echo $row->bill_no;?>"><i class="fa fa-print"></i></a>
                         
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
                </div>
            </div>
          </div>
      </div>
</section>

<script>
    var num = 1;
    function addrow() {
		var new_row = "";
		new_row += '<div class="row" style="margin-bottom:15px;" id="al_row_' + num + '"><div class="col-6">';
		new_row += '<input class="form-control" name="particular[]" placeholder="Enter Particular"></input>';
		new_row += '</div>';
		new_row += '<div class="col-5"><input type="number" name="fee[]" placeholder="Enter Amount" class="form-control"></div>';
                new_row += '<div class="col-1"><button type="button" class="btn btn-sm btn-icon icon-left btn-danger" onclick="deleteRow(' + num + ')">-</i> </button></div></div>';
		$("#add_new").append(new_row);
		num++;
	}

    function deleteRow(id) {
        $("#al_row_" + id).remove();
      }
</script>