<!DOCTYPE html>
<html class="k-ff k-ff44" dir="ltr" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <style type="text/css">.gm-style .gm-style-mtc label, .gm-style .gm-style-mtc div {
            font-weight: 400
        }</style>
    <link href="<?php base_url(); ?>assets/gis/css/css.css" rel="stylesheet" type="text/css">
    <style type="text/css">.gm-style .gm-style-cc span, .gm-style .gm-style-cc a, .gm-style .gm-style-mtc div {
            font-size: 10px
        }</style>
    <style type="text/css">@media print {
            .gm-style .gmnoprint, .gmnoprint {
                display: none
            }
        }

        @media screen {
            .gm-style .gmnoscreen, .gmnoscreen {
                display: none
            }
        }</style>
    <style type="text/css">.gm-style {
            font-family: Roboto, Arial, sans-serif;
            font-size: 11px;
            font-weight: 400;
            text-decoration: none
        }

        .gm-style img {
            max-width: none
        }</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- base href="http://demo.logisticsscript.com/" -->
    <link rel="shortcut icon"
          href="<?php base_url(); ?>assets/data/adminImages/headerImages/1369722780_favicon.ico">
    <meta name="keywords"
          content="Demo - Logistics, CMS, Content Management System, Open source CMS, Zend Framework, Zend Framework CMS, jQuery, 960gs, 960 Grid System, Layout Editor">
    <meta name="description" content="network,location,find location,our network,area">
    <title>Land|GIS</title>
    <script style="" type="" src="<?php base_url(); ?>assets/gis/js/jquery_002.js"></script>
    <script type="" src="<?php base_url(); ?>assets/gis/js/dropdown.js"></script>
    <script type="" src="<?php base_url(); ?>assets/gis/js/jquery-ui.js"></script>
    <script type="" src="<?php base_url(); ?>assets/gis/js/jquery.js"></script>
    <script type="" src="<?php base_url(); ?>assets/gis/js/slicker.js"></script>
    <script type="" src="<?php base_url(); ?>assets/gis/js/common_002.js"></script>
    <script type="" src="<?php base_url(); ?>assets/user/js/jquery_003.js"></script>
    <script type="" src="<?php base_url(); ?>assets/user/js/jquery-ui.js"></script>
    <script type="" src="<?php base_url(); ?>assets/user/js/common.js"></script>
    <script type="" src="<?php base_url(); ?>assets/user/js/slicker.js"></script>
    <script type="text/javascript" src="<?php base_url(); ?>assets/user/js/dropdown.js"></script>
    <script type="" src="<?php base_url(); ?>assets/user/js/jquery.js"></script>
    <script type="" src="<?php base_url(); ?>assets/user/js/ddslick.js"></script>

    <link href="<?php base_url(); ?>assets/gis/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/gis/css/font-awesome.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/gis/css/jquery-ui.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/gis/css/template.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/gis/css/general.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/user/css/bootstrap.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="<?php base_url(); ?>assets/user/css/jquery-ui.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="<?php base_url(); ?>assets/user/css/mega-menu.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="<?php base_url(); ?>assets/user/css/mega-menu-black.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="<?php base_url(); ?>assets/user/css/font-awesome.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="<?php base_url(); ?>assets/user/css/floatingbar.css" media="screen" rel="stylesheet"
          type="text/css">


    <script type="" src="<?php base_url(); ?>assets/gis/js/kendo_002.js"></script>
    <script type="" src="<?php base_url(); ?>assets/gis/js/kendo_003.js"></script>
    <script type="" src="<?php base_url(); ?>assets/gis/js/kendo.js"></script>
    <script type="" src="<?php base_url(); ?>assets/gis/js/uploader.js"></script>
    <script type="" src="<?php base_url(); ?>assets/user/js/kendo_002.js"></script>
    <script type="" src="<?php base_url(); ?>assets/user/js/kendo_003.js"></script>
    <script type="" src="<?php base_url(); ?>assets/user/js/kendo.js"></script>
    <script type="" src="<?php base_url(); ?>assets/user/js/kendo.js"></script>
    <script type="" src="<?php base_url(); ?>assets/user/js/uploader.js"></script>


    <link href="<?php base_url(); ?>assets/gis/css/kendo.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/gis/css/kendo_002.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/gis/css/pagination.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/user/css/kendo.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="<?php base_url(); ?>assets/user/css/kendo_002.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="<?php base_url(); ?>assets/user/css/stylesheet.css" media="screen" rel="stylesheet"
          type="text/css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        $(document).ready(function () {
            logOut('a.topbar_logout_btn', '<img src="<?php base_url(); ?>assets/application/layouts/scripts/logistics_default/images/loader/ajax-loader-email.gif" />', '&nbsp;', 'Sign in');
        });
    </script>
    <script src="<?php base_url(); ?>assets/gis/js/common.js" charset="UTF-8" type="text/javascript"></script>
    <script src="<?php base_url(); ?>assets/gis/js/map.js" charset="UTF-8" type="text/javascript"></script>
    <script src="<?php base_url(); ?>assets/gis/js/util.js" charset="UTF-8" type="text/javascript"></script>
    <script src="<?php base_url(); ?>assets/gis/js/marker.js" charset="UTF-8" type="text/javascript"></script>
    <script src="<?php base_url(); ?>assets/gis/js/infowindow.js" charset="UTF-8" type="text/javascript"></script>
    <script src="<?php base_url(); ?>assets/gis/js/onion.js" charset="UTF-8" type="text/javascript"></script>
    <script src="<?php base_url(); ?>assets/gis/js/stats.js" charset="UTF-8" type="text/javascript"></script>
    <script src="<?php base_url(); ?>assets/gis/js/controls.js" charset="UTF-8" type="text/javascript"></script>
    <script src="<?php base_url(); ?>assets/gis/js/QuotaService.RecordEvent" charset="UTF-8"
            type="text/javascript"></script>


    <script>
        function qToolTipFunctions() {
            $(document).tooltip({
                items: "input[title],textarea[title],div[title],td[title],span[title],img[title],a[title],li[title]",
                //show: { effect: "slide" },
                tooltipClass: "jui-tooltip",
                content: function () {
                    var element = $(this);
                    if (element.is("[title]") && !element.hasClass('noTitle')) {
                        return element.attr("title");
                    }
                },
                track: true
            });
        }
        $(document).ready(function () {
            kendo.culture("en-US");
            qToolTipFunctions();
        });
    </script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style id="css-ddslick" type="text/css">.dd-select {
            border-radius: 0px;
            border: solid 1px #ddd;
            position: relative;
            cursor: pointer;
        }

        .dd-desc {
            color: #aaa;
            display: block;
            overflow: hidden;
            font-weight: normal;
            line-height: 1.4em;
        }

        .dd-selected {
            overflow: hidden;
            display: block;
            padding: 1px 0 0 9px;
        }

        .dd-selected:hover {
            text-decoration: none;
        }

        .dd-pointer-down {
            border: solid 5px transparent;
            border-top: solid 5px #999;
        }

        .dd-pointer-up {
            border: solid 5px transparent !important;
            border-bottom: solid 5px #999 !important;
            margin-top: -8px;
        }

        .dd-options {
            border: solid 1px #ddd;
            border-top: none;
            list-style: none;
            display: none;
            position: absolute;
            z-index: 2000;
            margin: 0;
            padding: 0;
            background: #fff;
            overflow: auto;
        }

        .dd-option {
            padding: 10px;
            display: block;
            border-bottom: solid 1px #ddd;
            overflow: hidden;
            text-decoration: none;
            color: #333;
            cursor: pointer;
            -webkit-transition: all 0.25s ease-in-out;
            -moz-transition: all 0.25s ease-in-out;
            -o-transition: all 0.25s ease-in-out;
            -ms-transition: all 0.25s ease-in-out;
        }

        .dd-options > li:last-child > .dd-option {
            border-bottom: none;
        }

        .dd-option:hover {
            background: #f3f3f3;
            color: #000;
            text-decoration: none;
        }

        .dd-selected-description-truncated {
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .dd-option-selected {
            background: #f6f6f6;
        }

        .dd-option-image, .dd-selected-image {
            vertical-align: middle;
            float: left;
            margin-right: 5px;
            max-width: 64px;
        }

        .dd-image-right {
            float: right;
            margin-right: 15px;
            margin-left: 5px;
        }

        .dd-container {
            position: relative;
        }

        ​ .dd-selected-text {
            font-weight: bold;
        }

        ​</style>
</head>

<body>
<!-- Header Start -->

<!-- Top Bar Start -->
<nav class="navbar-default navbar-fixed-top" id="user-nav">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-10">
                <ul class="btn-group">
                    <li class="btn active"><i class="fa fa-globe"></i> <span>Welcome:</span>Anthony
                    </li>
                    <li class="btn">&nbsp;<a href="http://demo.logisticsscript.com/Members/index/profile"><i
                                class="fa fa-user"></i><span>User</span></a></li>
                    <li class="btn"><a href="<?php echo(base_url()); ?>login" target="_blank"><i class="fa fa-eye"></i>
                            <span>Public View</span></a></li>
                    <li class="btn"><a href="<?php echo (base_url()); ?>login/logout"><i
                                class="fa fa-power-off"></i> <span>Log Out</span></a></li>

                </ul>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2">

                <script type="text/javascript">
                    $(document).ready(function () { //on DOM ready
                        $("a.change_lang").click(function () {
                            var self = this;
                            var lang = $(self).attr('rel');

                            $.ajax({
                                url: "/Settings/language/update",
                                type: 'POST',
                                data: {lang_name: lang},
                                beforeSend: function () {
                                    $(self).children("span:nth-child(2)").children("img:nth-child(1)").attr('src', 'data/adminImages/commonImages/flag_loader.gif');
                                    $(self).children("span:nth-child(2)").children("img:nth-child(1)").attr('height', '15');
                                },
                                success: function (response) {
                                    //alert(response);
                                    var json_arr = eval("(" + response + ")");
                                    var url = '/Dashboard';
                                    var baseUrl = '';
                                    var ckUrl = 'Administrator/login/auth';
                                    var match_res = url.match(/Administrator\/login\/auth/g);
                                    var tmp = false;
                                    for (i in match_res) {
                                        if (match_res[i] == ckUrl) {
                                            tmp = true;
                                        }
                                        //alert(i + ' : ' + match_res[i]);
                                    }
                                    if (tmp == true) {
                                        var rightUrl = baseUrl + '/Administrator';
                                    }
                                    else {
                                        var rightUrl = url;
                                    }

                                    if (json_arr.status == 'ok') {
                                        document.location.href = rightUrl;
                                    }
                                }
                            });
                        });
                    });

                </script>

                <script type="text/javascript">
                    $(document).ready(function () {
                        $(".dropdown img.flag").addClass(""); //flagvisibility

                        $(".dropdown dt a").click(function () {
                            $(".dropdown dd ul").toggle();
                        });

                        $(".dropdown dd ul li a").click(function () {
                            var text = $(this).html();
                            $(".dropdown dt a").html(text);
                            $(".dropdown dd ul").hide();
                            $("#result").html("Selected value is: " + getSelectedValue("sample"));
                        });

                        function getSelectedValue(id) {
                            return $("#" + id).find("dt a span.value").html();
                        }

                        $(document).bind('click', function (e) {
                            var $clicked = $(e.target);
                            if (!$clicked.parents().hasClass("dropdown"))
                                $(".dropdown dd ul").hide();
                        });


                        $("#flagSwitcher").click(function () {
                            $(".dropdown img.flag").toggleClass("flagvisibility");
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</nav>
</br>
</br>

<!-- Top Bar End -->

<!-- Header End -->

<!-- Top Navigation Start-->


<!-- Banner Start-->


<div class="container-fluid">

    <!-- mega menu -->
    <ul class="sky-mega-menu sky-mega-menu-response-to-icons sky-mega-menu-anim-scale">
        <!-- home -->
        <li>
            <a href="<?php base_url(); ?>user_dashboard"><i class="fa fa-home"></i></a>
        </li>
        <!--/ home -->

        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-user"></i> <span>USERS</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="<?php echo(base_url()); ?>user_profile" class=""><i
                                class="fa fa-credit-card"></i> User Profile</a></li>
                    <!--<li><a href="" class=""><i
                                class="fa fa-search"></i> User Search</a></li>-->
                    <li><a href="<?php echo(base_url()); ?>change_password" class=""><i
                                class="fa fa-asterisk"></i> Change Password</a></li>
                </ul>
            </div>

        </li>

        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-bars"></i> <span>APPLICATIONS</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="<?php echo(base_url()); ?>user_dashboard/make_application" class=""><i
                                class="fa fa-sitemap"></i> Create New Application</a></li>
                    <!--<li><a href="http://demo.script4realestate.com/Menu/backend/list" class=""><i
                            class="fa fa-gear"></i> Manage Applications</a></li>-->
                    <li><a href="" class=""><i
                                class="fa fa-check-square-o"></i> Manage Application(s)</a></li>
                </ul>
            </div>

        </li>

        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-globe"></i> <span>SITE</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="<?php base_url(); ?>gis_view" class="" target="_blank"><i class="fa fa-laptop"></i>
                            Site Preview</a></li>
                </ul>
            </div>

        </li>
        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-globe"></i> <span>TITLE DEED</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="" class="" target="_blank"><i class="fa fa-search"></i>
                            Land Search</a></li>
                </ul>
            </div>

        </li>


        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-cube"></i> <span>LAND MAPS</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="javascript:void(0);" class=""><i class="fa fa-building"></i>Buy<i
                                class="text-right pull-right fa fa-angle-down"></i></a>

                        <div class="grid-container3">
                            <ul>
                                <li><a href="" class=""><i
                                            class="fa fa-institution"></i>Buy New Land Map</a></li>
                                <li><a href="" class=""><i
                                            class="fa fa-star-half-empty"></i> Buy New Land Deed Plan</a></li>
                                <li><a href="" class=""><i
                                            class="fa fa-cogs"></i>Manage Maps</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

        </li>

        
        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-gift"></i> <span>MODULES</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="" class=""><i
                                class="fa fa-clipboard"></i> File Management</a></li>
                    <li><a href="" class=""><i
                                class="fa fa-bar-chart-o"></i> Poll Manager</a></li>
                    <li><a href="" class=""><i
                                class="fa fa-comments-o"></i> Comment Manager</a></li>
                </ul>
            </div>

        </li>

        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-money"></i> <span>BILLING</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="" class=""><i
                                class="fa fa-ticket"></i> Manage Invoices<i
                                class="text-right pull-right fa fa-angle-down"></i></a>

                        <div class="grid-container3">
                            <ul>
                                <li><a href="" class=""><i
                                            class="fa fa-check-circle"></i> Paid</a></li>
                                <li><a href="" class=""><i
                                            class="fa fa-flag"></i> Unpaid</a></li>
                                <li><a href="" class=""><i
                                            class="fa fa-times-circle"></i> Cancelled</a></li>
                            </ul>
                        </div>
                    </li>

                    <li><a href="" class=""><i
                                class="fa fa-file-text-o"></i> Manage Quotation(s)</a></li>

                </ul>
            </div>

        </li>

        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-wrench"></i> <span>SETUP</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="" class=""><i class="fa fa-globe"></i>
                            Country Management</a></li>
                    <li><a href="" class=""><i
                                class="fa fa-crosshairs"></i> State Management</a></li>
                    <li><a href="" class=""><i
                                class="fa fa-map-marker"></i> City/Area Management</a></li>
                </ul>
            </div>

        </li>
    </ul>
    <!--/ mega menu -->    </div>
    <script type="text/javascript">
$(function() {
    
    //autocomplete
    $(".auto").autocomplete({
        source: "search.php",
        minLength: 1
    });             

});
</script>


<div id="banner-inner">
    <div class="container">
    
        <div class="col-md-12">

    <span class="btn-group"> 
    <div style="margin-left: -450px"class="text-center">
                   <form  action='' method='post'>
                  <input type='text' name='parcel_number' value='' class='auto' placeholder="Parcel number">
                     </form>
                       <a 
                    href="" class="btn-3"><span
                        class="glyphicon glyphicon-map-marker"></span> Find Locations</a>
                        <a 
                    href="" class="btn-2"><span 
                        class="glyphicon glyphicon-time"></span> Buy Land Map</a>
                    <a href="" class="btn-1"><span
                        class="glyphicon glyphicon-donate"></span>Donations</a> 

                        </div>
                        
           </span>  

                   
        </div>
    </div>
</div>
<!-- Banner End-->

<!-- Middle Bar Start -->
<!-- Middle Bar End -->

<div class="container">

    <div class="col-md-12">
        <article id="content">
            <script type="text/javascript" src="<?php base_url(); ?>assets/gis/js/js"></script>
            <script type="text/javascript">
                $(document).ready(function () {

                    function stripslashes_big_network(str) {
                        str = str.replace(/\\'/g, '\'');
                        str = str.replace(/\\"/g, '"');
                        str = str.replace(/\\0/g, '\0');
                        str = str.replace(/\\\\/g, '\\');
                        return str;
                    }

                    var canvas = $('#map_canvas_big')[0];
                    var map = new google.maps.Map(canvas, {
                        zoom: 2,
                        center: new google.maps.LatLng(22.2, 28.083), // for centering the map
                        mapTypeId: google.maps.MapTypeId.TERRAIN
                    });
                    var ev = ';;;Chiromo;;Sdf dfsdf Df sdf;;51.5486514;;-0.0420759;;;Main University;;vcb b zbdfhd hfd sgsd g;;-29.5328037;;145.491477;;;SCI;;dgs dfgsdfg;;-38.416097;;-63.616672;;;School of Maths;;wrfwfsdfcsf;;33.93911;;67.709953;;;ADD;;sfdfs;;28.033886;;1.659626';
                    ev = ev.split(';;;');
                    var ev2;
                    var infowindow;
                    infowindow = new google.maps.InfoWindow({
                        maxWidth: 400
                    });
                    for (var i = 0; i < ev.length; i++) {
                        if (ev[i] == null || ev[i] == '') {
                            continue;
                        }
                        ev2 = ev[i].split(';;');
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(ev2[2], ev2[3]),
                            map: map,
                            title: ev2[0],
                            html: '<p><strong>' + ev2[0] + '</strong></p>' + stripslashes_big_network(ev2[1])
                            //icon:image
                        });
                        google.maps.event.addListener(marker, 'mouseover', function () {
                            infowindow.setContent(this.html);
                            infowindow.open(map, this);
                        });
                    }
                });
            </script>
            <div class="mod mod-network">
                <div id="map_canvas_big"
                     style="width: 100%; height: 100%; position: relative; background-color: rgb(229, 227, 223); overflow: hidden;">
                    <div class="gm-style"
                         style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;">
                        <div
                            style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default;">
                            <div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%;">
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                        <div aria-hidden="true"
                                             style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                            <div
                                                style="width: 256px; height: 256px; position: absolute; left: 77px; top: 59px;"></div>
                                            <div
                                                style="width: 256px; height: 256px; position: absolute; left: 333px; top: 59px;"></div>
                                            <div
                                                style="width: 256px; height: 256px; position: absolute; left: 77px; top: -197px;"></div>
                                            <div
                                                style="width: 256px; height: 256px; position: absolute; left: 77px; top: 315px;"></div>
                                            <div
                                                style="width: 256px; height: 256px; position: absolute; left: 333px; top: -197px;"></div>
                                            <div
                                                style="width: 256px; height: 256px; position: absolute; left: 333px; top: 315px;"></div>
                                            <div
                                                style="width: 256px; height: 256px; position: absolute; left: -179px; top: 59px;"></div>
                                            <div
                                                style="width: 256px; height: 256px; position: absolute; left: 589px; top: 59px;"></div>
                                            <div
                                                style="width: 256px; height: 256px; position: absolute; left: -179px; top: -197px;"></div>
                                            <div
                                                style="width: 256px; height: 256px; position: absolute; left: -179px; top: 315px;"></div>
                                            <div
                                                style="width: 256px; height: 256px; position: absolute; left: 589px; top: -197px;"></div>
                                            <div
                                                style="width: 256px; height: 256px; position: absolute; left: 589px; top: 315px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                        <div aria-hidden="true"
                                             style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                            <div
                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 77px; top: 59px;">
                                                <canvas width="256" height="256"
                                                        style="-moz-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"
                                                        draggable="false"></canvas>
                                            </div>
                                            <div
                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 333px; top: 59px;">
                                                <canvas width="256" height="256"
                                                        style="-moz-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"
                                                        draggable="false"></canvas>
                                            </div>
                                            <div
                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 77px; top: -197px;"></div>
                                            <div
                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 77px; top: 315px;">
                                                <canvas width="256" height="256"
                                                        style="-moz-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"
                                                        draggable="false"></canvas>
                                            </div>
                                            <div
                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 333px; top: -197px;"></div>
                                            <div
                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 333px; top: 315px;"></div>
                                            <div
                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -179px; top: 59px;"></div>
                                            <div
                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 589px; top: 59px;"></div>
                                            <div
                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -179px; top: -197px;"></div>
                                            <div
                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -179px; top: 315px;"></div>
                                            <div
                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 589px; top: -197px;"></div>
                                            <div
                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 589px; top: 315px;">
                                                <canvas width="256" height="256"
                                                        style="-moz-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"
                                                        draggable="false"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                    <div aria-hidden="true"
                                         style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                        <div
                                            style="position: absolute; left: 77px; top: 59px; transition: opacity 200ms ease-out 0s;">
                                            <img alt="" draggable="false" src="GIS%20PAGE_files/vt_012.png"
                                                 style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;">
                                        </div>
                                        <div
                                            style="position: absolute; left: 333px; top: 59px; transition: opacity 200ms ease-out 0s;">
                                            <img alt="" draggable="false" src="GIS%20PAGE_files/vt_008.png"
                                                 style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;">
                                        </div>
                                        <div
                                            style="position: absolute; left: 77px; top: -197px; transition: opacity 200ms ease-out 0s;">
                                            <img alt="" draggable="false" src="GIS%20PAGE_files/vt_003.png"
                                                 style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;">
                                        </div>
                                        <div
                                            style="position: absolute; left: 77px; top: 315px; transition: opacity 200ms ease-out 0s;">
                                            <img alt="" draggable="false" src="GIS%20PAGE_files/vt_009.png"
                                                 style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;">
                                        </div>
                                        <div
                                            style="position: absolute; left: 333px; top: -197px; transition: opacity 200ms ease-out 0s;">
                                            <img alt="" draggable="false" src="GIS%20PAGE_files/vt_004.png"
                                                 style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;">
                                        </div>
                                        <div
                                            style="position: absolute; left: 333px; top: 315px; transition: opacity 200ms ease-out 0s;">
                                            <img alt="" draggable="false" src="GIS%20PAGE_files/vt.png"
                                                 style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;">
                                        </div>
                                        <div
                                            style="position: absolute; left: -179px; top: 59px; transition: opacity 200ms ease-out 0s;">
                                            <img alt="" draggable="false" src="GIS%20PAGE_files/vt_007.png"
                                                 style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;">
                                        </div>
                                        <div
                                            style="position: absolute; left: 589px; top: 59px; transition: opacity 200ms ease-out 0s;">
                                            <img alt="" draggable="false" src="GIS%20PAGE_files/vt_010.png"
                                                 style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;">
                                        </div>
                                        <div
                                            style="position: absolute; left: -179px; top: -197px; transition: opacity 200ms ease-out 0s;">
                                            <img alt="" draggable="false" src="GIS%20PAGE_files/vt_005.png"
                                                 style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;">
                                        </div>
                                        <div
                                            style="position: absolute; left: -179px; top: 315px; transition: opacity 200ms ease-out 0s;">
                                            <img alt="" draggable="false" src="GIS%20PAGE_files/vt_002.png"
                                                 style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;">
                                        </div>
                                        <div
                                            style="position: absolute; left: 589px; top: -197px; transition: opacity 200ms ease-out 0s;">
                                            <img alt="" draggable="false" src="GIS%20PAGE_files/vt_011.png"
                                                 style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;">
                                        </div>
                                        <div
                                            style="position: absolute; left: 589px; top: 315px; transition: opacity 200ms ease-out 0s;">
                                            <img alt="" draggable="false" src="GIS%20PAGE_files/vt_006.png"
                                                 style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;"></div>
                            <div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%;">
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                            </div>
                        </div>
                        <div
                            style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto,Arial,sans-serif; color: rgb(34, 34, 34); box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.2); z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 263px; top: 160px;">
                            <div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div>
                            <div style="font-size: 13px;">Map data ©2016</div>
                            <div
                                style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;">
                                <img draggable="false" src="GIS%20PAGE_files/mapcnt6.png"
                                     style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;">
                            </div>
                        </div>
                        <div style="z-index: 1000001; position: absolute; right: 71px; bottom: 0px; width: 89px;"
                             class="gmnoprint">
                            <div class="gm-style-cc" style="-moz-user-select: none; height: 14px; line-height: 14px;"
                                 draggable="false">
                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                    <div style="width: 1px;"></div>
                                    <div
                                        style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                </div>
                                <div
                                    style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                    <a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map
                                        Data</a><span style="">Map data ©2016</span></div>
                            </div>
                        </div>
                        <div style="position: absolute; right: 0px; bottom: 0px;" class="gmnoscreen">
                            <div
                                style="font-family: Roboto,Arial,sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
                                Map data ©2016
                            </div>
                        </div>
                        <div draggable="false"
                             style="z-index: 1000001; -moz-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"
                             class="gmnoprint gm-style-cc">
                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                <div style="width: 1px;"></div>
                                <div
                                    style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                            </div>
                            <div
                                style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                <a target="_blank" href="https://www.google.com/intl/en_US/help/terms_maps.html"
                                   style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of
                                    Use</a></div>
                        </div>
                        <div
                            style="width: 25px; height: 25px; margin-top: 10px; overflow: hidden; display: none; margin-right: 14px; position: absolute; top: 0px; right: 0px;">
                            <img class="gm-fullscreen-control" draggable="false" src="GIS%20PAGE_files/sv5.png"
                                 style="position: absolute; left: -52px; top: -86px; width: 164px; height: 112px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;">
                        </div>
                        <div class="gm-style-cc"
                             style="-moz-user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;"
                             draggable="false">
                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                <div style="width: 1px;"></div>
                                <div
                                    style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                            </div>
                            <div
                                style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                <a href="https://www.google.com/maps/@22.2,28.083,2z/data=%215m1%211e4%2110m1%211e1%2112b1?source=apiv3&amp;rapsrc=apiv3"
                                   style="font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;"
                                   title="Report errors in the road map or imagery to Google" target="_new">Report a map
                                    error</a></div>
                        </div>
                        <div controlheight="93" controlwidth="28" draggable="false"
                             style="margin: 10px; -moz-user-select: none; position: absolute; bottom: 107px; right: 28px;"
                             class="gmnoprint">
                            <div controlheight="55" controlwidth="28" style="position: absolute; left: 0px; top: 38px;"
                                 class="gmnoprint">
                                <div
                                    style="-moz-user-select: none; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;"
                                    draggable="false">
                                    <div style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"
                                         title="Zoom in">
                                        <div
                                            style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;">
                                            <img draggable="false" src="GIS%20PAGE_files/tmapctrl.png"
                                                 style="position: absolute; left: 0px; top: 0px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;">
                                        </div>
                                    </div>
                                    <div
                                        style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div>
                                    <div style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"
                                         title="Zoom out">
                                        <div
                                            style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;">
                                            <img draggable="false" src="GIS%20PAGE_files/tmapctrl.png"
                                                 style="position: absolute; left: 0px; top: -15px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div controlheight="28" controlwidth="28"
                                 style="background-color: rgb(255, 255, 255); box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; position: absolute; left: 0px; top: 0px;"
                                 class="gm-svpc">
                                <div style="position: absolute; left: 1px; top: 1px;"></div>
                                <div style="position: absolute; left: 1px; top: 1px;">
                                    <div aria-label="Street View Pegman Control"
                                         style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;">
                                        <img draggable="false" src="GIS%20PAGE_files/cb_scout5.png"
                                             style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;">
                                    </div>
                                    <div aria-label="Pegman is on top of the Map"
                                         style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;">
                                        <img draggable="false" src="GIS%20PAGE_files/cb_scout5.png"
                                             style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;">
                                    </div>
                                    <div aria-label="Street View Pegman Control"
                                         style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;">
                                        <img draggable="false" src="GIS%20PAGE_files/cb_scout5.png"
                                             style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;">
                                    </div>
                                </div>
                            </div>
                            <div style="display: none; position: absolute;" controlheight="0" controlwidth="28"
                                 class="gmnoprint">
                                <div title="Rotate map 90 degrees"
                                     style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); cursor: pointer; background-color: rgb(255, 255, 255); display: none;">
                                    <img draggable="false" src="GIS%20PAGE_files/tmapctrl4.png"
                                         style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;">
                                </div>
                                <div class="gm-tilt"
                                     style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);">
                                    <img draggable="false" src="GIS%20PAGE_files/tmapctrl4.png"
                                         style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;">
                                </div>
                            </div>
                        </div>
                        <div style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;"
                             class="gmnoprint">
                            <div class="gm-style-mtc" style="float: left;">
                                <div title="Show street map" draggable="false"
                                     style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; background-clip: padding-box; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); min-width: 21px; font-weight: 500;">
                                    Map
                                </div>
                                <div
                                    style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); position: absolute; left: 0px; top: 38px; text-align: left; display: none;">
                                    <div title="Show street map with terrain" draggable="false"
                                         style="color: rgb(0, 0, 0); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;">
                                        <span
                                            style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"
                                            role="checkbox"><div
                                                style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;">
                                                <img draggable="false" src="GIS%20PAGE_files/imgs8.png"
                                                     style="position: absolute; left: -52px; top: -44px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;">
                                            </div></span><label
                                            style="vertical-align: middle; cursor: pointer;">Terrain</label></div>
                                </div>
                            </div>
                            <div class="gm-style-mtc" style="float: left;">
                                <div title="Show satellite imagery" draggable="false"
                                     style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; background-clip: padding-box; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); border-left: 0px none; min-width: 37px;">
                                    Satellite
                                </div>
                                <div
                                    style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); position: absolute; right: 0px; top: 38px; text-align: left; display: none;">
                                    <div title="Show imagery with street names" draggable="false"
                                         style="color: rgb(0, 0, 0); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;">
                                        <span
                                            style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"
                                            role="checkbox"><div
                                                style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;">
                                                <img draggable="false" src="GIS%20PAGE_files/imgs8.png"
                                                     style="position: absolute; left: -52px; top: -44px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;">
                                            </div></span><label
                                            style="vertical-align: middle; cursor: pointer;">Labels</label></div>
                                </div>
                            </div>
                        </div>
                        <div
                            style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                            <a title="Click to see this area on Google Maps"
                               href="https://maps.google.com/maps?ll=22.2,28.083&amp;z=2&amp;t=p&amp;hl=en&amp;gl=US&amp;mapclient=apiv3"
                               target="_blank"
                               style="position: static; overflow: visible; float: none; display: inline;">
                                <div style="width: 66px; height: 26px; cursor: pointer;"><img draggable="false"
                                                                                              src="GIS%20PAGE_files/google4.png"
                                                                                              style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;">
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>
        </article>


    </div>
    <!-- Content Area End-->
</div>
</br>


<!-- Footer Start -->

<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8">
                Powered By : <a href="" target="_blank">Anthony Wanjohi</a><br>
                LandGIS &copy; <?php echo(date("Y")); ?> All Rights Reserved
            </div>

            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4">
                <div class="version text-right">Version : 2.1.1</div>
            </div>
        </div>
    </div>
</footer>

<!-- Footer End -->

<div class="go-top"><a style="display: none;" href="#top" id="scroll-top"><i class="glyphicon glyphicon-chevron-up"></i></a>
</div>
<script type="text/javascript" src="<?php base_url(); ?>assets/gis/js/scroll.js"></script>

</body>
</html>