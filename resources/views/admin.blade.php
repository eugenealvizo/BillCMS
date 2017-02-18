<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('title')
    <!-- Bootstrap Core CSS -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{url('css/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{url('css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{url('css/morris.css')}}" rel="stylesheet">

    <link href="{{url('css/jquery.tagit.css')}}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet">

    <link href="{{url('css/tagit.ui-zendesk.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{url('js/tinymce/js/tinymce.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('js/bootstrap.min.js')}}"></script>

    <link href="{{url('js/select2/dist/css/select2.min.css')}}" rel="stylesheet" />
    <script src="{{url('js/select2/dist/js/select2.min.js')}}"></script>

    <link href="{{url('js/datepicker/jquery.datetimepicker.css')}}" rel="stylesheet" />
    <script src="{{url('js/datepicker/jquery.datetimepicker.js')}}"></script>





    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{url('js/metisMenu.min.js')}}"></script>
    <!-- TAG-IT -->
    <script src="{{url('js/tag-it.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{url('js/admin.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{url('js/sb-admin-2.js')}}"></script>

</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/admin')}}">CAMAYA ADMIN</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="" href="{{url('/logout')}}">
                        <i class="fa fa fa-sign-out fa-fw"></i>Logout
                    </a>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{url('admin')}}"><i class="fa fa-file-text" aria-hidden="true"></i> Homepage Contents </a>
                        </li> 
                       <li>
                            <a href="{{url('admin/subscribers')}}"><i class="fa fa-file-text" aria-hidden="true"></i> Subscribers</a>
                       </li>
                       <li>
                            <a href="{{url('admin/bill-a-subscriber')}}"><i class="fa fa-file-text" aria-hidden="true"></i> Bill A Subsriber</a>
                       </li>
                       <li>
                            <a href="{{url('admin/categories')}}"><i class="fa fa-file-text" aria-hidden="true"></i> Category</a>
                       </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
          @yield('content')
        </div>
    </div>
    <!-- jQuery -->
    <script type="text/javascript">
    var baseurl = '{{url("/")}}';
    var module  = '{{Request::segment(1)}}';
    var method  = '{{Request::segment(2)}}';
    var dataid  = '{{Request::segment(3)}}';
    var aid     = '{{Request::segment(5)}}';
    var imgids  = '{{Request::segment(6)}}';
    var commid  = '{{Request::segment(4)}}'
    </script>
    

</body>

</html>
