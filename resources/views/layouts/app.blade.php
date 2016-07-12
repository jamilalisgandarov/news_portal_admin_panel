<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">

  <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
  <!-- iCheck -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Panel</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        @if(\Auth::user()->status==0 )

         <li class=" notifications-menu">
            <a href="/requests" >
              <i class="fa fa-user-plus" aria-hidden="true"></i>
              @if(count(App\Author::all())!=0)
              <span class="label label-warning">{{count(App\Author::all())}}</span>
              @endif
            </a>
          </li>
          @endif
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">   
              @if(!Auth::guest())
                   {{\Auth::user()->first_name}} {{\Auth::user()->last_name}}
                @else
                @endif
                &nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i>
              </span>
            </a>
            <ul class="dropdown-menu" style="width:0 !important">
              <!-- Menu Body -->
              <li >
                  <a href="#" data-toggle="modal" data-target="#gridSystemModal" class=" dropdown-item btn-default ">Sign out</a> </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
   
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
              <a href="/">
                <i class="fa fa-newspaper-o" aria-hidden="true"></i></i> <span>News</span>
                       <span class="label label-default pull-right">{{count(App\News::all())}}</span>
              </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="/">
                <i class="fa fa-file-text-o" aria-hidden="true"></i><span>All News</span>
              </a>
            </li>  
            <li class="treeview">
              <a href="/news/add">
                <i class="fa fa-plus" aria-hidden="true"></i> <span>Add News</span>

              </a>
            </li>           
          </ul>
        </li>
         @if(\Auth::user()->status==0)
        <li class="treeview">
          <a href="/requests">
            <i class="fa fa-user-plus" aria-hidden="true"></i> <span>Author Requests</span>
          </a>
        </li>
        <li class="treeview">
          <a href="/editorsInfo">
      <i class="fa fa-user" aria-hidden="true"></i> <span>Authors</span>
          </a>
        </li>
        <li class="treeview">
              <a href="/">
                <i class="fa fa-files-o" aria-hidden="true"></i> <span>Category</span>
              </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="/category">
                <i class="fa fa-th-list" aria-hidden="true"></i></i> <span>All Categories</span>
              </a>
            </li>
            <li class="treeview">
              <a href="/add/category">
                <i class="fa fa-plus" aria-hidden="true"></i></i> <span>Add Category</span>
              </a>
            </li>             
          </ul>
        </li>

       @endif


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">{{Request::path()}}</li>
      </ol>
    </section>

    <!-- Main content -->
  
@yield('content')


  
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<!-- jQuery 2.2.3 -->
<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/app.min.js"></script>

 <div class="modal fade" tabindex="-1" role="dialog" id="gridSystemModal" aria-labelledby="gridSystemModalLabel">
             <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">Warning</h4>
            </div>
            <div class="modal-body">
            <span>     Do you want to <b> sign out </b> ? </span>
            </div>
            <div class="modal-footer">
            <a  href='/logout'>
                <button type="button" class="btn btn-danger">Sign Out</button>
            </a>
            <button type="button" class="btn btn-primary"  data-dismiss="modal">Back</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</body>
</html>
