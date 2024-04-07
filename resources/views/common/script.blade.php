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
{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
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
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script src="asset('dist/js/pages/dashboard.js') }}"></script>

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
<script src="{{ asset('plugins/input-mask/jquery.inputmask.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/js/script.min.js') }}"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="056f2f602b6a56e0b714edf4-|49" defer=""></script>
<script type="056f2f602b6a56e0b714edf4-text/javascript">function ctSetCookie(c_name, value, def_value){document.cookie = c_name + '=' + escape(value) + '; path=/';}ctSetCookie('ct_checkjs', 'accfcf663e5dcc20e4aeeeb73d10863f2d5d2a0ddcf62cb47df77e27072e3e66', '0');</script>
<script type='application/ld+json' class='yoast-schema-graph yoast-schema-graph--main'>{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://colorlib.com/#website","url":"https://colorlib.com/","name":"Colorlib","description":"Free WordPress Themes","potentialAction":{"@type":"SearchAction","target":"https://colorlib.com/?s={search_term_string}","query-input":"required name=search_term_string"}}]}</script>
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
{{-- <script type="056f2f602b6a56e0b714edf4-text/javascript" src='https://colorlib.com/wp-content/themes/sparkling/assets/js/functions.js?ver=20180503'></script> --}}


<script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true
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
<style>
    #videoPreviewContainer video {
        max-width: 100%;
        max-height: 100%;
    }
</style>

<script>
    $(document).ready(function() {
        // Image preview
        $('#imageInput').change(function() {
            previewImage(this, '#imagePreviewContainer');
        });

        // Video preview
        $('#videoInput').change(function() {
            previewVideo(this, '#videoPreviewContainer');
        });

        function previewImage(input, previewContainer) {
            $(previewContainer).empty();
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(previewContainer).html('<img src="' + e.target.result + '" class="img-thumbnail" />');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function previewVideo(input, previewContainer) {
            $(previewContainer).empty();
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(previewContainer).html('<video controls><source src="' + e.target.result + '" type="video/mp4"></video>');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    });
</script>
<script>
    $(function () {
      //Initialize Select2 Elements
      $(".select2").select2();

    });
  </script>
<script>
      $(document).ready(function () {
          // Initialize Select2 Elements
          $(".select2").select2({
              tags: true
          });

          // Initialize Inputmask for datemask and datemask2
          $("#datemask").inputmask("dd/mm/yyyy", { "placeholder": "dd/mm/yyyy" });
          $("#datemask2").inputmask("mm/dd/yyyy", { "placeholder": "mm/dd/yyyy" });

          // Initialize Inputmask for money Euro
          $("[data-mask]").inputmask();

          // Initialize Date range picker
          $('#reservation').daterangepicker();

          // Initialize Date range picker with time picker
          $('#reservationtime').daterangepicker({
              timePicker: true,
              timePickerIncrement: 30,
              format: 'MM/DD/YYYY h:mm A'
          });

          // Initialize Date range as a button
          $('#daterange-btn').daterangepicker({
              ranges: {
                  'Today': [moment(), moment()],
                  'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                  'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                  'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                  'This Month': [moment().startOf('month'), moment().endOf('month')],
                  'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
          }, function (start, end) {
              $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
          });

          // Initialize Date picker
          $('#datepicker').datepicker({
              autoclose: true
          });

          // Initialize iCheck for checkbox and radio inputs
          $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
              checkboxClass: 'icheckbox_minimal-blue',
              radioClass: 'iradio_minimal-blue'
          });

          // Initialize Red color scheme for iCheck
          $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
              checkboxClass: 'icheckbox_minimal-red',
              radioClass: 'iradio_minimal-red'
          });

          // Initialize Flat red color scheme for iCheck
          $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
              checkboxClass: 'icheckbox_flat-green',
              radioClass: 'iradio_flat-green'
          });

          // Initialize Colorpicker
          $(".my-colorpicker1").colorpicker();

          // Initialize color picker with addon
          $(".my-colorpicker2").colorpicker();

          // Initialize Timepicker
          $(".timepicker").timepicker({
              showInputs: false
          });
      });
  </script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get the current date
        var currentDate = new Date();

        // Format the date (e.g., "YYYY-MM-DD")
        var formattedDate = currentDate.toISOString().split('T')[0];

        // Display the formatted date in an element with the id "currentDate"
        var currentDateElement = document.getElementById('currentDate');
        if (currentDateElement) {
            currentDateElement.textContent = formattedDate;
        }
    });
</script>
<!-- Include your version of jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{ asset('dist/js/sweetalert2@10.js') }}"></script>


<!-- Your existing script using $ -->
<script>
    $(document).ready(function () {
        // Your existing code here
        $(".sidebar-form").submit(function (e) {
            e.preventDefault();
            var query = $("input[name='q']").val().toLowerCase();
            $("#sidebar-menu li").each(function () {
                var text = $(this).text().toLowerCase();
                if (text.includes(query)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>
{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> --}}

<!-- Use jQuery.noConflict() to avoid conflicts with other versions of jQuery -->
<script>
    $.noConflict();
    jQuery(document).ready(function ($) {
        // Your new script using jQuery with $ as an alias
        // Add your new code here
    });
</script>
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- JavaScript to handle the search functionality -->
<script>
    // Use jQuery.noConflict() to avoid conflicts with other versions of jQuery
    var jq = jQuery.noConflict();

    jq(document).ready(function ($) {
        // Handle form submission
        jq("#search-form").submit(function (e) {
            e.preventDefault();

            // Get the search query
            var query = jq("input[name='q']").val().toLowerCase();

            // Perform your search logic here
            // For example, you can filter elements based on the query
            jq("body").find("*").each(function () {
                var text = jq(this).text().toLowerCase();
                if (text.includes(query)) {
                    jq(this).show();
                } else {
                    jq(this).hide();
                }
            });
        });
    });
    $('#search').keyup(function() {
        var search = $('#search').val();
        if (search == "") {
            $("#memList").html("");
            $('#result').hide();
        } else {
            $.get("{{ route('Search_Contact') }}", {
                search: search
            }, function(data) {
                $('#memList').empty().html(data);
                $('#result').show();
            })
        }
    });
    function showChat(username) {
        // Code to dynamically load and display chat content for the selected user
        document.getElementById('chatContainer').style.display = 'block';
        // You can fetch and display chat messages for the selected user here
    }
</script>

