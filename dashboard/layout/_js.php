
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>
    <script src="assets/js/demo/chart-bar-demo.js"></script>
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>
    setTimeout(function() {
            document.getElementById('flash-message').style.display = 'none';
        }, 2000);
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Temukan elemen input Instagram
        var instagramInput = document.getElementById('validation_input_ig');

        // Tambahkan event listener untuk memantau setiap kali pengguna mengetik
        instagramInput.addEventListener('input', function() {
            // Periksa apakah input mengandung karakter '@'
            if (instagramInput.value.includes('@')) {
                // Jika ya, hapus karakter '@'
                instagramInput.value = instagramInput.value.replace('@', '');
            }
        });
    });
</script>


    
