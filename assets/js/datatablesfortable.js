    $(document).ready(function() {
        $('#example2').DataTable({
            "responsive": true,
            "bPaginate": true,
            "bLengthChange": true,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": true
        });
        $('#example3').DataTable({
            responsive: true
        });
    });