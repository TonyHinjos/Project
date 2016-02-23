<!DOCTYPE html>
<html class="k-ff k-ff44" dir="ltr" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- base href="http://demo.script4realestate.com/" -->
    <link rel="shortcut icon"
          href="http://demo.script4realestate.com/data/adminImages/headerImages/1369722780_favicon.ico"
          type="image/x-icon">
    <meta name="keywords"
          content="Demo - Realestate CMS, CMS, Content Management System, Open source CMS, Zend Framework, Zend Framework CMS, jQuery, 960gs, 960 Grid System, Layout Editor">
    <meta name="description"
          content="Demo - Realestate CMS - A Commercial CMS powered by Eicrasoft Ltd, jQuery and 960grid">
    <title>USER CONTROL PANEL</title>
    <script type="" src="USER%20CONTROL%20PANEL_files/jquery_002.js"></script>
    <script type="" src="USER%20CONTROL%20PANEL_files/dropdown.js"></script>
    <script type="" src="USER%20CONTROL%20PANEL_files/jquery-ui.js"></script>
    <script type="" src="USER%20CONTROL%20PANEL_files/jquery_003.js"></script>
    <script type="" src="USER%20CONTROL%20PANEL_files/slicker.js"></script>
    <script type="" src="USER%20CONTROL%20PANEL_files/common.js"></script>
    <link href="USER%20CONTROL%20PANEL_files/bootstrap.css" media="screen" rel="stylesheet" type="text/css">
    <link href="USER%20CONTROL%20PANEL_files/font-awesome.css" media="screen" rel="stylesheet" type="text/css">
    <link href="USER%20CONTROL%20PANEL_files/jquery-ui.css" media="screen" rel="stylesheet" type="text/css">
    <link href="USER%20CONTROL%20PANEL_files/template.css" media="screen" rel="stylesheet" type="text/css">
    <link href="USER%20CONTROL%20PANEL_files/general.css" media="screen" rel="stylesheet" type="text/css">
    <script type="" src="USER%20CONTROL%20PANEL_files/kendo_003.js"></script>
    <script type="" src="USER%20CONTROL%20PANEL_files/kendo_002.js"></script>
    <script type="" src="USER%20CONTROL%20PANEL_files/kendo.js"></script>
    <script type="" src="USER%20CONTROL%20PANEL_files/kendo.js"></script>
    <script type="" src="USER%20CONTROL%20PANEL_files/uploader.js"></script>
    <link href="USER%20CONTROL%20PANEL_files/kendo.css" media="screen" rel="stylesheet" type="text/css">
    <link href="USER%20CONTROL%20PANEL_files/kendo_002.css" media="screen" rel="stylesheet" type="text/css">
    <link href="USER%20CONTROL%20PANEL_files/pagination.css" media="screen" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        $(document).ready(function () {
            $(document).unbind('tooltip');
            $(document).tooltip({
                items: "input[title],textarea[title],div[title],td[title],span[title],img[title],a[title],li[title]",
                //show: { effect: "slide" },
                content: function () {
                    var element = $(this);
                    if (element.attr('link') && !element.hasClass('noTitle')) {
                        return (element.attr('title')) ? "<img  src='" + element.attr('link') + "' width='250' /><br />" + element.attr('title') : "<img  src='" + element.attr('link') + "' width='250' />";
                    }
                    else {
                        if (element.attr('title') && !element.hasClass('noTitle')) {
                            return element.attr('title');
                        }
                    }
                },
                track: true
            });
        });
    </script>
    <link href="USER%20CONTROL%20PANEL_files/members.css" media="screen" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Header Start -->

<script type="text/javascript">
    $(document).ready(function () {
        logOut('a.topbar_logout_btn', '<img src="application/layouts/scripts/realestate_default/images/loader/ajax-loader-email.gif" />', '', 'Sign in');
    });
</script>

<header>
    <div id="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-xs-5 user-link">
                    Welcome to Realestate CMS | <a href="javascript:void(0);" class="topbar_logout_btn">Logout</a></div>

                <div class="col-xs-7 top-links">
                    <a href="http://demo.script4realestate.com/Members-Dashboard">My Account</a> |
                    <!-- |-->
                    <a href="http://demo.script4realestate.com/Register">Agent Registration</a> |
                    <!--<a href="Feedback"></a> |
                    <a href="Site-Map"></a> | -->
                    <!--<a href="Contact-Us"></a> |-->
                    <div class="flags">

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
                                            $(self).children("span:nth-child(1)").children("img:nth-child(1)").attr('src', 'data/adminImages/commonImages/flag_loader.gif');
                                            $(self).children("span:nth-child(1)").children("img:nth-child(1)").attr('height', '15');
                                        },
                                        success: function (response) {
                                            //alert(response);
                                            var json_arr = eval("(" + response + ")");
                                            var url = '/Members-Dashboard';
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
                                    $(".dropdown dt a span").html(text);
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

                        <dl id="sample" class="dropdown" style="margin:0; padding:0;">
                            <dt><a href="javascript:void(0);"><span>English - United States<span class="flag"><img
                                                src="USER%20CONTROL%20PANEL_files/US.gif" title="English (USA)"
                                                border="0"></span></span></a></dt>
                            <dd>
                                <ul style="display: none;">
                                    <li><a class="change_lang" rel="ar_SA:rtl" href="javascript:void(0);">العربية -
                                            المملكة العربية السعودية<span class="flag"><img
                                                    src="USER%20CONTROL%20PANEL_files/SA.gif"
                                                    title="Arabic (Saudia Arabia)" border="0"></span></a></li>
                                    <li><a class="change_lang" rel="bn_BD:ltr" href="javascript:void(0);">বাংলা -
                                            বাংলাদেশ<span class="flag"><img src="USER%20CONTROL%20PANEL_files/BD.gif"
                                                                            title="Bangla (Bangladesh)"
                                                                            border="0"></span></a></li>
                                    <li><a class="change_lang" rel="de_DE:ltr" href="javascript:void(0);">Deutsch -
                                            Deutschland<span class="flag"><img src="USER%20CONTROL%20PANEL_files/DE.gif"
                                                                               title="German" border="0"></span></a>
                                    </li>
                                    <li><a class="change_lang" rel="en_GB:ltr" href="javascript:void(0);">English -
                                            United Kingdom<span class="flag"><img
                                                    src="USER%20CONTROL%20PANEL_files/GB.gif" title="English (UK)"
                                                    border="0"></span></a></li>
                                    <li><a class="change_lang" rel="en_US:ltr" href="javascript:void(0);">English -
                                            United States<span class="flag"><img
                                                    src="USER%20CONTROL%20PANEL_files/US.gif" title="English (USA)"
                                                    border="0"></span></a></li>
                                    <li><a class="change_lang" rel="es_ES:ltr" href="javascript:void(0);">español -
                                            España<span class="flag"><img src="USER%20CONTROL%20PANEL_files/ES.gif"
                                                                          title="Spanish" border="0"></span></a></li>
                                    <li><a class="change_lang" rel="fr_FR:ltr" href="javascript:void(0);">français -
                                            France<span class="flag"><img src="USER%20CONTROL%20PANEL_files/FR.gif"
                                                                          title="French" border="0"></span></a></li>
                                    <li><a class="change_lang" rel="mk_MK:ltr" href="javascript:void(0);">македонски -
                                            Македонија<span class="flag"><img src="USER%20CONTROL%20PANEL_files/MK.gif"
                                                                              title="Macedonian (Macedonia)" border="0"></span></a>
                                    </li>
                                    <li><a class="change_lang" rel="nl_BE:ltr" href="javascript:void(0);">Nederlands -
                                            België<span class="flag"><img src="USER%20CONTROL%20PANEL_files/BE.gif"
                                                                          title="Dutch (Belgium)" border="0"></span></a>
                                    </li>
                                    <li><a class="change_lang" rel="nl_NL:ltr" href="javascript:void(0);">Nederlands -
                                            Nederland<span class="flag"><img src="USER%20CONTROL%20PANEL_files/NL.gif"
                                                                             title="Dutch (Netherlands)"
                                                                             border="0"></span></a></li>
                                    <li><a class="change_lang" rel="pt_BR:ltr" href="javascript:void(0);">português -
                                            Brasil<span class="flag"><img src="USER%20CONTROL%20PANEL_files/BR.gif"
                                                                          title="Portugis (Brazil)"
                                                                          border="0"></span></a></li>
                                    <li><a class="change_lang" rel="pt_PT:ltr" href="javascript:void(0);">português -
                                            Portugal<span class="flag"><img src="USER%20CONTROL%20PANEL_files/PT.gif"
                                                                            title="Portugis (Portugal)"
                                                                            border="0"></span></a></li>
                                    <li><a class="change_lang" rel="ru_RU:ltr" href="javascript:void(0);">русский -
                                            Россия<span class="flag"><img src="USER%20CONTROL%20PANEL_files/RU.gif"
                                                                          title="Russian" border="0"></span></a></li>
                                    <li><a class="change_lang" rel="tr_TR:ltr" href="javascript:void(0);">Türkçe -
                                            Türkiye<span class="flag"><img src="USER%20CONTROL%20PANEL_files/TR.gif"
                                                                           title="Turkey" border="0"></span></a></li>
                                    <li><a class="change_lang" rel="it_IT:ltr" href="javascript:void(0);">italiano -
                                            Italia<span class="flag"><img src="USER%20CONTROL%20PANEL_files/IT.gif"
                                                                          title="Italy" border="0"></span></a></li>
                                    <li><a class="change_lang" rel="id_ID:ltr" href="javascript:void(0);">Bahasa
                                            Indonesia - Indonesia<span class="flag"><img
                                                    src="USER%20CONTROL%20PANEL_files/ID.gif" title="Indoneshian"
                                                    border="0"></span></a></li>
                                    <li><a class="change_lang" rel="zh_CN:ltr" href="javascript:void(0);">中文 - 中国<span
                                                class="flag"><img src="USER%20CONTROL%20PANEL_files/CN.gif"
                                                                  title="Chainese (Simplified)" border="0"></span></a>
                                    </li>
                                    <li><a class="change_lang" rel="zh_TW:ltr" href="javascript:void(0);">中文 - 台灣<span
                                                class="flag"><img src="USER%20CONTROL%20PANEL_files/TW.gif"
                                                                  title="Chainese (Traditional)" border="0"></span></a>
                                    </li>
                                    <li><a class="change_lang" rel="sk_SK:ltr" href="javascript:void(0);">slovenčina -
                                            Slovensko<span class="flag"><img src="USER%20CONTROL%20PANEL_files/SK.gif"
                                                                             title="Slovak (Slovakia)"
                                                                             border="0"></span></a></li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="logo">
                        <a href="#"><img src="USER%20CONTROL%20PANEL_files/logo.png" alt="Realestate CMS"
                                         title="Realestate CMS" border="0"></a>
                    </div>
                </div>

                <div class="col-md-5">
                    <span class="listing-add"><a href="http://demo.script4realestate.com/Members-Property-Add"><span
                                class="glyphicon glyphicon-plus-sign"></span><br>Add Property</a></span>
                    <span class="listing-count"><span class="no">1</span> Listings</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Top Navigation Start-->
<nav class="top-nav">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <link href="USER%20CONTROL%20PANEL_files/members.css" media="screen" rel="stylesheet" type="text/css">
                <link href="USER%20CONTROL%20PANEL_files/menu.css" media="screen" rel="stylesheet" type="text/css">
                <ul class="dm-menu">
                    <li><a class="noTitle" href="http://demo.script4realestate.com/Realestate-Home" title="HOME"
                           target="_self">HOME</a></li>
                    <li><a class="noTitle" href="http://demo.script4realestate.com/SELL" title="SELL" target="_self">SELL</a>
                    </li>
                    <li><a class="noTitle" href="http://demo.script4realestate.com/LETTING" title="LETTING"
                           target="_self">LETTING</a></li>
                    <li><a class="noTitle" href="http://demo.script4realestate.com/WANTED" title="WANTED"
                           target="_self">WANTED</a></li>
                    <li><a class="noTitle" href="http://demo.script4realestate.com/LATEST-PROPERTIES"
                           title="LATEST PROPERTIES" target="_self">LATEST PROPERTIES</a></li>
                    <li><a class="noTitle" href="http://demo.script4realestate.com/PREMIUM-MEMBERSHIP"
                           title="PREMIUM MEMBERSHIP" target="_self">PREMIUM MEMBERSHIP</a></li>
                    <li><a class="noTitle" href="http://demo.script4realestate.com/POST-YOUR-REQUIRMENTS"
                           title="POST REQUIRMENT" target="_self">POST REQUIRMENT</a></li>
                    <li><a class="noTitle" href="javascript:void(0)" title="GALLERIES" target="_self">GALLERIES</a>
                        <ul>
                            <li class="current"><a class="noTitle"
                                                   href="http://demo.script4realestate.com/Photo-Gallery"
                                                   title="Photo Gallery" target="_self">Photo Gallery</a></li>
                            <li class="current"><a class="noTitle"
                                                   href="http://demo.script4realestate.com/Video-Galleries"
                                                   title="Video Gallery" target="_self">Video Gallery</a></li>
                        </ul>
                    </li>
                    <li><a class="noTitle" href="http://demo.script4realestate.com/PROPERTY-CLASSIFIEDS"
                           title="CLASSIFIEDS" target="_self">CLASSIFIEDS</a></li>
                    <li><a class="noTitle" href="http://demo.script4realestate.com/CONTACTS" title="CONTACT US"
                           target="_self">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- Top Navigation End-->

<!-- Main Body Start -->
<div class="container members-area">
    <div class="row">

        <!-- Member Sidebar Start -->
        <div class="col-md-3 col-sm-4 col-xs-12">
            <link href="USER%20CONTROL%20PANEL_files/members-menu.css" media="screen" rel="stylesheet" type="text/css">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-angle-down"></i> MY ACCOUNT
                </div>
                <div class="panel-body">

                    <ul class="sky-mega-menu sky-mega-menu-pos-left sky-mega-menu-anim-scale sky-mega-menu-response-to-switcher">
                        <li>
                            <a href="http://demo.script4realestate.com/Member-Dashboard" target="_self">
                                <img src="USER%20CONTROL%20PANEL_files/1370936271_Home.png" border="0">
                                <!--<i class="fa fa-link"></i>-->Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="http://demo.script4realestate.com/Reviewing-Profile" target="_self">
                                <img src="USER%20CONTROL%20PANEL_files/1368591609_address_book.png" border="0">
                                <!--<i class="fa fa-link"></i>-->My Profile
                            </a>
                        </li>
                        <li>
                            <a href="http://demo.script4realestate.com/Change-Of-Password" target="_self">
                                <img src="USER%20CONTROL%20PANEL_files/1369741455_locked_2.png" border="0">
                                <!--<i class="fa fa-link"></i>-->Change Password
                            </a>
                        </li>
                        <li>
                            <a href="http://demo.script4realestate.com/List-Of-Members-223" target="_self">
                                <img src="USER%20CONTROL%20PANEL_files/1370936378_Users.png" border="0">
                                <!--<i class="fa fa-link"></i>-->Members
                            </a>
                        </li>
                        <li aria-haspopup="true">
                            <a href="http://demo.script4realestate.com/My-Property-Manager" target="_self">
                                <img src="USER%20CONTROL%20PANEL_files/1369736668_apartment_building.png" border="0">
                                <!--<i class="fa fa-link"></i>-->Manage My Listing
                            </a>

                            <div class="grid-container3">
                                <ul>
                                    <li><a href="http://demo.script4realestate.com/Manage-My-Properties" target="_self"><img
                                                src="USER%20CONTROL%20PANEL_files/1369736668_apartment_building.png"
                                                border="0"><!--<i class="fa fa-list"></i>-->Manage Properties</a></li>
                                    <li><a href="http://demo.script4realestate.com/Favorite-Properties"
                                           target="_self"><img
                                                src="USER%20CONTROL%20PANEL_files/1369740085_facebook_like.png"
                                                border="0"><!--<i class="fa fa-list"></i>-->My Favorite List</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="http://demo.script4realestate.com/Invoice-List" target="_self">
                                <img src="USER%20CONTROL%20PANEL_files/1370936804_Money.png" border="0">
                                <!--<i class="fa fa-link"></i>-->Invoices
                            </a>
                        </li>
                        <li>
                            <a href="http://demo.script4realestate.com/My-Invoice-Items" target="_self">
                                <img src="USER%20CONTROL%20PANEL_files/1418899217_cash_register.png" border="0">
                                <!--<i class="fa fa-link"></i>-->My Invoice Item(s)
                            </a>
                        </li>
                        <li>
                            <a href="http://demo.script4realestate.com/Administrator/login/logout" target="_self">
                                <img src="USER%20CONTROL%20PANEL_files/1369741272_Exit.png" border="0">
                                <!--<i class="fa fa-link"></i>-->Logout
                            </a>
                        </li>

                    </ul>

                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-angle-down"></i> ACCOUNT OVERVIEW
                </div>
                <div class="panel-body">
                    <div class="list-group">

                        <a href="#" class="list-group-item">Number of Listing(s)<span
                                class="label label-success pull-right">1</span></a>
                        <a href="http://demo.script4realestate.com/Comment/backendcomment/list" class="list-group-item">Comments<span
                                class="label label-info pull-right">0</span></a>
                        <a href="http://demo.script4realestate.com/Members-Invoice-Item-List/status/2"
                           class="list-group-item">Pending Invoice(s)<span
                                class="label label-danger pull-right">0</span></a>
                    </div>
                </div>
            </div>
            <div class="text-center hidden-xs">

                <img src="USER%20CONTROL%20PANEL_files/membership.png" alt="" height="400" width="210">

            </div>
        </div>
        <!-- Member Sidebar End -->


        <!-- Member Content Start -->
        <div class="col-md-9 col-sm-8 col-xs-12">
            <script type="text/javascript" src="USER%20CONTROL%20PANEL_files/jquery.js"></script>
            <script type="text/javascript" src="USER%20CONTROL%20PANEL_files/jquery_004.js"></script>
            <link href="USER%20CONTROL%20PANEL_files/breadcrumb.css" media="screen" rel="stylesheet" type="text/css">
            <script type="text/javascript">
                $(document).ready(function () {
                    $("#breadCrumb3").jBreadCrumb();
                })
            </script>
            <div class="breadCrumbHolder module">
                <div id="breadCrumb3" class="breadCrumb module">
                    <div style="overflow:hidden; position:relative;  width: 848px;">
                        <div>
                            <ul style="width: 5000px;">
                                <li class="first">
                                    <a href="http://demo.script4realestate.com/">Home</a>
                                </li>
                                <li class="last">
                                    Dashboard
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Start-->
            <script type="text/javascript">

                $(document).ready(function () {
                    logOut('a.logout_btn', '<i class="fa fa-circle-o-notch fa-spin"></i>', '<br>Please Wait while the page is redirecting to original page........', '');
                });
            </script>
            <div class="welcome-panel">
                <h1>My Dashboard</h1>

                <div class="row">
                    <div class="col-md-2 col-xs-2">
                        <img src="USER%20CONTROL%20PANEL_files/avatar.png" class="img-circle img-responsive" border="0">
                    </div>
                    <div class="col-md-7 col-xs-7">
                        <p>
                            Mr. Default User<br>
                            User Name : user@systemdefault.com<br>
                            Email : user@systemdefault.com<br>
                            Last Login : Wednesday, February 17, 2016 01:56 PM<br>
                        </p>
                        <a href="javascript:%20void(0)" class="logout_btn btn btn-success btn-sm no-radius"><i
                                class="fa fa-unlock-alt"></i> &nbsp;Log Out</a>
                    </div>

                    <div class="col-md-3 col-xs-3">
                        <figure>
                            <i class="fa fa-calendar date"></i>
                            Feb<br>
                            <span class="count">17</span>
                            2016
                        </figure>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <i class="fa fa-angle-down"></i> USER CONTROL PANEL
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="http://demo.script4realestate.com/Dashboard" class="btn btn-primary no-radius"><i
                                    class="fa fa-gear"></i> Premium Control Panel</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body dashboard-icon">
                    <fieldset>
                        <legend>User Management</legend>
                        <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-4">
                                <div class="tools-icon"><a
                                        href="http://demo.script4realestate.com/Members-Frontend-List">
                                        <div class="circle circle-blue"><i class="fa fa-user"></i><span><i
                                                    class="fa fa-plus action"></i></span></div>
                                        <span>Manage Users</span></a></div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-4">
                                <div class="tools-icon"><a
                                        href="http://demo.script4realestate.com/Members-Frontend-List">
                                        <div class="circle circle-red"><i class="fa fa-user"></i><span><i
                                                    class="fa fa-search action"></i></span></div>
                                        <span>User Search</span></a></div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-4">
                                <div class="tools-icon"><a href="http://demo.script4realestate.com/Change-Password">
                                        <div class="circle circle-purple"><i class="fa fa-key"></i></div>
                                        <span>Change Password</span></a></div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-4">
                                <div class="tools-icon"><a
                                        href="http://demo.script4realestate.com/Members-Profile-Update">
                                        <div class="circle circle-orange"><i class="fa fa-key"></i><span><i
                                                    class="fa fa-info action"></i></span></div>
                                        <span>View Profile</span></a></div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>Modules</legend>
                        <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-4">
                                <div class="tools-icon"><a
                                        href="http://demo.script4realestate.com/Members-Invoice-Item-List">
                                        <div class="circle circle-pink"><i class="fa fa-money"></i><span><i
                                                    class="fa fa-check-square-o action"></i></span></div>
                                        <span>Billing</span></a></div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-4">
                                <div class="tools-icon"><a
                                        href="http://demo.script4realestate.com/Comment/backendcomment/list">
                                        <div class="circle circle-blue"><i class="fa fa-comment"></i><span><i
                                                    class="fa fa-check-square-o action"></i></span></div>
                                        <span>Comments</span></a></div>
                            </div>
                            <!--<div class="tools-icon"><a href=""><div class="icon visitor-comment-tools"></div><p class="tools-tip"></p></a></div>-->
                            <div class="col-md-2 col-sm-4 col-xs-4">
                                <div class="tools-icon"><a
                                        href="http://demo.script4realestate.com/Members-Payment-Gateway-List">
                                        <div class="circle circle-green"><i class="fa fa-credit-card"></i><span><i
                                                    class="fa fa-check-square-o action"></i></span></div>
                                        <span>Payment Gateway</span></a></div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Classifieds (Property)</legend>
                        <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-4">
                                <div class="tools-icon"><a
                                        href="http://demo.script4realestate.com/Members-Favorite-Property-List">
                                        <div class="circle circle-blue"><i class="fa fa-bookmark"></i><span><i
                                                    class="fa fa-check-square-o action"></i></span></div>
                                        <span>Favorite List</span></a></div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-4">
                                <div class="tools-icon"><a
                                        href="http://demo.script4realestate.com/Members-Property-List">
                                        <div class="circle circle-orange"><i class="fa fa-building-o"></i><span><i
                                                    class="fa fa-cog action"></i></span></div>
                                        <span>Manage Listing(s)</span></a></div>
                            </div>
                        </div>
                    </fieldset>


                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-angle-down"></i> LATEST NEWS
                </div>

                <div class="panel-body">
                    <div class="media">
                        <a href="http://demo.script4realestate.com/News-Article/News/Licenses/License-Details"
                           title="License-Details" class="pull-left"><img
                                src="USER%20CONTROL%20PANEL_files/no-imager.jpg" class="img-thumbnail" width="50"
                                border="0"></a>

                        <div class="media-body">
                            <a href="http://demo.script4realestate.com/News-Article/News/Licenses/License-Details"
                               title="License-Details">License Details</a><br>


                            License Terms Summary&nbsp;


                            &nbsp;


                            For full terms please see&nbsp;here.&nbsp;
                            A license allows one application to...<br>
                            <span class="date">26-04-2012 [12:51 PM]</span>
                        </div>
                    </div>
                    <hr>
                    <div class="media">
                        <a href="http://demo.script4realestate.com/News-Article/News/Site-Building-Guide/Architecture-overview-Configuration-files"
                           title="Architecture-overview-Configuration-files" class="pull-left"><img
                                src="USER%20CONTROL%20PANEL_files/no-imager.jpg" class="img-thumbnail" width="50"
                                border="0"></a>

                        <div class="media-body">
                            <a href="http://demo.script4realestate.com/News-Article/News/Site-Building-Guide/Architecture-overview-Configuration-files"
                               title="Architecture-overview-Configuration-files">Architecture overview/Configuration
                                files</a><br>


                            Inside the config folder you will find several&nbsp;.ini&nbsp;and&nbsp;.xml&nbsp;files&nbsp;
                            In order to keep your...<br>
                            <span class="date">26-04-2012 [12:21 PM]</span>
                        </div>
                    </div>
                    <hr>
                    <div class="media">
                        <a href="http://demo.script4realestate.com/News-Article/News/HowTo%2C-Tips-Tricks/Creating-Custom-Blocks"
                           title="Creating-Custom-Blocks" class="pull-left"><img
                                src="USER%20CONTROL%20PANEL_files/no-imager.jpg" class="img-thumbnail" width="50"
                                border="0"></a>

                        <div class="media-body">
                            <a href="http://demo.script4realestate.com/News-Article/News/HowTo%2C-Tips-Tricks/Creating-Custom-Blocks"
                               title="Creating-Custom-Blocks">Creating Custom Blocks</a><br>
                            A block is a dynamic data model. The purpose of a block...<br>
                            <span class="date">26-04-2012 [12:02 PM]</span>
                        </div>
                    </div>
                    <hr>
                    <div class="media">
                        <a href="http://demo.script4realestate.com/News-Article/News/HowTo%2C-Tips-Tricks/Add%2C-edit-and-delete-Comments."
                           title="Add,-edit-and-delete-Comments." class="pull-left"><img
                                src="USER%20CONTROL%20PANEL_files/Comment.png" class="img-thumbnail" width="50"
                                border="0"></a>

                        <div class="media-body">
                            <a href="http://demo.script4realestate.com/News-Article/News/HowTo%2C-Tips-Tricks/Add%2C-edit-and-delete-Comments."
                               title="Add,-edit-and-delete-Comments.">Add, edit and delete Comments.</a><br>
                            This section holds all the comments that the users have made on...<br>
                            <span class="date">26-04-2012 [11:25 AM]</span>
                        </div>
                    </div>
                    <hr>
                    <a href="http://demo.script4realestate.com/News" class="btn btn-primary">More News</a>
                </div>
            </div>

            <!-- Content End -->
        </div>
        <!-- Member Content End -->
    </div>
</div>
<!-- Main Body End -->

<!-- Footer Start -->

<footer id="footer">
    <div class="top-row">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="block block-featured-gallery">
                        <h3>FEATURED GALLERY</h3>

                        <div class="block-body">

                            <figure>
                                <a href="http://demo.script4realestate.com/Details/Image-Gallery/vacationl-templates"><img
                                        src="USER%20CONTROL%20PANEL_files/1405333653_vacationl-templates.jpg"
                                        height="100" width="130" border="0"></a>
                                <br>

                                <h3>
                                    <a href="http://demo.script4realestate.com/Details/Image-Gallery/vacationl-templates"
                                       title="vacationl-templates">vacationl-templates</a></h3>
                            </figure>


                            <figure>
                                <a href="http://demo.script4realestate.com/Details/Image-Gallery/Commercials-ad"><img
                                        src="USER%20CONTROL%20PANEL_files/1405333522_banner-27.jpg" height="100"
                                        width="130" border="0"></a>
                                <br>

                                <h3><a href="http://demo.script4realestate.com/Details/Image-Gallery/Commercials-ad"
                                       title="Commercials ad">Commercials...</a></h3>
                            </figure>


                            <figure>
                                <a href="http://demo.script4realestate.com/Details/Image-Gallery/Dream-Hotel"><img
                                        src="USER%20CONTROL%20PANEL_files/1405333187_search3.png" height="100"
                                        width="130" border="0"></a>
                                <br>

                                <h3><a href="http://demo.script4realestate.com/Details/Image-Gallery/Dream-Hotel"
                                       title="Dream Hotel">Dream...</a></h3>
                            </figure>


                            <figure>
                                <a href="http://demo.script4realestate.com/Details/Image-Gallery/layout-Block"><img
                                        src="USER%20CONTROL%20PANEL_files/1405335367_banner-28png.png" height="100"
                                        width="130" border="0"></a>
                                <br>

                                <h3><a href="http://demo.script4realestate.com/Details/Image-Gallery/layout-Block"
                                       title="layout &amp; Block">layout...</a></h3>
                            </figure>

                            <a href="http://demo.script4realestate.com/Image-Gallery" class="btn btn-success btn-xs">View
                                Property Gallery</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="block block-news">
                        <h3>LATEST NEWS</h3>

                        <div class="block-body">
                            <figure>
                                <!--<img src="data/frontImages/news/page_thumb/" width="80" border="0"  class="thumb"/>-->
                                <h3>
                                    <a href="http://demo.script4realestate.com/News-Article/News/Licenses/License-Details"
                                       title="License-Details">License Details</a></h3>


                                License Terms Summary&nbsp;


                                &nbsp;


                                For full terms please see&nbsp;here.&nbsp;
                                A license allows one application to be run on...<br>
                                <span class="date">26-04-2012 [12:51 PM]</span>
                            </figure>
                            <figure>
                                <!--<img src="data/frontImages/news/page_thumb/" width="80" border="0"  class="thumb"/>-->
                                <h3>
                                    <a href="http://demo.script4realestate.com/News-Article/News/Site-Building-Guide/Architecture-overview-Configuration-files"
                                       title="Architecture-overview-Configuration-files">Architecture
                                        overview/Configuration files</a></h3>


                                Inside the config folder you will find several&nbsp;.ini&nbsp;and&nbsp;.xml&nbsp;files&nbsp;
                                In order to keep your config files clear...<br>
                                <span class="date">26-04-2012 [12:21 PM]</span>
                            </figure>

                            <a href="http://demo.script4realestate.com/News" class="btn btn-success btn-xs">More
                                News</a>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">
                    <h3>Important Links:</h3>
                    <ul>
                        <li><a href="http://demo.script4realestate.com/Search-Property-List">Find Property</a></li>
                        <li><a href="http://demo.script4realestate.com/LATEST-PROPERTIES">Latest Additional</a></li>
                        <li><a href="http://demo.script4realestate.com/SELL">Selling</a></li>
                        <li><a href="http://demo.script4realestate.com/WANTED">Wanted</a></li>
                        <li><a href="http://demo.script4realestate.com/LETTING">Lettting</a></li>
                        <li><a href="http://demo.script4realestate.com/Photo-Gallery">Gallery</a></li>
                        <li><a href="http://demo.script4realestate.com/News">News &amp; Events</a></li>
                        <li><a href="http://demo.script4realestate.com/LATEST-PROPERTIES">List Properties</a></li>
                        <li><a href="http://demo.script4realestate.com/About-Us">About us</a></li>
                        <li><a href="http://demo.script4realestate.com/Contact-Us">Contact Us</a></li>

                        <li><a href="http://demo.script4realestate.com/Feedback">Feedback</a></li>
                        <li><a href="http://demo.script4realestate.com/Contact-Us">Report a Problem</a></li>
                        <!--<li><a href="/Members-Dashboard" class="jQueryBookmark" title="Realestate CMS - USER CONTROL PANEL">Add to Favorites</a></li>
                        <li><a href="Help">Help</a></li>
                        <li><a href="Advertising">Advertising</a></li>-->
                        <li><a href="http://demo.script4realestate.com/Terms-Conditions">Terms of Use</a></li>
                        <li><a href="http://demo.script4realestate.com/Site-Privecy-Policy">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-row">
        <div class="container">
            <div class="col-md-8 copyright">
                Copyright © 2016 All Rights Reserved &nbsp;<a href="http://www.script4realestate.com/" target="_blank"
                                                              title="Real estate script">Real estate script</a>
                Powered by eicra.com
                Version : 2.10.60
            </div>

            <div class="col-md-4">
                <div class="social">
                    <a href="http://www.facebook.com/" target="_blank"><img
                            src="USER%20CONTROL%20PANEL_files/facebook.png" title="Facebook" border="0"></a>
                    <a href="http://www.twitter.com/" target="_blank"><img
                            src="USER%20CONTROL%20PANEL_files/twitter.png" title="Twitter" border="0"></a>
                    <a href="https://plus.google.com/" target="_blank"><img
                            src="USER%20CONTROL%20PANEL_files/google-plus.png" title="Google Plus" border="0"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<div class="go-top"><a style="display: none;" href="#top" id="scroll-top"><i class="glyphicon glyphicon-chevron-up"></i></a>
</div>
<script type="text/javascript" src="USER%20CONTROL%20PANEL_files/scroll.js"></script>

</body>
</html>