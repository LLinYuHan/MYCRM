<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRM系统</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="assets/admin/css/lib/calendar/fullcalendar.css" rel="stylesheet" />
    <link href="assets/admin/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="assets/admin/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="assets/admin/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/admin/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/admin/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/admin/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/admin/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="assets/admin/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/admin/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/css/lib/helper.css" rel="stylesheet">
    <link href="assets/admin/css/style.css" rel="stylesheet" -->
    <link href="assets/admin/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="<?php echo yii\helpers\Url::to(['default/index']) ?>">
                        <span>CRM客户管理系统</span></a></div>
                    <li><a href="<?php echo yii\helpers\Url::to(['default/index']) ?>"><i class="ti-home"></i> 首页 </a>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-user"></i> 客户管理
                            <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="<?php echo yii\helpers\Url::to(['user/users']); ?>">客户列表</a></li>
                            <li><a href="<?php echo yii\helpers\Url::to(['user/reg']); ?>">添加客户</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo yii\helpers\Url::to(['user/chart']) ?>"><i class="ti-bar-chart-alt"></i>  客户分析  </a>
                    </li>
                    <li><a href="<?php echo yii\helpers\Url::to(['default/calendar']) ?>"><i class="ti-calendar"></i> 日程表 </a></li>
                    <li><a href="app-email.html"><i class="ti-email"></i> 消息中心</a></li>
                    <li><a href="app-widget-card.html"><i class="ti-layout-grid2-alt"></i> 组织结构</a></li>

                    <!-- <li><a class="sidebar-sub-toggle"><i class="ti-heart"></i> 收藏 </a>
                    </li> -->
                    <li><a href="<?php echo yii\helpers\Url::to(['default/map']) ?>"><i class="ti-map"></i>客户地图 </a>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-view-list-alt"></i> 管理员中心 
                        <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="<?php echo yii\helpers\Url::to(['manage/managers']); ?>">管理员列表</a></li>
                            <li><a href="<?php echo yii\helpers\Url::to(['manage/reg']); ?>">添加管理员</a></li>
                        </ul>
                    </li>
                    <li><a href="../documentation/index.html"><i class="ti-settings"></i> 设置</a></li>
                    <li><a href="<?php echo yii\helpers\Url::to(['public/logout']) ?>"><i class="ti-close"></i> 退出</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Recent Notifications</span>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/admin/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">5 members joined today </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/admin/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mariam</div>
                                                        <div class="notification-text">likes a photo of you</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/admin/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Tasnim</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/admin/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-email"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">2 New Messages</span>
                                        <a href="email.html">
                                            <i class="ti-pencil-alt pull-right"></i>
                                        </a>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/admin/images/avatar/1.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/admin/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/admin/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/admin/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <li class="dropdown dib">
                            <a class="header-icon" data-toggle="dropdown" href="#">
                                <span class="user-avatar">林雨翰
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                            </a>
                                <ul class="dropdown-menu pull-right">
                                    <ul class="dropdown-menu-right" role="menu">
                                            <li>
                                                <a href="<?php echo yii\helpers\Url::to(['public/logout']) ?>">
                                                    <i class="ti-user"></i>
                                                    <span>个人中心</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="<?php echo yii\helpers\Url::to(['public/logout']) ?>">
                                                    <i class="ti-email"></i>
                                                    <span>消息</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo yii\helpers\Url::to(['public/logout']) ?>">
                                                    <i class="ti-settings"></i>
                                                    <span>设置</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo yii\helpers\Url::to(['public/logout']) ?>">
                                                    <i class="ti-power-off"></i>
                                                    <span>退出</span>
                                                </a>
                                            </li>

                                    </ul>

                                </ul>
                           
                        </li>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php echo $content ; ?>

    <!-- jquery vendor -->
    <script src="assets/admin/js/lib/jquery.min.js"></script>
    <script src="assets/admin/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="assets/admin/js/lib/menubar/sidebar.js"></script>
    <script src="assets/admin/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="assets/admin/js/lib/bootstrap.min.js"></script>
    <script src="assets/admin/js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="assets/admin/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="assets/admin/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="assets/admin/js/lib/calendar-2/pignose.init.js"></script>


    <script src="assets/admin/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="assets/admin/js/lib/weather/weather-init.js"></script>
    <script src="assets/admin/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="assets/admin/js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="assets/admin/js/lib/chartist/chartist.min.js"></script>
    <script src="assets/admin/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="assets/admin/js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="assets/admin/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/admin/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="assets/admin/js/lib/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/admin/js/lib/moment/moment.js"></script>
    <script src="assets/admin/js/lib/calendar/fullcalendar.min.js"></script>
    <script src="assets/admin/js/lib/calendar/fullcalendar-init.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/dashboard2.js"></script>
    <script src="assets/admin/js/lib/vector-map/jquery.vmap.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/lib/vector-map/jquery.vmap.min.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/lib/vector-map/country/jquery.vmap.algeria.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/lib/vector-map/country/jquery.vmap.argentina.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/lib/vector-map/country/jquery.vmap.brazil.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/lib/vector-map/country/jquery.vmap.france.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/lib/vector-map/country/jquery.vmap.germany.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/lib/vector-map/country/jquery.vmap.greece.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/lib/vector-map/country/jquery.vmap.iran.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/lib/vector-map/country/jquery.vmap.iraq.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/lib/vector-map/country/jquery.vmap.russia.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/lib/vector-map/country/jquery.vmap.tunisia.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/lib/vector-map/country/jquery.vmap.europe.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/lib/vector-map/country/jquery.vmap.usa.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/lib/vector-map/country/jquery.vmap.turkey.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/lib/vector-map/vector.init.js"></script>   
    <!-- scripit init-->
    <script src="assets/admin/js/lib/flot-chart/excanvas.min.js"></script>
    <script src="assets/admin/js/lib/flot-chart/jquery.flot.js"></script>
    <script src="assets/admin/js/lib/flot-chart/jquery.flot.pie.js"></script>
    <script src="assets/admin/js/lib/flot-chart/jquery.flot.time.js"></script>
    <script src="assets/admin/js/lib/flot-chart/jquery.flot.stack.js"></script>
    <script src="assets/admin/js/lib/flot-chart/jquery.flot.resize.js"></script>
    <script src="assets/admin/js/lib/flot-chart/jquery.flot.crosshair.js"></script>
    <script src="assets/admin/js/lib/flot-chart/curvedLines.js"></script>
    <script src="assets/admin/js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="assets/admin/js/lib/flot-chart/flot-chart-init.js"></script>

</body>

</html>