<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>Assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>Assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="background-color:whitesmoke">
    


 <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
          <!-- left column -->
          <div class="col-md-4" style="padding:60px; margin-top:70px;">
            <!-- jquery validation -->
            <div class="card card-dark" style="border-radius: 15px" >
                <div class="card-header" style="border-top-left-radius: 13px;border-top-right-radius: 13px">
                    <?php if($this->session->flashdata('logout')) :?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo $this->session->flashdata('logout')?></strong> 
                </div>
                <?php endif;?>
                <h1>Login</h1>
                </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php echo base_url()?>check" id="quickForm" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">User ID</label>
                    <input type="text" name="user_id" class="form-control" id="exampleInputEmail1" placeholder="User Id">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-dark form-control">Login</button>
                  </div>
                </div>
                
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-4"></div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
 

<!-- jQuery -->
<script src="<?php echo base_url()?>Assets/plugins/jquery/jquery.min.js"></script>

<script src="<?php echo base_url()?>Assets/plugins/jquery-validation/jquery.validate.min.js"></script>


<script type="text/javascript">
$(document).ready(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      window.location.href = link;
    }
  });
  $('#quickForm').validate({
    rules: {
      user_id: {
        required: true,
        minlength: 5,
        maxlength:20
      },
      password: {
        required: true,
        maxlength:12
      }
      
    },
    messages: {
      user_id: {
        required: "Please enter a user ID",
        minlength: "Please enter a vaild user Id",
        maxlength: "User Id not more than 10 characters"
      },
      password: {
        required: "Please provide a password",
        maxlength: "User Id not more than 12 characters"
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
