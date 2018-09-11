<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('vendor/slick/slick.css')}}">
    <link rel="stylesheet" href="{{url('vendor/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{url('css/custombox.min.css')}}">
    <link href="{{ url('fixed-admin/lib/toast/jquery.toast.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('vendor/adminlte/plugins/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{url('css/custom.css')}}">
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">
    <script src="{{url('js/jquery.min.js')}}" charset="utf-8"></script>
    <script src="{{url('js/jquery.smooth-scroll.js')}}" charset="utf-8"></script>
    <script src="{{url('js/custombox.min.js')}}" charset="utf-8"></script>
    <script src="{{url('vendor/locationpicker/locationpicker.jquery.min.js')}}" charset="utf-8"></script>

  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    @include('frontend.partials.pnavbar')
    @yield('content')
    @include('frontend.partials.footer')
    <script src="{{url('vendor/slick/slick.min.js')}}" charset="utf-8"></script>
    <script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}" charset="utf-8"></script>
    <script src="{{ url('fixed-admin/lib/toast/jquery.toast.min.js') }}"></script>

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
    <script type="text/javascript" async defer src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBWk5NCWnufYNz0XE0uULJ2iphnWY6YESI&callback=initMap'></script>
    <script src="{{url('js/custombox.legacy.min.js')}}" charset="utf-8"></script>
    <script src="{{ url('vendor/adminlte/plugins/select2/select2.min.js') }}"></script>
    <script src="{{url('js/custom.js')}}" charset="utf-8"></script>
    <script type="text/javascript">
    $(document).ready(function(){

        //Initialize Select2 Elements
        $(".select2").select2();

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
  </body>
</html>
