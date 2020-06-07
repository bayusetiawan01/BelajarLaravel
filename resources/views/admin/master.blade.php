<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Mipa Bersatu</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('/images/icons/favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="{{ asset('/fonts/roboto/roboto.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/fonts/material-icon/material.css') }}" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('/vendor/bootstrap-admin/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('/vendor/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('/vendor/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ asset('/vendor/morrisjs/morris.css') }}" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="{{ asset('/vendor/dropzone/dropzone.css') }}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('/css/themes/all-themes.css') }}" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar" style="background-color:firebrick">
        <div class="container-fluid" style="display:block">
            <div class="navbar-header" style="padding: 0px; padding-bottom:0px; margin-bottom:0px">
                <a href="javascript:void(0);" class="bars" style="top:0 !important"></a>
                <a class="navbar-brand" style="float:left" href="/admin">Mipa Bersatu</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar" style="top: 60px;">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{ asset('/images/profile/user.png') }}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$nama}}</div>
                    <div class="email">{{$email}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">lock</i>Ubah Password</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Edit Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li>
                        <a href="/admin">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/materi">
                            <i class="material-icons">assignment</i>
                            <span>Materi Dibuat</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">trending_down</i>
                            <span>Multi Level Menu</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item - 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Level - 2</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <span>Level - 3</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <span>Level - 4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/logout">
                            <i class="material-icons">input</i>
                            <span>Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <!-- #Start# Section Isi -->
    @yield('isi')

    <!-- Jquery Core Js -->
    <script src="{{ asset('/vendor/admin-jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('/vendor/bootstrap-admin/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ asset('/vendor/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('/vendor/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('/vendor/node-waves/waves.js') }}"></script>

    <!-- Ckeditor -->
    <script src="{{ asset('/vendor/ckeditor/ckeditor.js') }}"></script>

    <!-- Autosize Plugin Js -->
    <script src="{{ asset('/vendor/autosize/autosize.js') }}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{ asset('/vendor/momentjs/moment.js') }}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{ asset('/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="{{ asset('/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('/js/admin.js') }}"></script>
    <script src="{{ asset('/js/pages/index.js') }}"></script>
    <script src="{{ asset('/js/pages/forms/editors.js') }}"></script>
    <script src="{{ asset('/js/pages/forms/basic-form-elements.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ asset('/js/demo.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('/vendor/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ asset('/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('/vendor/morrisjs/morris.js') }}"></script>

    <!-- ChartJs -->
    <script src="{{ asset('/vendor/chartjs/Chart.bundle.js') }}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{ asset('/vendor/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('/vendor/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('/vendor/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('/vendor/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('/vendor/flot-charts/jquery.flot.time.js') }}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('/vendor/jquery-sparkline/jquery.sparkline.js') }}"></script>

</body>

</html>