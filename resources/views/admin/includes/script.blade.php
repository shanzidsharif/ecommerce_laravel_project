<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->



<script src="{{ asset('/') }}admin/assets/node_modules/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('/') }}admin/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('/') }}admin/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="{{ asset('/') }}admin/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{ asset('/') }}admin/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="{{ asset('/') }}admin/dist/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="{{ asset('/') }}admin/assets/node_modules/raphael/raphael-min.js"></script>
<script src="{{ asset('/') }}admin/assets/node_modules/morrisjs/morris.min.js"></script>
<script src="{{ asset('/') }}admin/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Popup message jquery -->
<script src="{{ asset('/') }}admin/assets/node_modules/toast-master/js/jquery.toast.js"></script>
<!-- Chart JS -->
<script src="{{ asset('/') }}admin/dist/js/dashboard1.js"></script>
<script src="{{ asset('/') }}admin/assets/node_modules/toast-master/js/jquery.toast.js"></script>
<script src="{{ asset('/') }}admin/assets/node_modules/dropify/dist/js/dropify.min.js"></script>
<script src="{{ asset('/') }}admin/assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/') }}admin/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
<!-- start - This is for export functionality only -->
<!-- end - This is for export functionality only -->
<script>
    $(function () {
        $('#myTable').DataTable();
        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function (settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function (group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                        last = group;
                    }
                });
            }
        });
        // Order by the grouping
        $('#example tbody').on('click', 'tr.group', function () {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
        // responsive table
        $('#config-table').DataTable({
            responsive: true
        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary me-1');
    });

</script>
