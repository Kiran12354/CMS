
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url()?>Assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()?>Assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>Assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url()?>Assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()?>Assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url()?>Assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url()?>Assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()?>Assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()?>Assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url()?>Assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url()?>Assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url()?>Assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url()?>Assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>Assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>Assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>Assets/dist/js/demo.js"></script>

<script src="<?php echo base_url()?>Assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>Assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>Assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url()?>Assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
    (function(){
setInterval(()=>{
var a= new Date().toLocaleTimeString();
document.getElementById("time").innerHTML = a;
const d=new Date();
document.getElementById("date").innerHTML = `${d.getDate()}/${d.getMonth()+1}/${d.getFullYear()}`;
},0)
})();
</script>
<script>
  $(function () {
    $("#ex1").DataTable({
      
    });
  });
</script>
<script>
  $(function () {
    $("#ex2").DataTable({
      
    });
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<script>
    $("#Formuser").submit(function(e) {
  e.preventDefault();
  var nm_unit = $("#Formuser").val();
  var almtunit = $("#Formuser").val();
  var form = this;

  swal({
    title: "Are you surely want to submit?",
    type: "success",
    showCancelButton: true,
    confirmButtonColor: "#363945",
    confirmButtonText: "Submit it!",
    cancelButtonText: "Cancel it",
    closeOnConfirm: true
  }, function(isConfirm) {
    if (isConfirm) {
      form.submit();
    }
  });
});
    </script>
    
    <script>
    $("#Formuser1").submit(function(e) {
  e.preventDefault();
  var nm_unit = $("#Formuser1").val();
  var almtunit = $("#Formuser1").val();
  var form = this;

  swal({
    title: "Are you surely want to submit?",
    type: "success",
    showCancelButton: true,
    confirmButtonColor: "#363945",
    confirmButtonText: "Submit it!",
    cancelButtonText: "Cancel it",
    closeOnConfirm: true
  }, function(isConfirm) {
    if (isConfirm) {
      form.submit();
    }
  });
});
    </script>
   
    <script>
     $('.confirmation').click(function(e){
    e.preventDefault();
    var link = $(this).attr('href');

    swal({
        title: "Are you surely want to continue?",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes!",
        confirmButtonColor: "#363945",
        cancelButtonText: "No",
        closeOnConfirm: true,
        
    },
    function(){
       window.location.href = link;
    
    });
});
    </script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>


</body>
</html>

