
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carbon - Admin Template</title>
    <link rel="stylesheet" href="{{asset('public/assets/admin/./vendor/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/admin/./vendor/font-awesome/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/admin/./css/styles.css')}}">
    <!--TinyMC link -->
    <script src="{{asset('public/assets/admin/vendor/tinymce/js/tinymce/tinymce.min.js')}}"></script>
    
</head>
<body class="sidebar-fixed header-fixed">
<div class="page-wrapper">
    <nav class="navbar page-header">
        <a href="#" class="btn btn-link sidebar-mobile-toggle d-md-none mr-auto">
            <i class="fa fa-bars"></i>
        </a>

        <a class="navbar-brand" href="#">
            <img src="{{asset('public/assets/admin/')}}/./imgs/logo.png" alt="logo">
        </a>

        <a href="#" class="btn btn-link sidebar-toggle d-md-down-none">
            <i class="fa fa-bars"></i>
        </a>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item d-md-down-none">
                <a href="#">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-pill badge-danger">5</span>
                </a>
            </li>

            <li class="nav-item d-md-down-none">
                <a href="#">
                    <i class="fa fa-envelope-open"></i>
                    <span class="badge badge-pill badge-danger">5</span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('public/assets/admin/')}}/./imgs/avatar-1.png" class="avatar avatar-sm" alt="logo">
                    <span class="small ml-1 d-md-down-none">
                    <?php

                    $loggedin_user = Session::get('admin_name');

                    if($loggedin_user){
                        echo  $loggedin_user;
                        Session::put('admin_name','');
                    }

                    ?>
                    </span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header">Account</div>

                    <a href="#" class="dropdown-item">
                        <i class="fa fa-user"></i> Profile
                    </a>

                    <a href="#" class="dropdown-item">
                        <i class="fa fa-envelope"></i> Messages
                    </a>

                    <div class="dropdown-header">Settings</div>

                    <a href="#" class="dropdown-item">
                        <i class="fa fa-bell"></i> Notifications
                    </a>

                    <a href="#" class="dropdown-item">
                        <i class="fa fa-wrench"></i> Settings
                    </a>

                    <a href="{{url('/logout')}}" class="dropdown-item">
                        <i class="fa fa-lock"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>

    <div class="main-container">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-title">Navigation</li>

                    <li class="nav-item">
                        <a href="{{url('/dashboard')}}" class="nav-link active">
                            <i class="icon icon-speedometer"></i> Dashboard
                        </a>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a href="{{url('/manage-category')}}" class="nav-link nav-dropdown-toggle">
                            <i class="icon icon-target"></i> Categories <i class="fa fa-caret-left"></i>
                        </a>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="{{url('/add-category')}}" class="nav-link">
                                    <i class="icon icon-target"></i> Add Category
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{url('/manage-category')}}" class="nav-link">
                                    <i class="icon icon-target"></i> Manage Category
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a href="{{url('/manage-subcategory')}}" class="nav-link nav-dropdown-toggle">
                            <i class="icon icon-energy"></i> Sub Categories <i class="fa fa-caret-left"></i>
                        </a>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="{{url('/add-subcategory')}}" class="nav-link">
                                    <i class="icon icon-energy"></i> Add Sub Categories
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{url('/manage-manufacturer')}}" class="nav-link">
                                    <i class="icon icon-energy"></i> Manage Sub Category
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a href="{{url('\manage-manufacturer')}}" class="nav-link nav-dropdown-toggle">
                            <i class="icon icon-graph"></i>Manufacturers <i class="fa fa-caret-left"></i>
                        </a>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="{{url('/add-manufacturer')}}" class="nav-link">
                                    <i class="icon icon-graph"></i> Add Manufacturer
                                </a>
                            </li>
                        </ul>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="{{url('/manage-manufacturer')}}" class="nav-link">
                                    <i class="icon icon-graph"></i> Manage Manufacturer
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a href="{{url('\manage-product')}}" class="nav-link nav-dropdown-toggle">
                            <i class="icon icon-graph"></i>Products <i class="fa fa-caret-left"></i>
                        </a>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="{{url('/add-product')}}" class="nav-link">
                                    <i class="icon icon-graph"></i> Add Product
                                </a>
                            </li>
                        </ul>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="{{url('/manage-product')}}" class="nav-link">
                                    <i class="icon icon-graph"></i> Manage Product
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a href="{{url('\manage-slider')}}" class="nav-link nav-dropdown-toggle">
                            <i class="icon icon-graph"></i>Slider <i class="fa fa-caret-left"></i>
                        </a>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="{{url('/add-slider')}}" class="nav-link">
                                    <i class="icon icon-graph"></i> Add Slider
                                </a>
                            </li>
                        </ul>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="{{url('/manage-slider')}}" class="nav-link">
                                    <i class="icon icon-graph"></i> Manage Slider
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="forms.html" class="nav-link">
                            <i class="icon icon-puzzle"></i> Forms
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="tables.html" class="nav-link">
                            <i class="icon icon-grid"></i> Tables
                        </a>
                    </li>

                    <li class="nav-title">More</li>

                    <li class="nav-item nav-dropdown">
                        <a href="#" class="nav-link nav-dropdown-toggle">
                            <i class="icon icon-umbrella"></i> Pages <i class="fa fa-caret-left"></i>
                        </a>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="blank.html" class="nav-link">
                                    <i class="icon icon-umbrella"></i> Blank Page
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="login.html" class="nav-link">
                                    <i class="icon icon-umbrella"></i> Login
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="register.html" class="nav-link">
                                    <i class="icon icon-umbrella"></i> Register
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="invoice.html" class="nav-link">
                                    <i class="icon icon-umbrella"></i> Invoice
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="404.html" class="nav-link">
                                    <i class="icon icon-umbrella"></i> 404
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="500.html" class="nav-link">
                                    <i class="icon icon-umbrella"></i> 500
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="settings.html" class="nav-link">
                                    <i class="icon icon-umbrella"></i> Settings
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="content">
            @yield('admin_content')
        </div>
    </div>
</div>
<script src="{{asset('public/assets/admin/./vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('public/assets/admin/./vendor/popper.js/popper.min.js')}}"></script>
<script src="{{asset('public/assets/admin/./vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/assets/admin/./vendor/chart.js/chart.min.js')}}"></script>
<script src="{{asset('public/assets/admin/./js/carbon.js')}}"></script>
<script src="{{asset('public/assets/admin/./js/demo.js')}}"></script>
</body>
</html>
