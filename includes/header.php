<?php 
    session_start();
    if(!isset($_SESSION["user_info"])){
        header('Location: dangnhap.html');
    }else{
        require_once '../module/m_user.php';
        $username=$_SESSION["user_info"];
        $m_user = new m_user();
        $user_info=$m_user->user_info($username);
        $role=$user_info->role;    
    }
 ?>
<!doctype html>
<!--[if lt IE 8]><html class="no-js lt-ie8"> <![endif]-->
<html class="no-js">

<head>
    <meta charset="utf-8">
    <title>Remember1st|Quản Lí</title>
    <!-- Mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Force IE9 to render in normal mode -->
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="author" content="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="application-name" content="" />
    <!-- Import google fonts - Heading first/ text second -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type="text/css">
    <!-- Css files -->
    <!-- Icons -->
    <link href="css/icons.css" rel="stylesheet" />
    <!-- Bootstrap stylesheets (included template modifications) -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- Plugins stylesheets (all plugin custom css) -->
    <link href="css/plugins.css" rel="stylesheet" />
    <!-- Main stylesheets (template main css file) -->
    <link href="css/main.css" rel="stylesheet" />
    <!-- Custom stylesheets ( Put your own changes here ) -->
    <link href="css/custom.css" rel="stylesheet" />
    <!-- Fav and touch icons -->
    <link rel="icon" href="http://demos.getbootstrapkit.com/supr/img/ico/favicon.ico" type="image/png">
    <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
    <meta name="msapplication-TileColor" content="#3399cc" />
    <script src="js/jquery-2.1.1.min.js"></script>
</head>

    <body>
        <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        <!-- .#header -->
        <div id="header">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                Remember1st<span class="slogan">.</span>
            </a>
                </div>
                <div id="navbar-no-collapse" class="navbar-no-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <!--Sidebar collapse button-->
                            <a href="index.html#" class="collapseBtn leftbar"><i class="s16 minia-icon-list-3"></i></a>
                        </li>
                        <li>
                            <a href="index.html#" class="tipB reset-layout" title="Reset panel postions"><i class="s16 icomoon-icon-history"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="s16 icomoon-icon-cog-2"></i><span class="txt"> Settings</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu left dropdown-form template-settings">
                                <li class="menu">
                                    <ul role="menu">
                                        <li><strong>Template settings</strong>
                                        </li>
                                        <li>
                                            <div class="toggle-custom">
                                                <label class="toggle" data-on="ON" data-off="OFF">
                                                    <input type="checkbox" id="fixed-header-toggle" name="fixed-header-toggle" checked>
                                                    <span class="button-checkbox"></span>
                                                </label>
                                                <label for="fixed-header-toggle">Fixed header</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="toggle-custom">
                                                <label class="toggle" data-on="ON" data-off="OFF">
                                                    <input type="checkbox" id="fixed-left-sidebar" name="fixed-left-sidebar" checked>
                                                    <span class="button-checkbox"></span>
                                                </label>
                                                <label for="fixed-left-sidebar">Fixed Left Sidebar</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="toggle-custom">
                                                <label class="toggle" data-on="ON" data-off="OFF">
                                                    <input type="checkbox" id="fixed-right-sidebar" name="fixed-right-sidebar" checked>
                                                    <span class="button-checkbox"></span>
                                                </label>
                                                <label for="fixed-right-sidebar">Fixed Right Sidebar</label>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="s16 minia-icon-envelope"></i><span class="txt">Messages</span><span class="notification">8</span>
                            </a>
                            <ul class="dropdown-menu left">
                                <li class="menu">
                                    <ul class="messages">
                                        <li class="header"><strong>Messages</strong> (10) emails and (2) PM</li>
                                        <li>
                                            <span class="icon"><i class="s16 icomoon-icon-user-plus"></i></span>
                                            <span class="name"><a data-toggle="modal" href="index.html#myModal1"><strong>Sammy Morerira</strong></a><span class="time">35 min ago</span></span>
                                            <span class="msg">I have question about new function ...</span>
                                        </li>
                                        <li>
                                            <span class="icon avatar"><img src="img/avatar.jpg" alt="" /></span>
                                            <span class="name"><a data-toggle="modal" href="index.html#myModal1"><strong>George Michael</strong></a><span class="time">1 hour ago</span></span>
                                            <span class="msg">I need to meet you urgent please call me ...</span>
                                        </li>
                                        <li>
                                            <span class="icon"><i class="s16 icomoon-icon-envelop"></i></span>
                                            <span class="name"><a data-toggle="modal" href="index.html#myModal1"><strong>Ivanovich</strong></a><span class="time">1 day ago</span></span>
                                            <span class="msg">I send you my suggestion, please look and ...</span>
                                        </li>
                                        <li class="view-all"><a href="index.html#">View all messages <i class="s16 fa fa-angle-double-right"></i></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-right usernav">
                        <li class="dropdown">
                            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="s16 icomoon-icon-earth"></i><span class="notification">3</span>
                            </a>
                            <ul class="dropdown-menu right">
                                <li class="menu">
                                    <ul class="notif">
                                        <li class="header"><strong>Notifications</strong> (3) items</li>
                                        <li>
                                            <a href="index.html#">
                                                <span class="icon"><i class="s16 icomoon-icon-user-plus"></i></span>
                                                <span class="event">1 User is registred</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.html#">
                                                <span class="icon"><i class="s16 icomoon-icon-bubble-3"></i></span>
                                                <span class="event">Jony add 1 comment</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.html#">
                                                <span class="icon"><i class="s16 icomoon-icon-new"></i></span>
                                                <span class="event">admin Julia added post with a long description</span>
                                            </a>
                                        </li>
                                        <li class="view-all"><a href="index.html#">View all notifications <i class="s16 fa fa-angle-double-right"></i></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="index.html#" class="dropdown-toggle avatar" data-toggle="dropdown">
                                <img src="img/avatar.jpg" alt="" class="image" />
                                <span class="txt">admin@supr.com</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu right">
                                <li class="menu">
                                    <ul>
                                        <li><a href="index.html#"><i class="s16 icomoon-icon-user-plus"></i>Edit profile</a>
                                        </li>
                                        <li><a href="index.html#"><i class="s16 icomoon-icon-bubble-2"></i>Comments</a>
                                        </li>
                                        <li><a href="index.html#"><i class="s16 icomoon-icon-plus"></i>Add user</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="dangxuat.html"><i class="s16 icomoon-icon-exit"></i><span class="txt"> Logout</span></a>
                        </li>
                        <li><a id="toggle-right-sidebar" href="index.html#"><i class="s16 icomoon-icon-indent-increase"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </nav>
            <!-- /navbar -->
        </div>
        <!-- / #header -->
        <div id="wrapper">
			<!-- #wrapper -->
            <!--Sidebar background-->
            <div id="sidebarbg" class="hidden-lg hidden-md hidden-sm hidden-xs"></div>
            <!--Sidebar content-->
            <div id="sidebar" class="page-sidebar hidden-lg hidden-md hidden-sm hidden-xs">
                <div class="shortcuts">
                    <ul>
                        <li><a href="#" title="Support section" class="tip"><i class="s24 icomoon-icon-support"></i></a>
                        </li>
                        <li><a href="index.html#" title="Database backup" class="tip"><i class="s24 icomoon-icon-database"></i></a>
                        </li>
                        <li><a href="#" title="Sales statistics" class="tip"><i class="s24 icomoon-icon-pie-2"></i></a>
                        </li>
                        <li><a href="index.html#" title="Write post" class="tip"><i class="s24 icomoon-icon-pencil"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-inner">
                    <!-- Start .sidebar-scrollarea -->
                    <div class="sidebar-scrollarea">
                        <div class="sidenav">
                            <div class="sidebar-widget mb0">
                                <h6 class="title mb0">Navigation</h6>
                            </div>
                            <!-- End .sidenav-widget -->
                            <div class="mainnav">
                                <ul>
                                    <li><a href="index.html"><i class="s16 icomoon-icon-screen-2"></i><span class="txt">Dashboard</span> </a>
                                    </li>
                                    <li>
                                        <a href="cm.html"><i class="fa fa-list"></i><span class="txt">Categories</span></a>
                                    </li>                                    
                                    <li>
                                        <a href="#"><i class="fa fa-users"></i><span class="txt">Secured Place</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End sidenav -->
                        <div class="sidebar-widget">
                            <h6 class="title">Monthly Bandwidth Transfer</h6>
                            <div class="content clearfix">
                                <i class="s16 icomoon-icon-loop pull-left mr10"></i>
                                <div class="progress progress-bar-xs pull-left mt5 tip" title="87%">
                                    <div class="progress-bar progress-bar-danger" style="width: 87%;"></div>
                                </div>
                                <span class="percent pull-right">87%</span>
                                <div class="stat">19419.94 / 12000 MB</div>
                            </div>
                        </div>
                        <!-- End .sidenav-widget -->
                        <div class="sidebar-widget">
                            <h6 class="title">Disk Space Usage</h6>
                            <div class="content clearfix">
                                <i class="s16  icomoon-icon-storage-2 pull-left mr10"></i>
                                <div class="progress progress-bar-xs pull-left mt5 tip" title="16%">
                                    <div class="progress-bar progress-bar-success" style="width: 16%;"></div>
                                </div>
                                <span class="percent pull-right">16%</span>
                                <div class="stat">304.44 / 8000 MB</div>
                            </div>
                        </div>
                        <!-- End .sidenav-widget -->
                        <div class="sidebar-widget">
                            <h6 class="title">Ad sense stats</h6>
                            <div class="content">
                                <div class="stats">
                                    <div class="item">
                                        <div class="head clearfix">
                                            <div class="txt">Advert View</div>
                                        </div>
                                        <i class="s16 icomoon-icon-eye pull-left"></i>
                                        <div class="number">21,501</div>
                                        <div class="change">
                                            <i class="s24 icomoon-icon-arrow-up-2 color-green"></i>
                                            5%
                                        </div>
                                        <span id="stat1" class="spark"></span>
                                    </div>
                                    <div class="item">
                                        <div class="head clearfix">
                                            <div class="txt">Clicks</div>
                                        </div>
                                        <i class="s16 icomoon-icon-thumbs-up pull-left"></i>
                                        <div class="number">308</div>
                                        <div class="change">
                                            <i class="s24 icomoon-icon-arrow-down-2 color-red"></i>
                                            8%
                                        </div>
                                        <span id="stat2" class="spark"></span>
                                    </div>
                                    <div class="item">
                                        <div class="head clearfix">
                                            <div class="txt">Page CTR</div>
                                        </div>
                                        <i class="s16 icomoon-icon-heart pull-left"></i>
                                        <div class="number">4%</div>
                                        <div class="change">
                                            <i class="s24 icomoon-icon-arrow-down-2 color-red"></i>
                                            1%
                                        </div>
                                        <span id="stat3" class="spark"></span>
                                    </div>
                                    <div class="item">
                                        <div class="head clearfix">
                                            <div class="txt">Earn money</div>
                                        </div>
                                        <i class="s16 icomoon-icon-coin pull-left"></i>
                                        <div class="number">$376</div>
                                        <div class="change">
                                            <i class="s24 icomoon-icon-arrow-up-2 color-green"></i>
                                            26%
                                        </div>
                                        <span id="stat4" class="spark"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .sidenav-widget -->
                        <div class="sidebar-widget">
                            <h6 class="title">Right now</h6>
                            <div class="content">
                                <div class="rightnow">
                                    <ul class="list-unstyled">
                                        <li><span class="number">34</span><i class="s16 icomoon-icon-new"></i>Posts</li>
                                        <li><span class="number">7</span><i class="s16 icomoon-icon-file"></i>Pages</li>
                                        <li><span class="number">14</span><i class="s16 icomoon-icon-list-2"></i>Categories</li>
                                        <li><span class="number">201</span><i class="s16 icomoon-icon-tag"></i>Tags</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End .sidenav-widget -->
                    </div>
                    <!-- End .sidebar-scrollarea -->
                </div>
                <!-- End .sidebar-inner -->
            </div>
            <!-- End #sidebar -->        	