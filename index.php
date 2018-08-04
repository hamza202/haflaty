<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>Haflaty | Home</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <?php include "style.php"?>

</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- BEGIN: Header -->
    <?php include "header.php" ?>
    <!-- END: Header -->

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- BEGIN: Left Aside -->
        <?php include "left-menu.php"; ?>
        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">
                            Home
                        </h3>
                    </div>
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="m-portlet m-portlet--tab">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <span class="m-portlet__head-icon m--hide">
                                            <i class="la la-gear"></i>
                                        </span>
                                        <h3 class="m-portlet__head-text">
                                            Statistics
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <a href="#" class="dashboard-stat color-1">
                                            <div class="dashboard-stat-content"><h4>30</h4>
                                                <span>Users</span></div>
                                            <div class="dashboard-stat-icon"><i class="la la-group"></i></div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <a href="#" class="dashboard-stat color-4">
                                            <div class="dashboard-stat-content"><h4>35</h4>
                                                <span>Halls</span></div>
                                            <div class="dashboard-stat-icon"><i class="la la-bank"></i></div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <a href="#" class="dashboard-stat color-2">
                                            <div class="dashboard-stat-content"><h4>65</h4> <span>Offers</span>
                                            </div>
                                            <div class="dashboard-stat-icon"><i class="fas fa-gift"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <a href="#" class="dashboard-stat color-3">
                                            <div class="dashboard-stat-content"><h4>65</h4> <span>Hall Owners</span>
                                            </div>
                                            <div class="dashboard-stat-icon"><i class="fab fa-black-tie"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="m-portlet m-portlet--tab">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <span class="m-portlet__head-icon m--hide">
                                            <i class="la la-gear"></i>
                                        </span>
                                        <h3 class="m-portlet__head-text">
                                            Weather
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <a class="weatherwidget-io" href="https://forecast7.com/en/24d7146d68/riyadh/"
                                   data-label_1="Riyadh" data-label_2="WEATHER" data-theme="original">Riyadh WEATHER</a>
                                <script>
                                    !function (d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (!d.getElementById(id)) {
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src = 'https://weatherwidget.io/js/widget.min.js';
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }
                                    }(document, 'script', 'weatherwidget-io-js');
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="m-portlet m-portlet--tab">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <span class="m-portlet__head-icon m--hide">
                                            <i class="la la-gear"></i>
                                        </span>
                                        <h3 class="m-portlet__head-text">
                                            Time
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div id="clock" style="padding:20px 0 30px;
                                 background: linear-gradient(to left, rgba(255, 255, 255, 0) 25%, rgba(255, 255, 255, 0.2));
                                 border-radius: 4px; background-color:#E8504D;
                                width:100%;color:rgb(230,230,230);">
                                    <center>
                                        <div id="Clock" style="padding-top:10px;font-size:28px">
                                            <span id="clk1" style="width:20px"></span>
                                            <span id="clk2" style="width:20px"></span>
                                            <span id="clk3" style="width:20px"></span>
                                        </div>
                                        <br/>
                                        <div id="Date" style="font-size:22px">
                                            <span id="day"></span>
                                            <span id="month"></span>
                                            <span id="year"></span>
                                        </div>
                                        <br/>
                                        <span id="weekdays" style="font-size:26px"></span>
                                    </center>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- end:: Body -->

    <!-- begin::Footer -->
    <?php include "footer.php"?>
    <!-- end::Footer -->
</div>

<!-- end:: Page -->
<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->
<?php include "javascript.php"?>
<!--begin::Base Scripts -->

<script>
    function startTime() {
        var today = new Date();
        var hour = today.getHours();
        if (hour > 12) {
            hour -= 12;
        } else if (hour === 0) {
            hour = 12;
        }
        var weekdays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        document.getElementById('clk1').innerHTML = hour + " : ";
        document.getElementById('clk2').innerHTML = today.getMinutes() + " : ";
        document.getElementById('clk3').innerHTML = today.getSeconds();
        document.getElementById("day").innerHTML = today.getDate() + " /";
        document.getElementById('month').innerHTML = today.getMonth() + 1 + " /";
        document.getElementById('year').innerHTML = today.getFullYear();
        var t = setTimeout(function () {
            startTime()
        }, 500);
        document.getElementById("weekdays").innerHTML = "Today is " + weekdays[today.getDay()];
    }

    startTime();
</script>
<!--end::Page Snippets -->
</body>

<!-- end::Body -->
</html>