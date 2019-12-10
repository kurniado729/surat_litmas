<!-- Footer -->
<footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; Sistem KP <?= date('Y'); ?></span>
		</div>
	</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
			</div>
		</div>
	</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>


<!-- Page level plugins -->
<script src="<?= base_url('assets'); ?>/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets'); ?>/js/demo/chart-area-demo.js"></script>
<script src="<?= base_url('assets'); ?>/js/demo/chart-pie-demo.js"></script>
<script src="<?= base_url('assets'); ?>/js/demo/chart-bar-demo.js"></script>
<script src="<?= base_url('assets'); ?>/js/demo/datatables-demo.js"></script>



<script src="<?= base_url(); ?>assets/js/js-sweetalert/sweetalert2.all.min.js" ></script>
<script src="<?= base_url(); ?>assets/js/js-sweetalert/myscript.js" ></script>

<script src="<?= base_url(); ?>assets/wizard/jquery-1.11.1.min.js"></script>
<script src=<?= base_url(); ?>assets/wizard//bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/wizard/jquery.backstretch.min.js"></script>
<script src=<?= base_url(); ?>assets/wizard/retina-1.1.0.min.js"></script>
<script src="<?= base_url(); ?>assets/wizard/scripts.js"></script>


<script>
    $('.custom-file-input').on('change', function () {
        let filename = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(filename);
    });


    $('.form-check-input').on('click', function () {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function () {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId
            }
        });

    });

</script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#searchbkd").keyup(function () {
            var searchText = $(this).val();
            if (searchText != '') {
                $.ajax({
                    url: "<?= base_url('bkd/action'); ?>",
                    method: 'post',
                    data: {query: searchText},
                    success: function (response) {
                        $("#show-list").html(response);
                    }
                });
            } else {
                $("#show-list").html('');
            }
        });

        $("#show-list").on('click', function () {
            // var nama = $('#kontol').html();
            var nama = $('#show-list option:selected').text();

            $.ajax({
                url: "<?= base_url('bkd/action2'); ?>",
				type: 'post',
                method: 'post',
				dataType: 'json',
                data: {nama: nama},
				async: 'false',
                success: function (response) {
                    $('#searchbkd').val('');
                    $('#nip').val(response[0]['nip']);
                    $('#jabatan').val(response[0]['jabatan']);

                },
            });

            // $('#kolomCari').remove();
        });

        $(document).on('click', 'a', function () {
            $("#searchbkd").val($(this).text());
            $("#show-list").html('');
        });
    });
</script>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>


<script type="text/javascript">
    $(document).ready(function () {
        $("#searchbka").keyup(function () {
            var searchText = $(this).val();
            if (searchText != '') {
                $.ajax({
                    url: "<?= base_url('bka/action'); ?>",
                    method: 'post',
                    data: {query: searchText},
                    success: function (response) {
                        $("#show-list").html(response);
                    }
                });
            } else {
                $("#show-list").html('');
            }
        });

        $("#show-list").on('click', function () {
            // var nama = $('#kontol').html();
            var nama = $('#show-list option:selected').text();

            $.ajax({
                url: "<?= base_url('bka/action2'); ?>",
                type: 'post',
                method: 'post',
                dataType: 'json',
                data: {nama: nama},
                async: 'false',
                success: function (response) {
                    $('#searchbka').val('');
                    $('#nip').val(response[0]['nip']);
                    $('#jabatan').val(response[0]['jabatan']);

                },
            });

            // $('#kolomCari').remove();
        });

        $(document).on('click', 'a', function () {
            $("#searchbka").val($(this).text());
            $("#show-list").html('');
        });
    });
</script>
<script>

    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="tgl_surat"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'dd-mm-yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
<script>
    $(document).ready(function(){
        var date_input=$('input[name="tanggal_lahir_klien"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'dd-mm-yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
<script>
    $(document).ready(function(){
        var date_input=$('input[name="tanggal_lahir_ayah"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'dd-mm-yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
<script>
    $(document).ready(function(){
        var date_input=$('input[name="tanggal_lahir_ibu"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'dd-mm-yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
<script>
    $(document).ready(function(){
        var date_input=$('input[name="tanggal_lahir_wali"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'dd-mm-yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
<script>
    $(document).ready(function(){
        var date_input=$('input[name="tanggal_lahir_suami/istri"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'dd-mm-yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
<script>
    $(document).ready(function(){
        var date_input=$('input[name="tgl_surat_masuk"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'dd-mm-yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
</body>

<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';


    //ambil data

    var LitmasDiversi = <?php echo $litmas_diversi;?>;
    var TrashLitmasDiversi = <?php echo $trash_litmas_diversi;?>;

    // Pie Chart Example
    var ctx = document.getElementById("litmas_diversi");
    var litmas_diversi = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Litmas Diversi", "Trash "],
            datasets: [{
                data: [LitmasDiversi, TrashLitmasDiversi],
                backgroundColor: ['#4e73df', '#f6c23e', '#36b9cc'],
                hoverBackgroundColor: ['#2e59d9', '#f6b20b', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });

</script>

<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';


    //ambil data

	var pegawaitu = <?php echo $pegawaitu;?>;
	var pegawaibkd = <?php echo $pegawaibkd;?>;
	var pegawaibka = <?php echo $pegawaibka;?>;

    // Pie Chart Example
    var ctx = document.getElementById("pegawai");
    var pegawai = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Pegawai TU", "Pegawai BKD", "Pegawai BKA"],
            datasets: [{
                data: [pegawaitu, pegawaibkd, pegawaibka],
                backgroundColor: ['#4e73df', '#f6c23e', '#36b9cc'],
                hoverBackgroundColor: ['#2e59d9', '#f6b20b', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });

</script>

<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';


    //ambil data

    var surat_masuk = <?php echo $surat_masuk;?>;
    var trash = <?php echo $trash;?>;

    // Pie Chart Example
    var ctx = document.getElementById("surat_masuk");
    var surat_masuk = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Surat Masuk", "Trash"],
            datasets: [{
                data: [surat_masuk, trash],
                backgroundColor: ['#4e73df', '#f6c23e', '#36b9cc'],
                hoverBackgroundColor: ['#2e59d9', '#f6b20b', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });

</script>

<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';


    //ambil data

    var surat_masuk_sudah_disposisi = <?php echo $surat_masuk_sudah_disposisi;?>;
    var surat_masuk_belum_disposisi = <?php echo $surat_masuk_belum_disposisi;?>;

    // Pie Chart Example
    var ctx = document.getElementById("surat_disposisi_tu");
    var surat_disposisi_tu = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Sudah Didisposisi", "Belum Didisposisi"],
            datasets: [{
                data: [surat_masuk_sudah_disposisi, surat_masuk_belum_disposisi],
                backgroundColor: ['#4e73df', '#f6c23e', '#36b9cc'],
                hoverBackgroundColor: ['#2e59d9', '#f6b20b', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });

</script>

<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';


    //ambil data

    var surat_sudah_spt_bkd = <?php echo $surat_sudah_spt_bkd;?>;
    var surat_belum_spt_bkd = <?php echo $surat_belum_spt_bkd;?>;

    // Pie Chart Example
    var ctx = document.getElementById("surat_bkd");
    var surat_bkd = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Sudah Dibuat SPT", "Belum Dibuat SPT"],
            datasets: [{
                data: [surat_sudah_spt_bkd, surat_belum_spt_bkd],
                backgroundColor: ['#4e73df', '#f6c23e', '#36b9cc'],
                hoverBackgroundColor: ['#2e59d9', '#f6b20b', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });

</script>
<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';


    //ambil data

    var surat_sudah_diajukan_spt_bkd = <?php echo $surat_sudah_diajukan_spt_bkd;?>;
    var surat_belum_diajukan_spt_bkd = <?php echo $surat_belum_diajukan_spt_bkd;?>;

    // Pie Chart Example
    var ctx = document.getElementById("surat_spt_ajukan_bkd");
    var surat_spt_ajukan_bkd = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Sudah Diajukan", "Belum Diajukan"],
            datasets: [{
                data: [surat_sudah_diajukan_spt_bkd, surat_belum_diajukan_spt_bkd],
                backgroundColor: ['#4e73df', '#f6c23e', '#36b9cc'],
                hoverBackgroundColor: ['#2e59d9', '#f6b20b', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });

</script>

<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';


    //ambil data

    var surat_sudah_spt_bka = <?php echo $surat_sudah_spt_bka;?>;
    var surat_belum_spt_bka = <?php echo $surat_belum_spt_bka;?>;

    // Pie Chart Example
    var ctx = document.getElementById("surat_bka");
    var surat_bka = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Sudah Dibuat SPT", "Belum Dibuat SPT"],
            datasets: [{
                data: [surat_sudah_spt_bka, surat_belum_spt_bka],
                backgroundColor: ['#4e73df', '#f6c23e', '#36b9cc'],
                hoverBackgroundColor: ['#2e59d9', '#f6b20b', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });

</script>
<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';


    //ambil data

    var surat_sudah_diajukan_spt_bka = <?php echo $surat_sudah_diajukan_spt_bka;?>;
    var surat_belum_diajukan_spt_bka = <?php echo $surat_belum_diajukan_spt_bka;?>;

    // Pie Chart Example
    var ctx = document.getElementById("surat_spt_ajukan_bka");
    var surat_spt_ajukan_bka = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Sudah Diajukan", "Belum Diajukan"],
            datasets: [{
                data: [surat_sudah_diajukan_spt_bka, surat_belum_diajukan_spt_bka],
                backgroundColor: ['#4e73df', '#f6c23e', '#36b9cc'],
                hoverBackgroundColor: ['#2e59d9', '#f6b20b', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });

</script>

<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';


    //ambil data

    var surat_disposisi_bkd = <?php echo $surat_disposisi_bkd;?>;
    var surat_disposisi_bka = <?php echo $surat_disposisi_bka;?>;

    // Pie Chart Example
    var ctx = document.getElementById("surat_disposisi");
    var surat_disposisi = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["BKD", "BKA"],
            datasets: [{
                data: [surat_disposisi_bkd, surat_disposisi_bka],
                backgroundColor: ['#4e73df', '#f6c23e', '#36b9cc'],
                hoverBackgroundColor: ['#2e59d9', '#f6b20b', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });

</script>
<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';


    //ambil data

    var surat_disposisi_bkd_sudah_upload = <?php echo $surat_disposisi_bkd_sudah_upload;?>;
    var surat_disposisi_bkd_belum_upload = <?php echo $surat_disposisi_bkd_belum_upload;?>;
    var surat_disposisi_bkd_sudah_disetujui = <?php echo $surat_disposisi_bkd_sudah_disetujui;?>;
    var surat_disposisi_bkd_belum_disetujui = <?php echo $surat_disposisi_bkd_belum_disetujui;?>;

    // Pie Chart Example
    var ctx = document.getElementById("surat_disposisi_bkd");
    var surat_disposisi_bkd = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Sudah Diupload", "Belum Diupload", "Sudah Disetujui", "Belum Disetujui"],
            datasets: [{
                data: [surat_disposisi_bkd_sudah_upload, surat_disposisi_bkd_belum_upload, surat_disposisi_bkd_sudah_disetujui, surat_disposisi_bkd_belum_disetujui ],
                backgroundColor: ['#4e73df', '#f6c23e', '#36b9cc', '#e74a3b'],
                hoverBackgroundColor: ['#2e59d9', '#f6b20b', '#1491af', '#e73526'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });

</script>

<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';


    //ambil data

    var surat_disposisi_bka_sudah_upload = <?php echo $surat_disposisi_bka_sudah_upload;?>;
    var surat_disposisi_bka_belum_upload = <?php echo $surat_disposisi_bka_belum_upload;?>;
    var surat_disposisi_bka_sudah_disetujui = <?php echo $surat_disposisi_bka_sudah_disetujui;?>;
    var surat_disposisi_bka_belum_disetujui = <?php echo $surat_disposisi_bka_belum_disetujui;?>;

    // Pie Chart Example
    var ctx = document.getElementById("surat_disposisi_bka");
    var surat_disposisi_bka = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Sudah Diupload", "Belum Diupload", "Sudah Disetujui", "Belum Disetujui"],
            datasets: [{
                data: [surat_disposisi_bka_sudah_upload, surat_disposisi_bka_belum_upload, surat_disposisi_bka_sudah_disetujui, surat_disposisi_bka_belum_disetujui ],
                backgroundColor: ['#4e73df', '#f6c23e', '#36b9cc', '#e74a3b'],
                hoverBackgroundColor: ['#2e59d9', '#f6b20b', '#1491af', '#e73526'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });
</script>
<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';


    //ambil data

    var surat_spt_bkd = <?php echo $surat_spt_bkd;?>;
    var surat_spt_bka = <?php echo $surat_spt_bka;?>;

    // Pie Chart Example
    var ctx = document.getElementById("surat_spt");
    var surat_spt = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["BKD", "BKA"],
            datasets: [{
                data: [surat_spt_bkd, surat_spt_bka],
                backgroundColor: ['#4e73df', '#f6c23e', '#36b9cc'],
                hoverBackgroundColor: ['#2e59d9', '#f6b20b', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });

</script>
<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';


    //ambil data

    var surat_spt_bkd_sudah_upload = <?php echo $surat_spt_bkd_sudah_upload;?>;
    var surat_spt_bkd_belum_upload = <?php echo $surat_spt_bkd_belum_upload;?>;
    var surat_spt_bkd_sudah_disetujui = <?php echo $surat_spt_bkd_sudah_disetujui;?>;
    var surat_spt_bkd_belum_disetujui = <?php echo $surat_spt_bkd_belum_disetujui;?>;

    // Pie Chart Example
    var ctx = document.getElementById("surat_spt_bkd");
    var surat_spt_bkd = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Sudah Diupload", "Belum Diupload", "Sudah Disetujui", "Belum Disetujui"],
            datasets: [{
                data: [surat_spt_bkd_sudah_upload, surat_spt_bkd_belum_upload, surat_spt_bkd_sudah_disetujui, surat_spt_bkd_belum_disetujui ],
                backgroundColor: ['#4e73df', '#f6c23e', '#36b9cc', '#e74a3b'],
                hoverBackgroundColor: ['#2e59d9', '#f6b20b', '#1491af', '#e73526'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });
</script>
<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';


    //ambil data

    var surat_spt_bka_sudah_upload = <?php echo $surat_spt_bka_sudah_upload;?>;
    var surat_spt_bka_belum_upload = <?php echo $surat_spt_bka_belum_upload;?>;
    var surat_spt_bka_sudah_disetujui = <?php echo $surat_spt_bka_sudah_disetujui;?>;
    var surat_spt_bka_belum_disetujui = <?php echo $surat_spt_bka_belum_disetujui;?>;

    // Pie Chart Example
    var ctx = document.getElementById("surat_spt_bka");
    var surat_spt_bka = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Sudah Diupload", "Belum Diupload", "Sudah Disetujui", "Belum Disetujui"],
            datasets: [{
                data: [surat_spt_bka_sudah_upload, surat_spt_bka_belum_upload, surat_spt_bka_sudah_disetujui, surat_spt_bka_belum_disetujui ],
                backgroundColor: ['#4e73df', '#f6c23e', '#36b9cc', '#e74a3b'],
                hoverBackgroundColor: ['#2e59d9', '#f6b20b', '#1491af', '#e73526'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });
</script>
<script>
    function selectText(node) {
        node = document.getElementById(node);

        if (document.body.createTextRange) {
            const range = document.body.createTextRange();
            range.moveToElementText(node);
            range.select();
        } else if (window.getSelection) {
            const selection = window.getSelection();
            const range = document.createRange();
            range.selectNodeContents(node);
            selection.removeAllRanges();
            selection.addRange(range);
        } else {
            console.warn("Could not select text in node: Unsupported browser.");
        }
    }

    const clickable = document.querySelector('.icon-1');
    clickable.addEventListener('click', () => selectText('target-1'));

    const clickable2 = document.querySelector('.icon-2');
    clickable2.addEventListener('click', () => selectText('target-2'));

    const clickable3 = document.querySelector('.icon-3');
    clickable3.addEventListener('click', () => selectText('target-3'));

    const clickable4 = document.querySelector('.icon-4');
    clickable4.addEventListener('click', () => selectText('target-4'));

    const clickable5 = document.querySelector('.icon-5');
    clickable5.addEventListener('click', () => selectText('target-5'));

    const clickable6 = document.querySelector('.icon-6');
    clickable6.addEventListener('click', () => selectText('target-6'));

    const clickable7 = document.querySelector('.icon-7');
    clickable7.addEventListener('click', () => selectText('target-7'));

    const clickable8 = document.querySelector('.icon-8');
    clickable8.addEventListener('click', () => selectText('target-8'));

    const clickable9 = document.querySelector('.icon-9');
    clickable9.addEventListener('click', () => selectText('target-9'));

    const clickable10 = document.querySelector('.icon-10');
    clickable10.addEventListener('click', () => selectText('target-10'));

    const clickable11 = document.querySelector('.icon-11');
    clickable11.addEventListener('click', () => selectText('target-11'));

    const clickable12 = document.querySelector('.icon-12');
    clickable12.addEventListener('click', () => selectText('target-12'));
</script>
<script>
    $(document).ready(function () {

        var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function(){
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for(var i=0; i<curInputs.length; i++){
                if (!curInputs[i].validity.valid){
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-primary').trigger('click');
    });
</script>
</html>
