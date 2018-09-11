<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>KMIPN - POLITEKNIK</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('fixed-admin/img/icon.png') }}">
    @section('css')
    <!-- Common plugins -->
    <link href="{{ url('fixed-admin/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('vendor/materialdesignicons/css/materialdesignicons.min.css') }}">

    <!--vector map css-->
    <link href="{{ url('fixed-admin/lib/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />

    <!-- dataTables -->
    <link href="{{ url('fixed-admin/lib/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('fixed-admin/lib/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('fixed-admin/lib/toast/jquery.toast.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/vendor/jquery-steps/demo/css/jquery.steps.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('vendor/adminlte/plugins/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('vendor/adminlte/plugins/datepicker/datepicker3.css') }}">
    <link rel="stylesheet" href="{{ url('vendor/adminlte/plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ url('/vendor/jquery-steps/demo/css/jquery.steps.css') }}" type="text/css">
    <!-- Summernote -->
    <link href="{{ url('fixed-admin/lib/summernote/summernote.css') }}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{ url('fixed-admin/css/style.css') }}" rel="stylesheet">

    <style>
    .white > .content {
        max-height: 100% !important;
    }
    .upload-content img {
        width: 100% !important;
    }

    .wizard > .content > .body input,
    .wizard > .content > .body select,
    .wizard > .content > .body textarea {
      margin-bottom: 0;
    }
    .container {
      max-width: 3000px !important;
    }
    </style>
    @show

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
    @include('backend.partials.header')
    @include('backend.partials.sidemenu')

    <section class="main-content container">
        @yield('content')

        @include('backend.partials.footer')
    </section>

    @section('js')
    <!--Common plugins-->
    <script src="{{ url('fixed-admin/lib/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ url('fixed-admin/lib/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ url('fixed-admin/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('fixed-admin/lib/pace/pace.min.js') }}"></script>
    <script src="{{ url('fixed-admin/lib/jasny-bootstrap/js/jasny-bootstrap.min.js') }}"></script>
    <script src="{{ url('fixed-admin/lib/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ url('fixed-admin/lib/nano-scroll/jquery.nanoscroller.min.js') }}"></script>
    <script src="{{ url('fixed-admin/lib/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ url('fixed-admin/js/custom.js') }}"></script>

    <!-- Summernote -->
    <script src="{{ url('fixed-admin/lib/summernote/summernote.min.js') }}"></script>

    <script type="text/javascript" src="{{ url('js/jquery.form.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/jquery.MetaData.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/jquery.MultiFile.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script>
    $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script type="text/javascript" src='http://maps.google.com/maps/api/js?libraries=places&key=AIzaSyAmal82_aZU_oMgsq9tIiPQ7mtalKXfwQ4'></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="{{ url('vendor/adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ url('vendor/adminlte/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ url('vendor/adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ url('vendor/adminlte/plugins/fastclick/fastclick.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ url('vendor/adminlte/plugins/iCheck/icheck.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ url('vendor/adminlte/plugins/select2/select2.min.js') }}"></script>

    <script type="text/javascript" src="{{ url('vendor/locationpicker/locationpicker.jquery.min.js') }}"></script>

    <!-- Validation & Step -->
    <script type="text/javascript" src="{{ url('/vendor/jquery-steps/build/jquery.steps.js') }}"></script>
    <script type="text/javascript" src="{{ url('/vendor/jquery-steps/build/jquery.validate.min.js') }}"></script>

    <!--Chart Script-->
    <script src="{{ url('fixed-admin/lib/chartJs/Chart.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/vendor/jquery-steps/build/jquery.steps.js') }}"></script>
    <script type="text/javascript" src="{{ url('/vendor/jquery-steps/build/jquery.validate.min.js') }}"></script>

    <!--VetorMap Script-->
    <script src="{{ url('fixed-admin/lib/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ url('fixed-admin/lib/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ url('fixed-admin/lib/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('fixed-admin/lib/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="{{ url('fixed-admin/lib/toast/jquery.toast.min.js') }}"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        $(".summernote").summernote({
            height: 400,
            toolbar: [
              // [groupName, [list of button]]
              ['style', ['style']],
              ['font', ['bold', 'italic', 'underline', 'clear']],
              ['fontsize', ['fontsize']],
              ['fontname', ['fontname']],
              ['color', ['color']],
              ['para', ['ul', 'ol', 'paragraph']],
              ['height', ['height']],
              ['table', ['table']],
              ['insert', ['link', 'picture', 'hr']],
              ['view', ['fullscreen', 'codeview']],
              ['help', ['help']]
            ],
            fontSizes: ['8', '9', '10', '11', '12', '14', '18', '24', '36', '48' , '64', '82', '150'],
        });

        //Initialize Select2 Elements
        $(".select2").select2();

        //Date picker
        $('.datepicker').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd',
        });

        $('.datepicker-year').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd',
            startView: 'decade',
        });

        $('.upload').click(function(){
            $('.user-photo input[type="file"]').click();
            return false;
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview-image').attr('src', e.target.result);
                    $('#photo').val(e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#image").change(function(){
            if (window.File && window.FileReader && window.FileList && window.Blob) {
                //get the file size and file type from file input field
                var fsize = $(this)[0].files[0].size;

                if(fsize > 1048576) { //do something if file size more than 1 MB (1048576)
                    alert("Ukuran file terlalu besar");
                    $(this).val('');
                }else {
                    $("#preview-image").css('opacity','1');
                    readURL(this);
                }
            }else{
                alert("Silahkan upgrade browser untuk untuk mendapatkan fitur validasi file max size");
                $("#preview-image").css('opacity','1');
                readURL(this);
            }
        });
    });
    </script>
    @show

    @if (session('message'))
    <script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            text: "<strong>{{ session('message')['title'] }}</strong> {{ session('message')['msg'] }}",
            position: 'top-right',
            showHideTransition: 'slide',
        })
    });
    </script>
    @endif
</body>
</html>
