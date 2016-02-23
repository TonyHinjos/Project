<!DOCTYPE html>

<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon"
          href="<?php base_url(); ?>../assets/data/adminImages/headerImages/1369722780_favicon.ico"/>
<!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600,700' rel='stylesheet'
          type='text/css'>

    <meta name="keywords"
          content="Demo - Realestate CMS, CMS, Content Management System, Open source CMS, Zend Framework, Zend Framework CMS, jQuery, 960gs, 960 Grid System, Layout Editor">
    <meta name="description"
          content="Demo - Realestate CMS - A Commercial CMS powered by Eicrasoft Ltd, jQuery and 960grid">
    <title>Get New Password</title>
    <script type=""
            src="<?php base_url(); ?>../assets/application/layouts/scripts/realestate_default/vendor/scripts/jquery/jquery-1-9-1/jquery.js"></script>
    <script type="" src="../assets/application/layouts/scripts/realestate_default/vendor/bootstrap/js/dropdown.js"></script>
    <script type=""
            src="<?php base_url(); ?>../assets/application/layouts/scripts/realestate_default/vendor/scripts/jui/jui-1-10-3/green/jquery-ui.custom.js"></script>
    <script type=""
            src="<?php base_url(); ?>../assets/application/layouts/scripts/realestate_default/vendor/scripts/js/jquery.idTabs.min.js"></script>
    <script type="" src="<?php base_url(); ?>../assets/vendor/scripts/js/slicker.js"></script>
    <script type="" src="<?php base_url(); ?>../assets/vendor/scripts/js/common.js"></script>
   
     <link
        href="<?php base_url(); ?>../assets/application/layouts/scripts/realestate_default/vendor/bootstrap/css/bootstrap.min.css"
        media="screen"
        rel="stylesheet" type="text/css">
    <link
        href="<?php base_url(); ?>../assets/application/layouts/scripts/realestate_default/vendor/font-awesome/css/font-awesome.min.css"
        media="screen" rel="stylesheet" type="text/css">
    <link
        href="<?php base_url(); ?>../assets/application/layouts/scripts/realestate_default/vendor/scripts/jui/jui-1-10-3/green/jquery-ui.custom.css"
        media="screen" rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>../assets/application/layouts/scripts/realestate_default/css/template.css"
          media="screen" rel="stylesheet"
          type="text/css">
    <link href="<?php base_url(); ?>../assets/application/layouts/scripts/realestate_default/css/general.css"
          media="screen" rel="stylesheet"
          type="text/css">

   <script type="" src="<?php base_url(); ?>../assets/vendor/scripts/kendo/js/kendo.web.min.js"></script>
    <script type=""
            src="<?php base_url(); ?>../assets/vendor/scripts/kendo/js/cultures/kendo.culture.en.min.js"></script>
     <script type="" src="<?php base_url(); ?>../assets/vendor/scripts/kendo/js/cultures/kendo.culture.en-US.min.js"></script>
     <script type="" src="<?php base_url(); ?>../assets/application/modules/Portfolio/js/uploader.js"></script>


    <link href="<?php base_url(); ?>../assets/vendor/scripts/kendo/src/styles/kendo.common.css" media="screen"
          rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>../assets/vendor/scripts/kendo/src/styles/kendo.metro.css" media="screen"
          rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>../assets/application/layouts/scripts/realestate_default/css/pagination.css"
          media="screen" rel="stylesheet"
          type="text/css">       
    <link href="<?php base_url(); ?>../assets/application/layouts/scripts/realestate_default/css/menu.css" media="screen"
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
<!-- Header Start -->

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
                        Welcome to LandGIS | <a href="<?php echo(base_url()); ?>login/user_login">Login</a> | <a
                            href="<?php echo(base_url()); ?>login/user_role">Register</a></div>

                    <div class="col-xs-7 top-links">
                        <a href="<?php echo(base_url()); ?>login/user_login">My Account</a> |
                        <a href="<?php echo(base_url()); ?>login/contact_us">Contact us</a>

                    
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
                                    src="<?php base_url(); ?>../assets/application/layouts/scripts/realestate_default/images/logo.png"
                                    alt="Realestate CMS" title="LandSearchGIS" border="0"></a>
                        </div>
                    </div>

                    <div class="col-md-5">
                    <span class="listing-add"><a href="<?php echo(base_url()); ?>login/user_role"><span
                                class="glyphicon glyphicon-plus-sign"></span>Create Account</a></span>
                        </br>
                        <span><a style="font-size:15px;font-weight: 700"class="pull-right link-button " href="<?php echo(base_url()); ?>login/user_login"> Login</a></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Top Navigation Start-->

    <div class="container">
        <div style="text-align:center" class="row">
            <a style="font-size:15px;font-weight: 700;padding-top: 6px;padding-bottom: 6px" class="col-sm-3 col-xs-3 " title="landgis"
               href="<?php echo(base_url()); ?>">LandGIS</a>
            <a style="font-size:15px;font-weight: 700;padding-top: 6px;padding-bottom: 6px" class="col-sm-3 col-xs-3 " title="landsearch" href="">LandSearch</a>
            <a style="font-size:15px;font-weight: 700;padding-top: 6px;padding-bottom: 6px" class="col-sm-3 col-xs-3 " title="landmap" href="">LandMap</a>
            <a style="font-size:15px;font-weight: 700;padding-top: 6px;padding-bottom: 6px" class="col-sm-3 col-xs-3 " title="gislocation" href="">GIS Location</a>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>
<!-- Top Navigation End-->
</br>
</br>
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
            <script type="text/javascript">
                $(document).ready(function () {

                    $('a.reset_forget_btn').click(function () {
                        resetFields();
                        removeError();
                    });
                    function resetFields() {
                        $("#formPassword")[0].reset();
                    }

                    function removeError() {
                        $('#actionMessage').html('');

                        $.each($('#formPassword').serializeArray(), function (i, field) {
                            $('#' + field.name).removeClass('ui-state-error');
                            $('#' + field.name + '_err').html('');
                        });
                    }

                    function addError(key, errMsg) {
                        var err_id = key + '_err';
                        var field_name = key;
                        $('#' + field_name).addClass('ui-state-error');
                        $('#' + err_id).append(errMsg);
                    }

                    function openLoaderDialog() {
                        $('#dialog_container').dialog({
                            autoOpen: true,
                            modal: true,
                            show: 'fade',
                            resizable: 'false',
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

                    function getFormData() {
                        var fieldObj = {};
                        $.each($('#formPassword').serializeArray(), function (i, field) {
                            fieldObj[field.name] = field.value;
                        });
                        return fieldObj;
                    }

                    $('a.get_pass_btn').click(function () {
                        var formData = getFormData();
                        $.ajax({
                            url: "/Password/Backend/send",
                            type: 'POST',
                            data: formData,
                            beforeSend: function () {
                                openLoaderDialog();
                                removeError();
                            },
                            success: function (response) {
                                //alert(response);
                                var json_arr = eval("(" + response + ")");
                                closeLoaderDialog();
                                if (json_arr.status == 'ok') {
                                    $('#actionMessage').html(succMsgDesign(json_arr.msg));
                                    resetFields();
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
                            },
                            error: function (xhr, status, error) {
                                closeLoaderDialog();
                                var msg = "Error! " + xhr.status + " " + error;
                                $('#actionMessage').html(errMsgDesign(msg));
                            }
                        });
                    });


                });


            </script>

            <div class="mod">

                <div class="password-icon">
                    <h1>Get New Password</h1>
                </div>

                <div class="clear">&nbsp;</div>

                <form name="formPassword" id="formPassword" method="post">
                    <fieldset>
                        <legend>General Information</legend>
                        <div id="actionMessage"></div>

                        <div id="generalInfo" class="clear">
                            <div class="form-label-container">
                                <span class="label_class">Your Username:<span class="star_class">*</span></span>
                            </div>

                            <div class="form-field-container">
                                <div class="clear">
                                    <input type="text" name="username" id="username" value="" size="50"
                                           title="Enter Your Username"
                                           class="ui-widget-content ui-corner-all form-control"><br/><span
                                        class="input-errors" id="username_err"></span></div>
                            </div>
                        </div>
                        <div class="clear">&nbsp;</div>
                    </fieldset>

                    <div class="clear btn-container">
                        <span class="form-button ui-widget-content-1"><a href="javascript:  void(0);"
                                                                         class="reset_forget_btn">Reset</a></span>
                        <span class="form-button ui-widget-content-1"><a href="javascript: void(0);"
                                                                         class="get_pass_btn">Send</a></span>
                    </div>
                </form>
            </div>

            <div id="dialog_container" title="Processing........ Please wait.">
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
                            src="<?php base_url(); ?>../assets/application/layouts/scripts/realestate_default/images/facebook.png"
                            border="0"
                            title="Facebook"></a>
                    <a href="http://www.twitter.com" target="_blank"><img
                            src="<?php base_url(); ?>../assets/application/layouts/scripts/realestate_default/images/twitter.png"
                            border="0"
                            title="Twitter"></a>
                    <a href="https://plus.google.com" target="_blank"><img
                            src="<?php base_url(); ?>../assets/application/layouts/scripts/realestate_default/images/google-plus.png"
                            border="0"
                            title="Google Plus"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer End-->

<div class="go-top"><a href="#top" id="scroll-top"><i class="glyphicon glyphicon-chevron-up"></i></a></div>
<script type="text/javascript"
        src="<?php base_url(); ?>../assets/application/layouts/scripts/realestate_default/vendor/scripts/js/scroll.js"></script>
</body>
</html>
