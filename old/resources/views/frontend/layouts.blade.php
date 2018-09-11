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
    <link rel="stylesheet" href="{{url('css/custom.css')}}">
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">
    <link rel="stylesheet" href="{{ url('vendor/adminlte/plugins/select2/select2.min.css') }}">
    <script src="{{url('js/jquery.min.js')}}" charset="utf-8"></script>
    <script src="{{url('js/jquery.smooth-scroll.js')}}" charset="utf-8"></script>
    <script src="{{url('js/custombox.min.js')}}" charset="utf-8"></script>
    <script src="{{url('vendor/locationpicker/locationpicker.jquery.min.js')}}" charset="utf-8"></script>

    <link rel="stylesheet" href="{{ url('style/bulma/css/bulma.min.css') }}" media="all">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('style/bulma-extension/timeline.css')}}" media="all">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    {{--@include('frontend.partials.navbar')--}}
    {{--@yield('content')--}}
{{--    @include('frontend.partials.footer')--}}
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
              hideAfter: 5000,
          })
      });
    </script>
    @endif
    <script type="text/javascript" async defer src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBWk5NCWnufYNz0XE0uULJ2iphnWY6YESI&callback=initMap'></script>
    <script src="{{ url('vendor/adminlte/plugins/select2/select2.min.js') }}"></script>
    <script src="{{url('js/custombox.legacy.min.js')}}" charset="utf-8"></script>
    <script src="{{url('js/custom.js')}}" charset="utf-8"></script>
    <script type="text/javascript">
    $(document).ready(function(){

        //Initialize Select2 Elements
        $(".select2").select2();

        $("#toDashboard").click(function(){
            $("#dashboard").show();
            $("#anggota").hide();
            $("#proposal").hide();
        });

        $("#toAnggota").click(function(){
            console.log("ini angota");
            $("#dashboard").hide();
            $("#anggota").show();
            $("#proposal").hide();
        });
        $("#toProposal").click(function(){
            $("#dashboard").hide();
            $("#anggota").hide();
            $("#proposal").show();
        });
    });
    </script>

    <script src="{{url('js/navbar.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
  </body>
</html>
