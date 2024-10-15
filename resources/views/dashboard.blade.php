<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>eBRGY</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('/assets/AdminLte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/AdminLte/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/AdminLte/bower_components/Ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/AdminLte/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/AdminLte/dist/css/skins/_all-skins.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/AdminLte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/AdminLte/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/AdminLte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/clockpicker.css') }}">
  @yield('style')
  <link rel="icon" href="{{ asset('img/logo.png') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-purple-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="index2.html" class="logo">
      <span class="logo-mini"><img src="{{ asset('img/logo.png') }}" height="30px"></span>
      <span class="logo-lg">EBRGY</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset(Auth::user()->Officer->Resident->image) }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{Auth::user()->Officer->Resident->firstName}} {{Auth::user()->Officer->Resident->lastName}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="{{ asset(Auth::user()->Officer->Resident->image) }}" class="img-circle" alt="User Image">
                
                <p>
                  {{Auth::user()->Officer->Resident->firstName}}  {{Auth::user()->Officer->Resident->lastName}}
                </p>
                <p>{{Auth::user()->Officer->position}}</p>
              </li>
              <li class="user-footer">
                <div class="text-center">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset(Auth::user()->Officer->Resident->image) }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->Officer->Resident->firstName}} {{Auth::user()->Officer->Resident->lastName}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i>{{Auth::user()->Officer->position}}</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        @if(Auth::user()->userRole == 1)
        <li><a href="{{ url('/admin') }}"><i class="fa fa-bar-chart"></i> <span>Dashboard</span></a></li>
        <li class="header">Resident Profiling</li>
        <li><a class="active" href="{{ url('/Resident') }}"><i class="fa fa-book"></i> <span>Constituent</span></a></li>
        <li><a href="{{ url('/Household') }}"><i class="fa fa-home"></i> <span>Household</span></a></li>
        <li class="header">Barangay Issues</li>
        <li><a href="{{ url('/Blotter') }}"><i class="fa fa-file"></i> <span>Blotter</span></a></li>
        <li class="header">Management</li>
        <li><a href="{{ url('/Business') }}"><i class="fa fa-briefcase"></i> <span>Business</span></a></li>
        <li><a href="{{ url('/Project') }}"><i class="fa fa-cogs"></i> <span>Barangay Projects</span></a></li>
        <li><a href="{{ url('/Schedule') }}"><i class="fa fa-calendar"></i> <span>Court Schedule</span></a></li>
        <li class="header">Queries & Reports</li>
        <li><a href="{{ url('/Query') }}"><i class="fa fa-list"></i> <span>Queries</span></a></li>
        <li><a href="{{ url('/Report') }}"><i class="fa fa-file"></i> <span>Reports</span></a></li>
        <li class="header">Utilities</li>
        <li><a href="{{ url('/Resident/NotResident') }}"><i class="fa fa-book"></i> <span>Non-resident</span></a></li>
        <li><a href="{{ url('/Officer') }}"><i class="fa fa-user"></i> <span>Officers</span></a></li>
        <li><a href="{{ url('/Backup') }}"><i class="fa fa-database"></i> <span>Back-up Database</span></a></li>
        @else
        <li><a href="{{ url('/admin') }}"><i class="fa fa-bar-chart"></i> <span>Dashboard</span></a></li>
        <li class="header">Barangay Issues</li>
        <li><a href="{{ url('/Blotter') }}"><i class="fa fa-file"></i> <span>Blotter</span></a></li>
        <li class="header">Management</li>
        <li><a href="{{ url('/Schedule') }}"><i class="fa fa-calendar"></i> <span>Court Schedule</span></a></li>
        @endif
      </ul>
    </section>
  </aside>

  <div class="content-wrapper">
    <section class="content">
      @yield('content')
    </section>
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
        {{ Carbon\Carbon::now()->toFormattedDateString()  }}<div id="timediv"></div>
    </div>
    <strong>Copyright &copy; 2018 Lapuz Family.</strong> All rights
    reserved.
  </footer>



<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('/assets/AdminLte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/assets/AdminLte/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('/assets/AdminLte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('/assets/AdminLte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script src="{{ asset('/assets/AdminLte/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{ asset('js/clockpicker.js') }}"></script>
<script src="{{ asset('input-mask/jquery.inputmask.bundle.js') }}"></script>
<script>
    $(document).ready(function() {
         $('#example').DataTable( {
         "scrollX": true,
         responsive: true
       } );

       $('.select2').select2();
       $('.clockpicker').clockpicker();
       $('.date').datepicker({
        format: 'yyyy-mm-dd',
       });

       var interval = setInterval(timestamphome, 1000);
        function timestamphome(){
        var date;
       date = new Date();
        var time = document.getElementById('timediv'); 
        time.innerHTML = date.toLocaleTimeString();
         }
    });
</script>
@yield('script')
</body>
</html>
