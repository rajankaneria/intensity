<?php
if(!$_SESSION['login_user']) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <link href="../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="assets/css/themes/all-themes.css" rel="stylesheet" />
    
    <!--=============== ALL SCRIPT ==================-->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="assets/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="assets/plugins/raphael/raphael.min.js"></script>
    <script src="assets/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="assets/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="assets/plugins/flot-charts/jquery.flot.js"></script>
    <script src="assets/plugins/flot-charts/jquery.flot.resize.js"></script>
    
    <script src="assets/plugins/flot-charts/jquery.flot.categories.js"></script>
    
    <!-- Sparkline Chart Plugin Js -->
    <script src="assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
    <!--=============== OVER SCRIPT ================-->
    
    
    
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">INTENSITY - Fitness</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
<!--            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
            </div>-->
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="join_us.php">
                            <i class="material-icons">layers</i>
                            <span>Join Us</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="happy.php">
                            <i class="material-icons">layers</i>
                            <span>Add Happy Clients</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/forms/basic-form-elements.html">Basic Form Elements</a>
                            </li>
                            <li>
                                <a href="pages/forms/advanced-form-elements.html">Advanced Form Elements</a>
                            </li>
                            <li>
                                <a href="pages/forms/form-examples.html">Form Examples</a>
                            </li>
                            <li>
                                <a href="pages/forms/form-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="pages/forms/form-wizard.html">Form Wizard</a>
                            </li>
                            <li>
                                <a href="pages/forms/editors.html">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Tables</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/tables/normal-tables.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="pages/tables/jquery-datatable.html">Jquery Datatables</a>
                            </li>
                            <li>
                                <a href="pages/tables/editable-table.html">Editable Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">perm_media</i>
                            <span>Medias</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/medias/image-gallery.html">Image Gallery</a>
                            </li>
                            <li>
                                <a href="pages/medias/carousel.html">Carousel</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span>Example Pages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/examples/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="pages/examples/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="pages/examples/forgot-password.html">Forgot Password</a>
                            </li>
                            <li>
                                <a href="pages/examples/blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="pages/examples/404.html">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="pages/examples/500.html">500 - Server Error</a>
                            </li>
                        </ul>
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
                    <li class="header">More</li>
                    <li>
                     <li>
                         <a href="logout.php">
                            <i class="material-icons">input</i>
                            <span>Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
    </section>
