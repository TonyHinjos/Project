<!DOCTYPE html>

<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon"
          href="<?php base_url(); ?>assets/data/adminImages/headerImages/1369722780_favicon.ico"/>
    <meta name="keywords"
          content="Demo - Realestate CMS, CMS, Content Management System, Open source CMS, Zend Framework, Zend Framework CMS, jQuery, 960gs, 960 Grid System, Layout Editor">
    <meta name="description"
          content="Demo - Realestate CMS - A LandGIS LSGIS powered by Anthony Wanjohi, jQuery and 960grid">
    <!--<title><?php if (!empty($title)) {
        echo($title);
    } ?></title>-->
    <title>Land|GIS</title>
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
        <script type=""
            src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/vendor/scripts/jquery/jquery-1-9-1/jquery-2.1.0.min.js"></script>

    <!--<link href="<?php base_url(); ?>assets/css/styles.css"
          media="screen" rel="stylesheet" type="text/css">-->
    <link href="<?php base_url(); ?>assets/css/nguvu.css"
          media="screen" rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/css/doc.min.css"
          media="screen" rel="stylesheet" type="text/css">


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
    <script type=""
            src="<?php base_url(); ?>assets/vendor/scripts/kendo/js/cultures/kendo.culture.en.min.js"></script>
    <script type=""
            src="<?php base_url(); ?>assets/vendor/scripts/kendo/js/cultures/kendo.culture.en-US.min.js"></script>
    <script type=""
            src="<?php base_url(); ?>assets/vendor/scripts/kendo/js/cultures/kendo.culture.en-US.min.js"></script>
    <script type="" src="<?php base_url(); ?>assets/application/modules/Portfolio/js/uploader.js"></script>
    <link href="<?php base_url(); ?>assets/vendor/scripts/kendo/src/styles/kendo.common.css" media="screen"
          rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/vendor/scripts/kendo/src/styles/kendo.metro.css" media="screen"
          rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/css/pagination.css"
          media="screen" rel="stylesheet"
          type="text/css">
    <link href="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/css/menu.css"
          media="screen"
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
<nav class="navbar navbar-default navbar-fixed-top ecitizen" id="subnav">
    <header>
        <div id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-5 user-links">
                        Welcome to LandGIS | <a href="<?php base_url(); ?>">Login</a> | <a
                            href="<?php echo(base_url()); ?>user_register">Register</a></div>

                    <div class="col-xs-7 top-links">
                        <a href="<?php base_url(); ?>">My Account</a> |
                        <a href="<?php echo(base_url()); ?>landing/contact_us">Contact us</a>

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
                                            var url = '/Frontend-Login';
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


                    </div>
                </div>
            </div>
        </div>
        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="logo">
                            <a href="<?php echo(base_url()); ?>"><img
                                    src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/images/logo.png"
                                    alt="Realestate CMS" title="LandSearchGIS" border="0"></a>
                        </div>
                    </div>

                    </br>
                    <span style="margin-left:230px"class="navbar-form"><a href="<?php echo (base_url()); ?>user_register" class="ts-bt bt-login"><i class="fa fa-user"></i>Register</a></span>
                    <span style="margin-right:20px"class="navbar-form"><a href="<?php echo (base_url()); ?>" class="ts-bt bt-login"><i class="fa fa-sign-in"></i>LOGIN</a></span>
    
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Top Navigation Start-->

    <div class="container">
        <div style="text-align:center" class="row">
            <a style="font-size:15px;font-weight: 700;padding-top: 6px;padding-bottom: 6px" class="col-sm-3 col-xs-3 "
               title="landgis"
               href="<?php echo(base_url()); ?>">LandGIS</a>
            <a style="font-size:15px;font-weight: 700;padding-top: 6px;padding-bottom: 6px" class="col-sm-3 col-xs-3 "
               title="landsearch" href="">LandSearch</a>
            <a style="font-size:15px;font-weight: 700;padding-top: 6px;padding-bottom: 6px" class="col-sm-3 col-xs-3 "
               title="landmap" href="">LandMap</a>
            <a style="font-size:15px;font-weight: 700;padding-top: 6px;padding-bottom: 6px" class="col-sm-3 col-xs-3 "
               title="gislocation" href="">GIS Location</a>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>
<!-- Top Navigation End-->
<!-- Header End -->

<!-- Top Navigation Start-->

<!-- Top Navigation End-->
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<!-- Banner Start-->
<div id="banner-inner">
    <div class="container">
        <h1>Find Your Way Find Your Dream Land</h1>
    </div>
</div>

<!-- Banner End-->

<!-- Body Start-->
<div class="container">

    <div class="content-container">

        <!-- Inner Layout End -->

        <!-- Content Start-->
        <div id="">

            <div id="fb-root"></div>
            <div id="status"></div>


            <script type="text/javascript">
                $(document).ready(function () {

                    var fb_login_status = 'yes';
                    if (fb_login_status == 'yes') {

                        $("#fb_login_btn").show();
                    }
                    else {
                        $("#fb_login_btn").hide();
                    }
                });

                function fb_login(self) {
                    FB.login(function (response) {
                        if (response.authResponse) {

                            access_token = response.authResponse.accessToken;
                            user_id = response.authResponse.userID;
                            FB.api('/me', function (response) {

                                var sex = response.gender;
                                if (sex == 'male') {
                                    var title = 'Mr.';
                                }
                                else {
                                    var title = 'Ms.';
                                }
                                var first_ame = response.first_name;

                                if (response.middle_name) {
                                    first_ame = first_ame + ' ' + response.middle_name;
                                }
                                var email;
                                if (response.email) {
                                    email = response.email;
                                }
                                else {
                                    email = '';
                                }
                                var country, city;
                                if (response.location) {
                                    countryName = response.location.name;
                                    var countryName = countryName.split(",");
                                    city = countryName[0];
                                    county = countryName[1];

                                }
                                else {
                                    city = ' ';
                                    county = ' ';
                                }
                                var roleId = '104';
                                var generated_pass = '64f5c3cb';

                                var infoFromFb = {
                                    firstName: first_ame,
                                    lastName: response.last_name,
                                    title: title,
                                    gender: sex,
                                    username: email,
                                    password: generated_pass,
                                    state: county,
                                    country: county,
                                    city: city,
                                    role_id: roleId,
                                    status: 1
                                };

                                var previous = $(self).html();
                                $.ajax({
                                    type: 'post',
                                    url: "/Members/frontend/fbauth/menu_id/Realestate-Home",
                                    data: infoFromFb,
                                    beforeSend: function () {
                                        $(self).html("Processing........ Please wait.");

                                    },
                                    success: function (response) {
                                        try {
                                            $(self).html(previous);
                                            var json_arr = jQuery.parseJSON(response);

                                            if (json_arr.status == 'err') {
                                                $('#actionMessage').html(errMsgDesign(json_arr.msg));
                                            }
                                            else {
                                                $('#actionMessage').html(succMsgDesign(json_arr.msg));
                                                var mem_link = 'Members-Dashboard';
                                                $('#mem_link').attr('href', mem_link);
                                                $('#login_box').css('display', 'none');
                                                $('#logout_box').css('display', '');

                                            }
                                        }
                                        catch (error) {
                                            $(self).html(previous);
                                            var error_arr = [error, response];
                                            var msg = commonErrMsgException(error_arr);
                                            $('#actionMessage').html(errMsgDesign(msg));
                                        }
                                    },
                                    error: function (xhr, status, error) {
                                        $(self).html(previous);
                                        var msg = "Error! " + xhr.status + " " + error;
                                        $('#actionMessage').html(errMsgDesign(msg));
                                    }
                                });
                            });

                        } else {

                            console.log('User cancelled login or did not fully authorize.');

                        }
                    }, {
                        scope: 'public_profile,email,user_location'
                    });
                }


                (function () {
                    var e = document.createElement('script');
                    e.src = document.location.protocol + '<?php base_url(); ?>assets/js/all.js';
                    e.async = true;
                    document.getElementById('fb-root').appendChild(e);

                    this.fb_config = function () {
                        {
                            FB.init({
                                appId: '00',
                                oauth: true,
                                status: true,
                                cookie: true,
                                xfbml: true

                            });
                        }
                        ;
                    }
                }).call(this);


                $(document).ready(function () {
                    $('a.btn-facebook').click(function () {
                        commonMsgDialog({
                            messages: {
                                common_msg_dialog_id: "dialog_msg",
                                common_ok: "Ok"
                            }
                        }, errMsgDesign("Facebook Login API has not been setup yet.  If you are site administration, please setup Facebook API under Admin => Site => Global Settings."))
                    });

                    $('a.reset_btn').click(function () {
                        resetFields();
                        removeError();
                    });

                    function openMsgDialog(msg) {
                        $('#dialog_msg').html(msg).dialog({
                            autoOpen: true,
                            modal: true,
                            show: 'explode',
                            resizable: true,
                            buttons: [{
                                text: "Ok", click: function () {
                                    $(this).dialog('option', 'hide', 'explode').dialog("close");
                                }
                            }],
                            open: function (event, ui) {
                                setTimeout(function () {
                                    if ($('#' + event.target.id).dialog('isOpen')) {
                                        $('#' + event.target.id).dialog('option', 'hide', 'explode').dialog('close');
                                    }
                                }, 10000);
                            }
                        });
                    }

                    function openLoaderDialog() {
                        $('#dialog_container').dialog({
                            autoOpen: true,
                            modal: true,
                            show: 'explode',
                            resizable: false,
                            open: function (event, ui) {
                                $("#progressbar").progressbar({
                                    value: 100

                                });
                            }
                        });
                    }

                    function closeLoaderDialog() {
                        $('#dialog_container').dialog('option', 'hide', 'explode').dialog('close');
                    }


                    function resetFields() {
                        $("#AdminLogin")[0].reset();
                    }

                    function removeError() {
                        $('#actionMessage').html('');

                        var filename = '';
                        var filevalue = '';
                        $.each($('#AdminLogin').serializeArray(), function (i, field) {
                            if (field.name.match(/\[\]$/)) {
                                var filearr = field.name.split('[]');
                                filename = filearr[0];
                            }
                            else if (field.name.match(/\[input\]$/)) {
                                var filearr = field.name.split('[input]');
                                filename = filearr[0];
                            }
                            else {
                                filename = field.name;
                            }
                            $('#' + filename).removeClass('ui-state-error');
                            $('#' + filename + '-input').removeClass('ui-state-error');
                            $('#' + filename + '_err').html('');
                            $('span.input-errors').html('');
                        });
                    }

                    function addError(key, errMsg) {
                        var err_id = key + '_err';
                        var field_name = key;
                        $('#' + field_name + '-input').addClass('ui-state-error');
                        $('#' + field_name).addClass('ui-state-error');
                        $('#' + err_id).append(errMsg);
                    }

                    function getFormData() {
                        var fieldObj = {};
                        $.each($('#AdminLogin').serializeArray(), function (i, field) {
                            fieldObj[field.name] = field.value;
                        });
                        return fieldObj;
                    }

                    $('input.logout_btn').click(function () {

                        $.ajax({
                            url: "/Members/frontend/logout/menu_id/Realestate-Home",
                            type: 'POST',
                            beforeSend: function () {
                                removeError();
                                openLoaderDialog();
                            },
                            success: function (response) {
                                //alert(response);
                                var json_arr = eval("(" + response + ")");

                                if (json_arr.status == 'ok') {
                                    $('#actionMessage').html(succMsgDesign(json_arr.msg));
                                    $('#login_box').css('display', '');
                                    $('#logout_box').css('display', 'none');
                                }
                                else if (json_arr.status == 'errV') {
                                    $('#actionMessage').html(errMsgDesign("There are some error to perform this action. Please See below --"));

                                    for (var i = 0; i < json_arr.msg.length; i++) {
                                        addError(json_arr.msg[i].key, json_arr.msg[i].value);
                                    }
                                }
                                else {
                                    $('#actionMessage').html(errMsgDesign(json_arr.msg));
                                }
                                closeLoaderDialog();
                                refreshCaptcha(json_arr);
                            }
                        });
                    });

                    $('input.login_send_btn').click(function () {
                        removeError();
                        openLoaderDialog();
                        var formData = getFormData();

                        $.ajax({
                            url: "<?php echo base_url(); ?>login/user_authenticate",
                            type: 'POST',
                            data: formData,
                            success: function (response) {
                                //alert(response);
                                var json_arr = eval("(" + response + ")");
                                refreshCaptcha(json_arr);
                                if (json_arr.status == 'ok') {
                                    $('#actionMessage').html(succMsgDesign(json_arr.msg));
                                    resetFields();
                                    var mem_link = 'user_dashboard';
                                    $('#mem_link').attr('href', mem_link);
                                    $('#login_box').css('display', 'none');
                                    $('#logout_box').css('display', '');

                                }
                                else if (json_arr.status == 'errV') {
                                    $('#actionMessage').html(errMsgDesign("There are some error to perform this action. Please See below --"));

                                    for (var i = 0; i < json_arr.msg.length; i++) {
                                        addError(json_arr.msg[i].key, json_arr.msg[i].value);
                                    }
                                }
                                else {
                                    $('#actionMessage').html(errMsgDesign(json_arr.msg));
                                }
                                closeLoaderDialog();

                            }
                        });
                    });

                    $('input.login_send_btn').keypress(function () {
                        removeError();
                        openLoaderDialog();
                        var formData = getFormData();

                        $.ajax({
                            url: "<?php echo base_url(); ?>login/user_authenticate",
                            type: 'POST',
                            data: formData,
                            success: function (response) {
                                //alert(response);
                                var json_arr = eval("(" + response + ")");
                                refreshCaptcha(json_arr);
                                if (json_arr.status == 'ok') {
                                    $('#actionMessage').html(succMsgDesign(json_arr.msg));
                                    resetFields();
                                    var mem_link = 'user_dashboard';
                                    $('#mem_link').attr('href', mem_link);
                                    $('#login_box').css('display', 'none');
                                    $('#logout_box').css('display', '');

                                }
                                else if (json_arr.status == 'errV') {
                                    $('#actionMessage').html(errMsgDesign("There are some error to perform this action. Please See below --"));

                                    for (var i = 0; i < json_arr.msg.length; i++) {
                                        addError(json_arr.msg[i].key, json_arr.msg[i].value);
                                    }
                                }
                                else {
                                    $('#actionMessage').html(errMsgDesign(json_arr.msg));
                                }
                                closeLoaderDialog();
                            }
                        });
                    });


                    function refreshCaptcha(json_arr) {
                        if (json_arr.captcha && json_arr.captcha.status && json_arr.captcha.status == 'ok') {
                            var captcha_name = json_arr.captcha.captcha_name;
                            $('input[name="' + captcha_name + '[id]"]').prev('img').attr('src', json_arr.captcha.ImgUrl + json_arr.captcha.id + json_arr.captcha.Suffix);
                            $('input[name="' + captcha_name + '[id]"]').val(json_arr.captcha.id);
                            $('#' + captcha_name + '_err').html('');
                        }
                    }

                    $('a.refresh_token').click(function () {
                        var self = this;
                        $.ajax({
                            url: "/Members/frontend/token/menu_id/Realestate-Home",
                            type: 'POST',
                            beforeSend: function () {
                                var option = '<img src="data/adminImages/loginImages/token_ani.gif" border="0" width="24" height="24"  title="Refreshing Token" />';
                                $(self).html(option);
                            },
                            success: function (response) {
                                //alert(response);
                                var json_arr = eval("(" + response + ")");
                                if (json_arr.status == 'ok') {
                                    $('#token').val(json_arr.token);
                                    $(self).html('<img src="data/adminImages/loginImages/token.png" border="0" width="24" height="24"  title="Click To Refresh Token" />');
                                }
                            }
                        });
                    });

                });
            </script>


            <div id="content-full-width" class="mod member-signup">
                <div class="signup-header">
                    <h1>LandGIS LSGIS</h1>

                    <div class="member-login">
                        <div class="login-box">
                            <h2 style="font-size:18px">Please Enter Your Login Details</h2>

                            <div id="actionMessage"></div>
                            <div id="login_box">
                     <form role="form" method="post" action="<?php echo(base_url()); ?>user_login/user_authenticate">
                                    <p>Username</p>

                                    <input style="width: 80%;
height: 60%;
margin: 0 0 5px 0;padding: 7px;" type="email"  name="email_address" id="username" value="" class="icon user-icon" required="">
                                    <span class="input-errors" id="username_err"></span>

                                    <p>Password</p>

                                    <input type="password" name="password" id="password" value=""
                                           class="icon pass-icon"  required=""> <span class="input-errors" id="password_err"></span>


                                    <div class="clear"><input type="submit" name="login" value="LOGIN"
                                                              class="btn"/></div>

                                    <a href="<?php echo(base_url()); ?>forget_password">Forgot Password?</a>

                                    <a href="javascript:void(0)" id="fb_login_btn" class="btn btn-facebook"><i
                                            class="icon-facebook"></i>

                                        <div></div>
                                        Login with facebook</a>

                                </form>
                            </div>

                            <div id="logout_box" style="display:none;">
                                <input type="button" name="login" value="LOGOUT" class="logout-btn logout_btn"/>

                                <div><a href="Members-Dashboard" id="mem_link">Member Area</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="signup-bottom-bar">
                    <span>LandGIS LSGIS - Promote more with featured products. Online Land verification Tool for your business.</span>
                </div>

                <img
                    src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/images/mod_img/login.jpg"
                    border="0"
                    class="lock">

                <div class="info">
                    <p>For New Member:</p>
                    <ul>
                        <li>If you are already a member, please use the form on right to login to our Members Section.
                        </li>
                        <li>If you are not a member, please click on link below to signup. Registration is easy and
                            FREE!
                        </li>
                    </ul>
                    <br>

                    <p>For Existing Member:</p>
                    <ul>
                        <li>If you are already a Member, please use the form on the right, to login to your existing
                            account and enjoy all Member Benefits.
                        </li>
                    </ul>

                    <br/>

                    <div>

                        Not ready to signup yet? Feel free to browse some other popular site sections!
                    </div>
                    <a class="join" href="<?php echo(base_url()); ?>user_register">Join Now FREE!</a>
                </div>
            </div>

            <div id="dialog_msg" title="Message Dialog"></div>
            <div id="dialog_container" style="display:none" title="Processing........ Please wait.">
                <div id="progressbar"></div>
            </div>
        </div>
        <!-- Content End-->

    </div>
</div>
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
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer End-->

<div class="go-top"><a href="#top" id="scroll-top"><i class="glyphicon glyphicon-chevron-up"></i></a></div>
<!--<script src="<?php base_url(); ?>assets/js/jquery.min.js"></script>-->
<!--<script src="<?php base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php base_url(); ?>assets/js/scripts.js"></script>-->

<script type="text/javascript"
        src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/vendor/scripts/js/scroll.js"></script>
</body>
</html>
