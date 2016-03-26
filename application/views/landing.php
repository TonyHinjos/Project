<!DOCTYPE html>


<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php base_url(); ?>assets/data/adminImages/headerImages/1369722780_favicon.ico"/>
   
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600,700' rel='stylesheet'
          type='text/css'>

    <meta name="keywords"
          content="Demo - Realestate CMS, CMS, Content Management System, Open source CMS, Zend Framework, Zend Framework CMS, jQuery, 960gs, 960 Grid System, Layout Editor">
    <meta name="description"
          content="Demo - Realestate CMS - A Commercial CMS powered by Eicrasoft Ltd, jQuery and 960grid">
    <title><?php if (!empty($title)) {echo($title); } ?></title>
    
    
    <script type=""
            src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/vendor/scripts/jquery/jquery-1-9-1/jquery.js"></script>
    <script type=""
            src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/vendor/bootstrap/js/dropdown.js"></script>
    <script type=""
            src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/vendor/scripts/jui/jui-1-10-3/green/jquery-ui.custom.js"></script>
    <script type=""
            src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/vendor/scripts/js/jquery.idTabs.min.js"></script>
    <script type="" src="<?php base_url(); ?>assets/vendor/scripts/js/slicker.js"></script>
    <script type="" src="<?php base_url(); ?>assets/vendor/scripts/js/common.js"></script>
    

    <link
        href="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/vendor/bootstrap/css/bootstrap.min.css"
        media="screen"
        rel="stylesheet" type="text/css">
    
    <link
        href="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/vendor/font-awesome/css/font-awesome.min.css"
        media="screen" rel="stylesheet" type="text/css">
    <link
        href="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/vendor/scripts/jui/jui-1-10-3/green/jquery-ui.custom.css"
        media="screen" rel="stylesheet" type="text/css">

    <link href="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/css/template.css"
          media="screen" rel="stylesheet"
          type="text/css">
    <link href="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/css/general.css"
          media="screen" rel="stylesheet"
          type="text/css">

    <script type="" src="<?php base_url(); ?>assets/vendor/scripts/kendo/js/kendo.web.min.js"></script>
    <script type="" src="<?php base_url(); ?>assets/vendor/scripts/kendo/js/cultures/kendo.culture.en.min.js"></script>
    <script type=""
            src="<?php base_url(); ?>assets/vendor/scripts/kendo/js/cultures/kendo.culture.en-US.min.js"></script>
    <script type="" src="<?php base_url(); ?>assets/application/modules/Portfolio/js/uploader.js"></script>
    <script type="text/javascript"
        src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/vendor/scripts/js/unslider.min.js"></script>

    <link href="<?php base_url(); ?>assets/vendor/scripts/kendo/src/styles/kendo.common.css" media="screen"
          rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/vendor/scripts/kendo/src/styles/kendo.metro.css" media="screen"
          rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/css/pagination.css"
          media="screen" rel="stylesheet"
          type="text/css">
     <link href="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/css/menu.css" media="screen"
      rel="stylesheet" type="text/css">
     <link href="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/css/unslider.css" media="screen"
      rel="stylesheet"
      type="text/css">
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
</head>
<body>

<script type="text/javascript">
    $(document).ready(function () {
        logOut('a.topbar_logout_btn', '<img src="application/layouts/scripts/realestate_default/images/loader/ajax-loader-email.gif" />', '', 'Sign in');
    });
</script>
<style>
.loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 99999999;
    background: url('assets/img/page-loader.gif') 50% 50% no-repeat rgb(249, 249, 249);
}
</style>

<div class="loader"></div>
<nav class="navbar navbar-default navbar-fixed-top" id="subnav">
    <header>
        <div id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-5 user-links">
                        Welcome to LandGIS | <a href="<?php base_url(); ?>user_login">Login</a> | <a
                            href="<?php base_url(); ?>user_register">Register</a></div>

                    <div class="col-xs-7 top-links">
                        <a href="<?php base_url(); ?>user_login">My Account</a> |
                        <a href="<?php base_url(); ?>landing/contact_us">Contact us</a>


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
                                            var url = '/';
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



                    </div>
                </div>
            </div>
        </div>

            <style>
             .ts-bt{
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    border-radius: 3px;
    background:#74A442 ;
    padding: 0 15px;
    line-height: 38px;
    text-transform: uppercase;
    color: #ffffff;
    font-size: 11px;
    letter-spacing:1px;
    display: inline-block;
    text-decoration: none;
    border: 1px solid #2a9341;
    -webkit-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}
.ts-bt:hover, .ts-bt:focus{
    background: #458218;
    color: #74A442;
}

            </style>

        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="logo">
                            <a href="<?php base_url(); ?>"><img
                                    src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/images/logo.png"
                                    alt="Realestate CMS" title="LandSearchGIS" border="0"></a>
                        </div>
                    </div>

                    </br>
                    <span style="margin-left:230px"class="navbar-form"><a href="<?php echo (base_url()); ?>user_register" class="ts-bt bt-login"><i class="fa fa-user"></i>Register</a></span>
                    <span style="margin-right:20px"class="navbar-form"><a href="<?php echo (base_url()); ?>user_login" class="ts-bt bt-login"><i class="fa fa-sign-in"></i>LOGIN</a></span>
    
                    <!-- <span class="listing-add"><a href="<?php base_url(); ?>login/user_register"><span
                                class="glyphicon glyphicon-plus-sign"></span>Create Account</a></span>
                        </br>
                        
                       <span style="margin-left:220px;background-color: #78AB46"> <a style="font-size:15px;font-weight: 700" href="<?php base_url(); ?>login/user_login"
                                class="btn btn-success btn-sm no-radius"><i class="fa fa-sign-in"></i> Login</a></span> 
                    </div>-->
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Top Navigation Start-->

    <div class="container  portal-trio">
        <div style="text-align:center" class="row">
            <a style="font-size:15px;font-weight: 700;padding-top: 6px;padding-bottom: 6px" class="col-sm-3 col-xs-3 landgis" title="landgis"href="<?php echo(base_url()); ?>">LandGIS</a>
            <a style="font-size:15px;font-weight: 700;padding-top: 6px;padding-bottom: 6px" class="col-sm-3 col-xs-3 landsearch" title="landsearch" href="">LandSearch</a>
            <a style="font-size:15px;font-weight: 700;padding-top: 6px;padding-bottom: 6px" class="col-sm-3 col-xs-3 landmap" title="landmap" href="">LandMap</a>
            <a style="font-size:15px;font-weight: 700;padding-top: 6px;padding-bottom: 6px" class="col-sm-3 col-xs-3 gislocation" title="gislocation" href="">GIS Location</a>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>
<!-- Top Navigation End-->

<!-- Banner Start-->

<!--<img src="application/layouts/scripts/realestate_default/images/slide.jpg" alt="" title="" border="0" class="img-responsive">-->

</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

<div class="banner">
    <ul>
        <li class="slide-1">
            <div class="container">
                <h1>The Best Way to Conduct a Land Search <p>Affordable & Attractive Price...</p>
                <span style="margin-right:550px;font-size: 15px" class="listing-add"><a href="<?php base_url(); ?>user_register"><span
                            class="glyphicon glyphicon-plus-sign"></span>Create Account</a></span>
                </h1>
            </div>
        </li>
        <li class="slide-2">
            <div class="container">
                <h1>Buy a land map having the Land rate number <p>At an affordable& Attractive Price...</p>
                <span style="margin-right:750px;font-size: 15px" class="listing-add"><a href="<?php base_url(); ?>user_register


                "><span
                            class="glyphicon glyphicon-plus-sign"></span>Create Account</a></span>
                </h1>

            </div>
        </li>
        <li class="slide-3">
            <div class="container">
                <h1>It Can Be Your Dream Land Parcel <p>Why leave it,just use the exact GIS location...</p>
                <span style="margin-right:550px;font-size: 15px" class="listing-add"><a href="<?php base_url(); ?>user_register"><span
                            class="glyphicon glyphicon-plus-sign"></span>Create Account</a></span>
                </h1>
            </div>
        </li>
    </ul>
</div>
<script>
    if (window.chrome) {
        $('.banner li').css('background-size', '100% 100%');
    }

    $('.banner').unslider({
        fluid: true,
        dots: true,
        keys: true,
        complete: function () {
        },
        delay: 5000,
        speed: 500
    });

    //  Find any element starting with a # in the URL
    //  And listen to any click events it fires
    $('a[href^="#"]').click(function () {
        //  Find the target element
        var target = $($(this).attr('href'));

        //  And get its position
        var pos = target.offset(); // fallback to scrolling to top || {left: 0, top: 0};

        //  jQuery will return false if there's no element
        //  and your code will throw errors if it tries to do .offset().left;
        if (pos) {
            //  Scroll the page
            $('html, body').animate({
                scrollTop: pos.top,
                scrollLeft: pos.left
            }, 1000);
        }

        //  Don't let them visit the url, we'll scroll you there
        return false;
    });

    var GoSquared = {acct: 'GSN-396664-U'};
</script>

<!-- Banner End-->

<!-- Body Start-->
<section class="container">
    <script type="text/javascript"
            src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/vendor/scripts/js/jquery.switchButton.js"></script>
    <link href="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/css/jquery.switchButton.css"
          media="screen"
          rel="stylesheet" type="text/css">


    <script type="text/javascript">
       

        $(document).ready(function () {
            $('#off-label').hide();
            function stripslashes(str) {
                str = str.replace(/\\'/g, '\'');
                str = str.replace(/\\"/g, '"');
                str = str.replace(/\\0/g, '\0');
                str = str.replace(/\\\\/g, '\\');
                return str;
            }

            $('select.country_id_box').change(function () {
                if ($('select.country_id_box option:selected').val() == 'any' || $('select.country_id_box option:selected').val() == '') {
                    $('select.area_id_box').html('<option value="any">Select Area .....</option>');
                    $('select.state_id_box').html('<option value="any">Select State .....</option>');
                }
                else {
                    $.ajax({
                        url: "/Property/frontend/states",
                        type: 'POST',
                        data: {id: $('select.country_id_box option:selected').val()},
                        beforeSend: function () {
                            $('select.state_id_box').html('<option value="any">Loading Data.....</option>');
                            $('select.area_id_box').html('<option value="any">Select Area .....</option>');
                            $('#state_id_box_err').html('<img src="application/layouts/scripts/realestate_default/images/loader/search.gif" border="0"/>');
                        },
                        success: function (response) {
                            //alert(response);
                            var json_arr = eval("(" + response + ")");
                            var option = '<option value="any">Select State .....</option>';
                            if (json_arr.status == 'ok') {
                                for (var i = 0; i < json_arr.states.length; i++) {
                                    option += '<option value="' + json_arr.states[i].state_id + '" >' + stripslashes(json_arr.states[i].state_name) + '</option>';
                                }
                                $('select.state_id_box').html(option);
                            }
                            else {
                                $('select.state_id_box').html('<option value="any">' + json_arr.msg + '</option>');
                            }
                            $('#state_id_box_err').html('');
                        }
                    });
                }
            });

            $('select.state_id_box').change(function () {

                if ($('select.state_id_box option:selected').val() == 'any' || $('select.state_id_box option:selected').val() == '') {
                    $('select.area_id_box').html('<option value="any">Select Area .....</option>');
                }
                else {
                    $.ajax({
                        url: "/Property/frontend/areas",
                        type: 'POST',
                        data: {id: $('select.state_id_box option:selected').val()},
                        beforeSend: function () {
                            $('select.area_id_box').html('<option value="any">Loading Data.....</option>');
                            $('#area_id_box_err').html('<img src="application/layouts/scripts/realestate_default/images/loader/search.gif" border="0" />');
                        },
                        success: function (response) {
                            //alert(response);
                            var json_arr = eval("(" + response + ")");
                            var option = '<option value="any">Select Area .....</option>';
                            if (json_arr.status == 'ok') {
                                for (var i = 0; i < json_arr.cities.length; i++) {
                                    option += '<option value="' + json_arr.cities[i].city_id + '" >' + stripslashes(json_arr.cities[i].city) + '</option>';
                                }
                                $('select.area_id_box').html(option);
                            }
                            else {
                                $('select.area_id_box').html('<option value="any">' + json_arr.msg + '</option>');
                            }
                            $('#area_id_box_err').html('');
                        }
                    });
                }
            });
        });

    </script>

    <script>
        $(function () {
            $("#slider-1.demo input").switchButton({
                width: 80,
                height: 20,
                button_width: 35,
                on_label: "Search all properties",
                off_label: "Search members' properties"
            });
        })
    </script>

    <script type="text/javascript">
        $(function () {
            $('a.toggle_recent_pro').click(function () {
                var self = this;
                $('#recent_pro_list').slideToggle(500, function () {
                    var src = $(self).children("img").attr('src');
                    var input = (src == 'application/layouts/scripts/realestate_default/images/round_arrow_down.gif') ? 'application/layouts/scripts/realestate_default/images/round_arrow.gif' : 'application/layouts/scripts/realestate_default/images/round_arrow_down.gif';
                    $(self).children("img").attr('src', input);
                });
                return false;
            });
        });
    </script>


    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb20 p20 text-center" style="background:#f7f9f9;">
        <h3 class="mt0 pt20 pb0">WELCOME TO <strong>LandGIS</strong></h3>

        <p class="lead pl20 pr20 pt0">
            Kenyan Citizens and Foreign Residents can now conduct a land search and GIS services and pay via mobile
            money and debit Cards. </p>
    </div>

    <div class="row block-property-feature">
        <div class="col-md-4">
            <figure class="first">
                <img
                    src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/images/buy-home.png">
                <strong>CONDUCT A LAND SEARCH ONLINE</strong><br>

                <p><a href="#">Buy your dream parcel of land after verifying the legal ownership ...</a></p>
            </figure>
        </div>

        <div class="col-md-4">
            <figure class="second">
                <img
                    src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/images/sell-home.png">
                <strong>BUY A LAND MAP</strong><br>

                <p><a href="#">Sell your property today & achieve high returns on your investment ...</a></p>
            </figure>
        </div>

        <div class="col-md-4">
            <figure class="third">
                <img
                    src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/images/rent-home.png">
                <strong>LAND GIS LOCATION</strong><br>

                <p><a href="#">For the latest deals view property in realtime using GIS Referencing ...</a>
                </p>
            </figure>
        </div>
    </div>
    <div class="row">
        <div class="st-content-noborder">

            <!--About-us top-content-->
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb20 text-center">
                <h3 class="mb0">WHY <strong>LandSearchGIS?</strong></h3>
                <h6 class="mt0">Get land Services <em>ChapChap!</em></h6>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12 mb20">

                <div class="media pl20">
                    <div class="media-left pr20">
                        <img class="noborder" src="<?php echo(base_url()); ?>assets/icons/padlock.png"/>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Single Sign-on</h4>
                        One account is all you need, a single username and password gets you into everything..enjoy!.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12 mb20">

                <div class="media pl20">
                    <div class="media-left pr20">
                        <img class="noborder" src="<?php echo(base_url()); ?>assets/icons/check.png"/>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Convenience</h4>

                        <p>Pay using mobile money, Debit Cards and online banking from local banks.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12 mb20">

                <div class="media pl20">
                    <div class="media-left pr20">
                        <img class="noborder" src="<?php echo(base_url()); ?>assets/icons/notification.png"/>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Notifications</h4>

                        <p>Receive email and sms notification every time your application has progressed.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12 mb20">

                <div class="media pl20">
                    <div class="media-left pr20">
                        <img class="noborder" src="<?php echo(base_url()); ?>assets/icons/download.png"/>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Online Services</h4>

                        <p>Fill land search online application forms, submit then receive your permit in PDF format from
                            wherever you are.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>


    <div class="row">
        <div class="st-content-noborder">

            <div class="block block-subscribe">
                <div class="block-body">
                    <img
                        src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/images/green-home.png"
                        border="0"
                        class="green-home"/><br>
        <span class="info" id="actionMessage_newsletter">
            Helping you to find your dream land. Join Now!        </span>

                    <form name="newsletter_form_box" id="newsletter_form_box" method="post" action="">

                        <input name="name_box" type="text" id="name_box" placeholder="User Name">
                        <span id="name_box_newsletter_err" class="newsletter_arr"></span>

                        <input name="email_box" type="text" id="email_box" placeholder="Email Address">
                        <span id="email_box_newsletter_err" class="newsletter_arr"></span>

                        <div class="newsletter_text"></div>
                        <input type="button" name="Submit2" value="SUBSCRIBE NOW" class="newsletter_snd_btn">
                    </form>

                    <div id="newsletter_loader_process" style="display:none;">
                        <img
                            src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/images/loader/newsletter-loader.gif"
                            border="0" class="loader"/>
                    </div>
                </div>
            </div>
        </div>

        <!-- Inner Layout Start -->

    </div>


    <div class="row">
        <div class="containerCentered">
            <h3 style="margin-left:500px">Get your account NOW</h3>
        </div>

        <div class="sc-mask"></div>

        <div class="container">
            <div class="aq-block aq-block-pg_heading_block col-md-12 col-xs-12 clearfix" id="aq-block-12-5">
                <div class="containerCentered">
                    <p style="margin-left:210px"class="lead"> A single account for Land
                        Search,Land Map and GIS Location services </p></div>
            </div>

            <div class="aq-block aq-block-pg_button_block col-md-12 col-xs-12 clearfix" id="aq-block-12-6">
                <a target="" href="<?php base_url(); ?>user_register">
                
                    <button style="margin-left:465px;background-color:#f7f9f9;color:green;" class="btn btn-lg hollow">
                        Create an account
                    </button>
                    
                </a>
            </div>
        </div>

    </div>
</section>
<!-- Body End-->


<!--Footer Start-->
<footer id="footer">


    <div class="bottom-row">
        <div class="container">
            <div class="col-md-8 copyright">
                LandGIS &copy; <?php echo(date("Y")); ?>  All Rights Reserved &nbsp;
                Powered by Anthony Wanjohi
                Version : &#50;.&#48;.&#49;
                <span id="applicationFooter">
                  <a href=""
                     style='color:white;' target="_blank">
                      Documentation
                  </a>
                </span>


            </div>

            <div class="col-md-4">
                <div class="social">
                    <a href="http://www.facebook.com" target="_blank"><img
                            src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/images/facebook.png"
                            border="0"
                            title="Facebook"></a>
                    <a href="http://www.twitter.com" target="_blank"><img
                            src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/images/twitter.png"
                            border="0"
                            title="Twitter"></a>
                    <a href="https://plus.google.com" target="_blank"><img
                            src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/images/google-plus.png"
                            border="0"
                            title="Google Plus"></a>
            <a href="https://www.linkedin.com/" target="_blank"><img src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/images/linkedin.png" title="Linked In" border="0"></a>
            <a href="https://www.youtube.com/" target="_blank"><img src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/images/youtube.png" title="You Tube" border="0"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer End-->

<div class="go-top"><a href="#top" id="scroll-top"><i class="glyphicon glyphicon-chevron-up"></i></a></div>
<!-- script references -->
<script type="text/javascript"
        src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/vendor/scripts/js/scroll.js"></script>

<!-- Owl Carosel -->
<script src="<?php base_url(); ?>assets/c4dvendor/owl/js/owl.carousel.min.js"></script>
<script src="<?php base_url(); ?>assets/js/c4djs/wow.min.js"></script>

<!-- Custom Script JS -->
<script src="<?php base_url(); ?>assets/js/c4djs/script.js"></script>


</body>
</html>
