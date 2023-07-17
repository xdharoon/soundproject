
<!DOCTYPE html>
<html lang="zxx">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>Sound</title>
<link rel="icon" href="{{url('public/img/logo.png')}}" type="image/png">

<link rel="stylesheet" href="{{url('public/css/bootstrap1.min.css')}}" />

<link rel="stylesheet" href="{{url('public/vendors/themefy_icon/themify-icons.css')}}" />

<link rel="stylesheet" href="{{url('public/vendors/swiper_slider/css/swiper.min.css')}}" />

<link rel="stylesheet" href="{{url('public/vendors/select2/css/select2.min.css')}}" />

<link rel="stylesheet" href="{{url('public/vendors/niceselect/css/nice-select.css')}}" />

<link rel="stylesheet" href="{{url('public/vendors/owl_carousel/css/owl.carousel.css')}}" />

<link rel="stylesheet" href="{{url('public/vendors/gijgo/gijgo.min.css')}}" />

<link rel="stylesheet" href="{{url('public/vendors/font_awesome/css/all.min.css')}}" />
<link rel="stylesheet" href="{{url('public/vendors/tagsinput/tagsinput.css')}}" />

<link rel="stylesheet" href="{{url('public/vendors/datatable/css/jquery.dataTables.min.css')}}" />
<link rel="stylesheet" href="{{url('public/vendors/datatable/css/responsive.dataTables.min.css')}}" />
<link rel="stylesheet" href="{{url('public/vendors/datatable/css/buttons.dataTables.min.css')}}" />

<link rel="stylesheet" href="{{url('public/vendors/text_editor/summernote-bs4.css')}}" />

<link rel="stylesheet" href="{{url('public/vendors/morris/morris.css')}}">

<link rel="stylesheet" href="{{url('public/vendors/material_icon/material-icons.css')}}" />

<link rel="stylesheet" href="{{url('public/css/metisMenu.css')}}">

<link rel="stylesheet" href="{{url('public/css/style1.css')}}" />
<link rel="stylesheet" href="{{url('public/css/colors/default.css')}}" id="colorSkinCSS">
</head>
<body class="crm_body_bg">



<nav class="sidebar">
<div class="logo d-flex justify-content-between">
<a href="index.html"><img src="public/img/logo.png" alt></a>
<div class="sidebar_close_icon d-lg-none">
<i class="ti-close"></i>
</div>
</div>
<ul id="sidebar_menu">
<li class="mm-active">
<a class="has-arrow" href="#" aria-expanded="false">

<img src="public/img/menu-icon/1.svg" alt>
<span> Add Song Category   </span>
</a>
<ul>
<li><a class="active" href="index.html">Song Category List</a></li>
<li><a href="index_2.html">Song Category Insert</a></li>
</ul>
</li>
<li class="mm-active">
<a class="has-arrow" href="#" aria-expanded="false">

<img src="public/img/menu-icon/1.svg" alt>
<span> Add Song </span>
</a>
<ul>
<li><a class="active" href="index.html">   Song List</a></li>
<li><a href="index_2.html"> Insert Song</a></li>
</ul>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<img src="public/img/menu-icon/2.svg" alt>
<span>user</span>
</a>
<ul>
<li><a href="login.html">Login</a></li>
<li><a href="resister.html">Register</a></li>
<li><a href="forgot_pass.html">Forgot Password</a></li>
</ul>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<img src="public/img/menu-icon/3.svg" alt>
<span>Applications</span>
</a>
<ul>
<li><a href="mail_box.html">Mail Box</a></li>
<li><a href="chat.html">Chat</a></li>
<li><a href="faq.html">FAQ</a></li>
</ul>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<img src="public/img/menu-icon/4.svg" alt>
<span>UI Component</span>
</a>
<ul>
<li><a href="#">Elements</a>
<ul>
<li><a href="buttons.html">Buttons</a></li>
<li><a href="dropdown.html">Dropdowns</a></li>
<li><a href="Badges.html">Badges</a></li>
<li><a href="Loading_Indicators.html">Loading Indicators</a></li>
</ul>
</li>
<li><a href="#">Components</a>
<ul>
<li><a href="notification.html">Notifications</a></li>
<li><a href="progress.html">Progress Bar</a></li>
<li><a href="carousel.html">Carousel</a></li>
<li><a href="cards.html">cards</a></li>
<li><a href="Pagination.html">Pagination</a></li>
</ul>
</li>
</ul>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<img src="public/img/menu-icon/5.svg" alt>
<span>Widgets</span>
</a>
<ul>
<li><a href="chart_box_1.html">Chart Boxes 1</a></li>
<li><a href="profilebox.html">Profile Box</a></li>
</ul>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<img src="public/img/menu-icon/6.svg" alt>
<span>Forms</span>
</a>
<ul>
<li><a href="#">Elements</a>
<ul>
<li><a href="data_table.html">Data Tables</a></li>
<li><a href="bootstrap_table.html">Grid Tables</a></li>
<li><a href="datepicker.html">Date Picker</a></li>
</ul>
</li>
<li><a href="#">Widgets</a>
<ul>
<li><a href="Input_Selects.html">Input Selects</a></li>
<li><a href="Input_Mask.html">Input Mask</a></li>
</ul>
</li>
</ul>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<img src="public/img/menu-icon/7.svg" alt>
<span>Charts</span>
</a>
<ul>
<li><a href="chartjs.html">ChartJS</a></li>
<li><a href="apex_chart.html">Apex Charts</a></li>
<li><a href="chart_sparkline.html">chart sparkline</a></li>
</ul>
</li>
</ul>
</nav>


@yield('content')


<script src="{{url('public/js/jquery1-3.4.1.min.js')}}"></script>

<script src="{{url('public/js/popper1.min.js')}}"></script>

<script src="{{url('public/js/bootstrap1.min.js')}}"></script>

<script src="{{url('public/js/metisMenu.js')}}"></script>

<script src="{{url('public/vendors/count_up/jquery.waypoints.min.js')}}"></script>

<script src="{{url('public/vendors/chartlist/Chart.min.js')}}"></script>

<script src="{{url('public/vendors/count_up/jquery.counterup.min.js')}}"></script>

<script src="{{url('public/vendors/swiper_slider/js/swiper.min.js')}}"></script>

<script src="{{url('public/vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>

<script src="{{url('public/public/vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{url('public/vendors/gijgo/gijgo.min.js')}}"></script>

<script src="{{url('public/vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('public/vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('public/vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('public/vendors/datatable/js/buttons.flash.min.js')}}"></script>
<script src="{{url('public/vendors/datatable/js/jszip.min.js')}}"></script>
<script src="{{url('public/vendors/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{url('public/vendors/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{url('public/vendors/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{url('public/vendors/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{url('public/js/chart.min.js')}}"></script>

<script src="{{url('public/vendors/progressbar/jquery.barfiller.js')}}"></script>

<script src="{{url('public/vendors/tagsinput/tagsinput.js')}}"></script>

<script src="{{url('public/vendors/text_editor/summernote-bs4.js')}}"></script>
<script src="{{url('public/vendors/apex_chart/apexcharts.js')}}"></script>

<script src="{{url('public/js/custom.js')}}"></script>

<script src="{{url('public/js/active_chart.js')}}"></script>
<script src="{{url('public/vendors/apex_chart/radial_active.js')}}"></script>
<script src="{{url('public/vendors/apex_chart/stackbar.js')}}"></script>
<script src="{{url('public/vendors/apex_chart/area_chart.js')}}"></script>

<script src="{{url('public/vendors/apex_chart/bar_active_1.js')}}"></script>
<script src="{{url('public/vendors/chartjs/chartjs_active.js')}}"></script>


