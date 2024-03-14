       <!-- Footer -->
       <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto" style="color: black;">
                        <span>Copyright &copy; Dinas Sosial Kota Tomohon <?php 
            date_default_timezone_set('Asia/Makassar');
            echo date("Y");?></span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tekan "Keluar" Jika Ingin keluar dari aplikasi</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="<?= base_url('auth/logout');?>">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/');?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/');?>js/sb-admin-2.min.js"></script>


    <script src="<?= base_url('assets/');?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/');?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script >$(document).ready(function() {
  $('#dataTable').DataTable({
    "language": {
      
        "decimal":        "",
        "emptyTable":     "Tidak Ada Data Yang Ditemukan",
        "info":           "Menampilkan _START_ ke _END_ dari _TOTAL_ data",
        "infoEmpty":      "Menampilkan 0 to 0 of 0 Data",
        "infoFiltered":   "(filter from _MAX_ total data)",
        "infoPostFix":    "",
        "thousands":      ",",
        "lengthMenu":     "Menampilkan _MENU_ Data ",
        "loadingRecords": "Mohon Tunggu...",
        "processing":     "Memproses...",
        "search":         "Cari:",
        "zeroRecords":    "Data Tidak Ditemukan",
        "paginate": {
            "first":      "Awal",
            "last":       "Akhir",
            "next":       "Selanjutnya",
            "previous":   "Sebelumnya"
        },
        "aria": {
            "sortAscending":  ": activate to sort column ascending",
            "sortDescending": ": activate to sort column descending"
        }
    
    }
});
});</script>

    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });

        
        
    </script>
<script>
     $(document).ready(function() {
        $('#kecamatan').change(function() {
            var id = $(this).val();
           
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/penerima/getkecamatan');?>",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function (response) {
                    $('#desa').html(response);
                }
            });
        });
    });
 </script>
 
</body>

</html>