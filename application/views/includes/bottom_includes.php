<?php
/**
 * Created by IntelliJ IDEA.
 * User: urandu
 * Date: 7/11/15
 * Time: 1:38 PM
 */
?>

<!-- Mainly scripts -->
<script src="<?php echo(base_url()); ?>assets/js/jquery-2.1.1.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/picedit.min.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>


<!--<!--pic edit-->
<!--<script src="--><?php //echo(base_url()); ?><!--assets/js/picedit.js"></script>-->
<!---->
<!--<script >-->
<!--    $(function() {-->
<!--        $('#featured_image').picEdit();-->
<!--    });-->
<!--</script>-->
<!-- Custom and plugin javascript -->
<script src="<?php echo(base_url()); ?>assets/js/inspinia.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/plugins/pace/pace.min.js"></script>


<!-- Toastr -->
<script src="<?php echo(base_url()); ?>assets/js/plugins/toastr/toastr.min.js"></script>

<!-- Chosen -->
<script src="<?php echo(base_url()); ?>assets/js/plugins/chosen/chosen.jquery.js"></script>


<!-- Data Tables -->
<script src="<?php echo(base_url()); ?>assets/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/plugins/dataTables/dataTables.responsive.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/plugins/dataTables/dataTables.tableTools.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<!--<script src="<?php /*echo(base_url()); */ ?>assets/js/jquery-gmaps-latlon-picker.js"></script>-->
<script>
    $(document).ready(function () {
        $('.dataTables-example').dataTable({
            responsive: true,
            "dom": 'T<"clear">lfrtip',
            "tableTools": {
                "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
            }
        });


    });

    function fnClickAddRow() {
        $('#editable').dataTable().fnAddData([
            "Custom row",
            "New row",
            "New row",
            "New row",
            "New row"]);

    }
</script>


<!-- Chosen -->
<script src="<?php echo(base_url()); ?>assets/js/plugins/chosen/chosen.jquery.js"></script>

<script>
    $(document).ready(function () {


        var config = {
            '.chosen-select': {},
            '.chosen-select-deselect': {allow_single_deselect: true},
            '.chosen-select-no-single': {disable_search_threshold: 10},
            '.chosen-select-no-results': {no_results_text: 'Oops, nothing found!'},
            '.chosen-select-width': {width: "95%"}
        }
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
    });

</script>


</body>

</html>
