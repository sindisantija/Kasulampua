<!-- Bootstrap Core Js -->
<script src="<?= base_url() ?>assets/bsbtemplate/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="<?= base_url() ?>assets/bsbtemplate/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?= base_url() ?>assets/bsbtemplate/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?= base_url() ?>assets/bsbtemplate/plugins/node-waves/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="<?= base_url() ?>assets/bsbtemplate/plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Morris Plugin Js -->
<script src="<?= base_url() ?>assets/bsbtemplate/plugins/raphael/raphael.min.js"></script>
<script src="<?= base_url() ?>assets/bsbtemplate/plugins/morrisjs/morris.js"></script>

<!-- ChartJs -->
<script src="<?= base_url() ?>assets/bsbtemplate/plugins/chartjs/Chart.bundle.js"></script>

<!-- Flot Charts Plugin Js -->
<script src="<?= base_url()?>assets/bsbtemplate/plugins/flot-charts/jquery.flot.js"></script>
<script src="<?= base_url()?>assets/bsbtemplate/plugins/flot-charts/jquery.flot.resize.js"></script>
<script src="<?= base_url()?>assets/bsbtemplate/plugins/flot-charts/jquery.flot.pie.js"></script>
<script src="<?= base_url()?>assets/bsbtemplate/plugins/flot-charts/jquery.flot.categories.js"></script>
<script src="<?= base_url()?>assets/bsbtemplate/plugins/flot-charts/jquery.flot.time.js"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="<?= base_url()?>assets/bsbtemplate/plugins/jquery-sparkline/jquery.sparkline.js"></script>

<!-- Custom Js -->
<script src="<?= base_url()?>assets/bsbtemplate/js/admin.js"></script>
<script src="<?= base_url()?>assets/bsbtemplate/js/pages/index.js"></script>
<script>
    var i = 0;
    $('#deleteBtn').on('click', function(){
        if(i == 0) {
            $(this).html('Cancel');
            $('.inputDelete').css('display', 'block');
            i = 1;
        }
        else {
            $(this).html('Hapus');
            $('.inputDelete').css('display', 'none');
            i = 0;
        }
    });
</script>

<!-- Demo Js -->
<!-- <script src="js/demo.js"></script> -->
</body>

</html>