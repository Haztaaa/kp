       <!-- Footer -->
       <footer class="sticky-footer bg-white">
           <div class="container my-auto">
               <div class="copyright text-center my-auto" style="color: black;">
                   <span>Copyright &copy; Dinas Sosial Kota Tomohon <?php
                                                                    date_default_timezone_set('Asia/Makassar');
                                                                    echo date("Y"); ?></span>
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
       <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Ingin Keluar?</h5>
                       <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">×</span>
                       </button>
                   </div>
                   <div class="modal-body">Tekan "Keluar" Jika Ingin keluar dari aplikasi</div>
                   <div class="modal-footer">
                       <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                       <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Keluar</a>
                   </div>
               </div>
           </div>
       </div>

       <!-- Bootstrap core JavaScript-->
       <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
       <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

       <!-- Core plugin JavaScript-->
       <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

       <!-- Custom scripts for all pages-->
       <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
       <script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>
       <script src="<?= base_url('assets/'); ?>js/demo/chart-area-demo.js"></script>


       <script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
       <script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
       <script>
           $(document).ready(function() {
               $('#dataTable').DataTable({
                   "language": {

                       "decimal": "",
                       "emptyTable": "Tidak Ada Data Yang Ditemukan",
                       "info": "Menampilkan _START_ ke _END_ dari _TOTAL_ data",
                       "infoEmpty": "Menampilkan 0 to 0 of 0 Data",
                       "infoFiltered": "(Di Filter Dari _MAX_ total data)",
                       "infoPostFix": "",
                       "thousands": ",",
                       "lengthMenu": "Menampilkan _MENU_ Data ",
                       "loadingRecords": "Mohon Tunggu...",
                       "processing": "Memproses...",
                       "search": "Cari:",
                       "zeroRecords": "Data Tidak Ditemukan",
                       "paginate": {
                           "first": "Awal",
                           "last": "Akhir",
                           "next": "Selanjutnya",
                           "previous": "Sebelumnya"
                       },
                       "aria": {
                           "sortAscending": ": activate to sort column ascending",
                           "sortDescending": ": activate to sort column descending"
                       }

                   }
               });
           });
       </script>

       <script>
           $('.custom-file-input').on('change', function() {
               let fileName = $(this).val().split('\\').pop();
               $(this).next('.custom-file-label').addClass("selected").html(fileName);
           });
       </script>
       <script type="text/javascript">
           function PrintDiv() {
               var divToPrint = document.getElementById('divToPrint');
               var popupWin = window.open('', '_blank', 'width=auto,height=auto');

               popupWin.document.open();
               popupWin.document.write(
                   '<html><link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet"> <body onload="window.print()">' + divToPrint.innerHTML + '</html>'

               );
               popupWin.document.close();
           }
       </script>

       <script>
           $(document).ready(function() {
               $('#kecamatan').change(function() {
                   var id = $(this).val();

                   $.ajax({
                       type: "POST",
                       url: "<?= base_url('user/penerima/getkecamatan'); ?>",
                       data: {
                           id_tes: id
                       },
                       dataType: "JSON",
                       success: function(response) {
                           $('#desa').html(response);
                       }
                   });
               });
               $('#id_kecamatan').change(function() {
                   var id = $(this).val();

                   $.ajax({
                       type: "POST",
                       url: "<?= base_url('user/data_usulan/getdesa'); ?>",
                       data: {
                           id: id
                       },
                       dataType: "JSON",
                       success: function(response) {
                           $('#desa').html(response);
                       }
                   });
               });



           });
       </script>

       <script>
           $(document).ready(function() {
               $('#nik').keyup(function() {
                   var nik = $(this).val();

                   $.ajax({
                       type: "POST",
                       url: "<?= base_url('user/data_usulan/ceknik'); ?>",
                       data: {
                           nik: nik
                       },

                       success: function(response) {

                           $('#show').html(response);


                       }

                   });

               });



           });
       </script>
       <script>
           $('#desaubah').prop('disabled', true);
           $('#id_kecamatanubah').prop('disabled', true);
           $('#id_tahunubah').prop('disabled', true);
           $('#id_jbantuanubah').prop('disabled', true);
       </script>

       <script>
           function changeStatus() {
               var s = $("#kondisi").val();

               if (s == "null") {
                   $("#jumlahkembali").show()
               } else if (s == "1") {
                   $('#jumlahkembali').show()
               }
           }
       </script>

       <script>
           var ctx = document.getElementById("myPieChart");
           var myPieChart = new Chart(ctx, {
               type: 'doughnut',
               data: {
                   labels: ["Ditolak", "Pending", "Diterima"],
                   datasets: [{
                       data: [<?= $usulan; ?>, <?= $usulan2; ?>, <?= $usulan1; ?>],
                       backgroundColor: ['#e74a3b', '#f6c23e', '#1cc88a'],
                       hoverBackgroundColor: ['#d44537', '#deaf37', '#19b57d'],
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
       </body>

       </html>