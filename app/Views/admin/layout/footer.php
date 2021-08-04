 <!-- Main Footer -->
 <footer class="main-footer">
     <!-- To the right -->
     <div class="float-right d-none d-sm-inline">
         Anything you want
     </div>
     <!-- Default to the left -->
     <strong>By Muhammad Iqbal Firdiyansah<a href=""></a>.</strong>
 </footer>
 </div>
 <!-- ./wrapper -->

 <!-- REQUIRED SCRIPTS -->

 <!-- jQuery -->
 <script src="<?= base_url('template'); ?>/plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="<?= base_url('template'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- AdminLTE App -->
 <script src="<?= base_url('template'); ?>/dist/js/adminlte.min.js"></script>

 <script>
     $(document).ready(function() {

         $('#jurusan').change(function() {

             var id_jurusan = $('#jurusan').val();

             var action = 'get_siswa';

             if (id_jurusan != '') {
                 $.ajax({

                     url: "<?= base_url('nilai/action'); ?>",
                     method: "POST",
                     data: {
                         id_jurusan: id_jurusan,
                         action: action
                     },
                     dataType: "JSON",
                     success: function(data) {
                         var html = '<option value="">--Pilih Nama Siswa--</option>';

                         for (var count = 0; count < data.length; count++) {
                             html += '<option value="' + data[count].id_siswa + '">' + data[count].nama_siswa + '</option>';
                         }

                         $('#nama').html(html);
                     }


                 });


             } else {
                 $('#nama').val('');
             }



         });
     });
 </script>
 </body>

 </html>