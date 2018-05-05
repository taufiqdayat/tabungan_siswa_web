       
 <script src=<?=base_url()."assets/vendor/datatables/js/jquery.dataTables.min.js"?>></script>
    <script src=<?=base_url()."assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"?>></script>
    <script src=<?=base_url()."assets/vendor/datatables-responsive/dataTables.responsive.js"?>></script>
       <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>