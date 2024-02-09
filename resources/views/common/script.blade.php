<!-- jQuery 2.2.0 -->
<script src="{{ asset('plugins/jQuery/jQuery-2.2.0.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/knob/jquery.knob.js') }}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/app.min.js') }}"></script>
{{-- <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script> --}}
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<script src="{{ asset('plugins/pace/pace.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/languge.js') }}"> </script>

<!-- CK Editor -->
<script src="{{ asset('plugins/edited/ckeditor.js.txt') }}"></script>
  <!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script src="{{ asset('plugins/edited/ckeditor.js.txt') }}"></script>

<script src="{{ asset('plugins/select2/select2.full.min.js') }}"></script>


<script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>
  <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
                pageLanguage: 'en'
            },
            'google_translate_element'
        );
    }
</script>
<script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();
    });
  </script>
<script>
    document.getElementById('fileInput').addEventListener('change', function () {
        var fileInput = this;
        var previewContainer = document.getElementById('previewContainer');
        previewContainer.innerHTML = ''; // Clear previous previews

        var file = fileInput.files[0];

        if (file) {
            var fileType = file.type.split('/')[0]; // Get the file type (image or video)

            if (fileType === 'image') {
                // Display image preview
                var img = document.createElement('img');
                img.src = URL.createObjectURL(file);
                img.classList.add('preview-image');
                previewContainer.appendChild(img);

                // Assign the file to the 'photo' input
                document.getElementsByName('photo')[0].value = file.name;
            } else if (fileType === 'video') {
                // Display video preview
                var video = document.createElement('video');
                video.src = URL.createObjectURL(file);
                video.classList.add('preview-video');
                video.setAttribute('controls', 'controls');
                previewContainer.appendChild(video);

                // Assign the file to the 'video' input
                document.getElementsByName('video')[0].value = file.name;
            } else {
                // Unsupported file type
                alert('Unsupported file type. Please upload an image or video.');
            }
        }
    });
</script>
<script>
    $(document).ready(function() {
      $('.select2').select2({
        tags: true
      });
    });
  </script>
   <script>
    $(function () {
      $(".select2").select2();

    });
  </script>


