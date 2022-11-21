<footer class="main-footer">
      <strong>Copyright &copy; 2022 - <?php echo date('Y'); ?> <a href="">Streetcode</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
       
      </div>
    </footer>

    <aside class="control-sidebar control-sidebar-dark">

    </aside>

  </div>


  <script src="vadmin/plugins/jquery/jquery.min.js"></script>

  <script src="vadmin/plugins/jquery-ui/jquery-ui.min.js"></script>

  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>

  <script src="vadmin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- datatables -->
  <script src="vadmin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="vadmin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="vadmin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="vadmin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="vadmin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="vadmin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="vadmin/plugins/jszip/jszip.min.js"></script>
  <script src="vadmin/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="vadmin/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="vadmin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="vadmin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="vadmin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- Datatables -->

  <!-- forms -->

  <script src="vadmin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- forms -->
  <script src="vadmin/plugins/chart.js/Chart.min.js"></script>

  <script src="vadmin/plugins/sparklines/sparkline.js"></script>

  <script src="vadmin/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="vadmin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

  <script src="vadmin/plugins/jquery-knob/jquery.knob.min.js"></script>

  <script src="vadmin/plugins/moment/moment.min.js"></script>
  <script src="vadmin/plugins/daterangepicker/daterangepicker.js"></script>

  <script src="vadmin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

  <script src="vadmin/plugins/summernote/summernote-bs4.min.js"></script>

  <script src="vadmin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

  <script src="vadmin/dist/js/adminlte.js?v=3.2.0"></script>

  <script src="vadmin/dist/js/demo.js"></script>

  <script src="vadmin/dist/js/pages/dashboard.js"></script>
  <script src="processor/processor.js"></script>


  <!-- others -->


  <script>
$(function () {
  bsCustomFileInput.init();
});
</script>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>


</body>

</html>