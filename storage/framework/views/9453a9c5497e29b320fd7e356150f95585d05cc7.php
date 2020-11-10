<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Tabasco Restaurats | Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="template-adminLTE/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="template-adminLTE/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="template-adminLTE/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="template-adminLTE/css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="template-adminLTE/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="template-adminLTE/img/favicon.ico">

    <style>
        .content-wrapper {
          background-image: url('/images/eclipse_dlp_cover.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
        }
    </style>

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="/" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>L</b>C</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Tabasco Restaurats</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">Online</small>
                  <span class="hidden-xs">Salas Challco DKT Luis Marin</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">

                    <p>
                      WZP
                      <small>02.01.2018</small>
                    </p>
                  </li>

                  <!-- Menu Footer-->
                  <li class="user-footer">

                    <div class="pull-right">

                      
                      <a href="<?php echo e(route('logout')); ?>" class="btn btn-default btn-flat"
                                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                        <?php echo e(__('logout')); ?>

                      </a>
                      <form id="logout-form" class="" action="<?php echo e(route('logout')); ?>" method="post" style="display: none;">
                          <?php echo csrf_field(); ?>
                      </form>
                    </div>
                  </li>
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
          <!-- Sidebar user panel -->

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Pets</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-circle-o"></i> Cats</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Breeds</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-circle-o"></i> Breeds</a></li>
              </ul>
            </li>

            <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Help</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>About...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Tabasco Restaurats - System</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12">
		                          <!--Contenido-->
                              <?php echo $__env->yieldContent('contenido'); ?>
		                          <!--Fin Contenido-->
                           </div>
                       </div>

                  	</div>
                  </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.1.18
        </div>
        <strong>Copyright &copy; 2020 Todos los derechos reservados. Salas Challco DKT Luis M. <a href="#">sofichin3000@hotmail.com</a>.</strong>&reg; All rights reserved.
      </footer>

    <!-- laravel mix app.js -->
    <script src="/js/app.js" charset="utf-8"></script>
    <!-- jQuery 2.1.4 -->
    <script src="template-adminLTE/js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="template-adminLTE/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="template-adminLTE/js/app.min.js"></script>

  </body>
</html>
<?php /**PATH /home/DKTvirt/Documentos/proyecto_rest_laravel/Proyecto_Restaurante/resources/views/layouts/admin.blade.php ENDPATH**/ ?>