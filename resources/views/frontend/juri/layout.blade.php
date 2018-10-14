<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ url('img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Juri</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/css/animate.min.css') }}" rel="stylesheet"/>
    <link href="{{ url('assets/css/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet"/>
    <link href="{{ url('assets/css/demo.css') }}" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ url('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
  </head>
  <body>
        
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="{{ url('img/sidebar-5.jpg') }}">
            <div class="sidebar-wrapper">
                <div class="logo">
                <a href="/"><img src="{{ url('assets/img/tes.png') }}" width="200" align="center"></a>
                </div>
                <ul class="nav">
                    <li><a href="{{ url('juri') }}"> <i class="pe-7s-graph"></i><p>Dashboard</p> </a> </li>
                </ul>
            </div>
        </div>

        @yield('content')
    
        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.kmipn.pens.ac.id">KMIPN 2018</a>, Teknik Informatika Politeknik Elektronika Negeri Surabaya
                </p>
            </div>
        </footer>
    </div>

    <!--   Core JS Files   -->
    <script src="{{ url('assets/js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Charts Plugin -->
    <script src="{{ url('assets/js/chartist.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ url('assets/js/bootstrap-notify.js') }}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="{{ url('assets/js/light-bootstrap-dashboard.js?v=1.4.0') }}"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="{{ url('assets/js/demo.js') }}"></script>
  </body>
</html>
