<script src="{{ asset('app/plugins') }}/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('app/plugins') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('app/plugins') }}/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('app/plugins') }}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('app/plugins') }}/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('app/plugins') }}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('app/plugins') }}/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('app/plugins') }}/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('app/plugins') }}/jszip/jszip.min.js"></script>
<script src="{{ asset('app/plugins') }}/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('app/plugins') }}/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('app/plugins') }}/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('app/plugins') }}/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('app/plugins') }}/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('app/dist') }}/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('app/dist') }}/js/demo.js"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print"]
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
