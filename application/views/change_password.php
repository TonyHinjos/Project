<!DOCTYPE html>
<html class="k-ff k-ff44" dir="ltr" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- base href="http://demo.logisticsscript.com/" -->
    <link rel="shortcut icon"
          href="<?php base_url(); ?>../assets/data/adminImages/headerImages/1369722780_favicon.ico">
    <meta name="keywords"
          content="Demo - Logistics, CMS, Content Management System, Open source CMS, Zend Framework, Zend Framework CMS, jQuery, 960gs, 960 Grid System, Layout Editor">
    <meta name="description" content="Demo - Logistics - A Commercial CMS powered by Eicrasoft Ltd, jQuery and 960grid">
    <title>Land|GIS</title>
    <script type="" src="<?php base_url(); ?>assets/admin/js/jquery_002.js"></script>
    <script type="" src="<?php base_url(); ?>assets/admin/js/jquery-ui.js"></script>
    <script type="" src="<?php base_url(); ?>assets/admin/js/common.js"></script>
    <script type="" src="<?php base_url(); ?>assets/admin/js/slicker.js"></script>
    <script type="text/javascript" src="<?php base_url(); ?>assets/admin/js/dropdown.js"></script>
    <script type="" src="<?php base_url(); ?>assets/admin/js/jquery.js"></script>
    <script type="text/javascript" src="<?php base_url(); ?>assets/admin/js/ddslick.js"></script>

    <link href="<?php base_url(); ?>assets/admin/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/admin/css/jquery-ui.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/admin/css/mega-menu.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/admin/css/mega-menu-black.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="<?php base_url(); ?>assets/admin/css/font-awesome.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/admin/css/floatingbar.css" media="screen" rel="stylesheet" type="text/css">

    <script type="" src="<?php base_url(); ?>assets/admin/js/kendo_002.js"></script>
    <script type="" src="<?php base_url(); ?>assets/admin/js/kendo_003.js"></script>
    <script type="" src="<?php base_url(); ?>assets/admin/js/kendo.js"></script>
    <script type="" src="<?php base_url(); ?>assets/admin/js/uploader.js"></script>

    <link href="<?php base_url(); ?>assets/admin/css/kendo.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/admin/css/kendo_002.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/admin/css/stylesheet.css" media="screen" rel="stylesheet" type="text/css">
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

<!--Header Start-->

<script type="text/javascript">
    $(document).ready(function () {

        //Variable que almacena el arreglo que se mostrara en el dropdown
        var ddData = [
            {
                text: "<i class='fa fa-user'></i> User Profile",
                value: 0,
                link_value: "/Members/index/profile",
                //description: "",
                //imageSrc: "application/modules/Administrator/layouts/scripts/images/tools/user.png"
            }
        ];

        var dIndex = null;

        for (var i = 0; i < ddData.length; i++) {
            var dLink = ddData[i].link_value;
            var cLink = "/Members/password/change/menu_id/Logistics-Home";
            var rgxp = new RegExp(dLink, "g");
            if (cLink.match(rgxp) != null) {
                dIndex = ddData[i].value;
                break;
            }
        }

        //Dropdown Básico
        $('#dropdownBasico').ddslick({
            data: ddData,
            width: 220,
            selectText: "<i class='fa fa-cog'></i> General Settings",
            defaultSelectedIndex: dIndex,
            truncateDescription: true,
            imagePosition: "left",
            showSelectedHTML: true,
            clickOffToClose: true,
            onSelected: function (data) {
                //Llama función que hace algo
                //console.log(data);
                window.location.href = data.selectedData.link_value;
            }
        });
    });
</script>

<nav class="navbar-default navbar-fixed-top" id="user-nav">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-10">
                <ul class="btn-group">
                    <li class="btn active"><i class="fa fa-globe"></i> <span>Welcome:</span><strong class="font-bold"><?php echo($this->session->userdata('first_name')." ".$this->session->userdata('surname')); ?></strong>
                    </li>
                    <li class="btn">&nbsp;<a href="<?php echo(base_url());?>user_profile"><i
                            class="fa fa-user"></i><span>User</span></a></li>
                    <li class="btn"><a href="<?php echo(base_url());?>landing" target="_blank"><i class="fa fa-eye"></i>
                        <span>Public View</span></a></li>
                    <li class="btn"><a href="<?php echo (base_url()); ?>user_login/logout"><i
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
                   <!-- <li><a href="" class=""><i
                            class="fa fa-check-square-o"></i> Manage Application(s)</a></li>-->
                </ul>
            </div>

        </li>
        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-globe"></i> <span>APPLICATIONS HISTORY</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="<?php echo(base_url()); ?>manage_applications" class="" ><i class="fa fa-search"></i>
                        Manage Applications</a></li>
                </ul>
            </div>

        </li>
        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-globe"></i> <span>GIS VIEWING</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="<?php base_url(); ?>gis_view" class="" target="_blank"><i class="fa fa-laptop"></i>
                        Site Preview</a></li>
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
                        County Management</a></li>
                    <li><a href="" class=""><i
                            class="fa fa-crosshairs"></i> State Management</a></li>
                    <li><a href="" class=""><i
                            class="fa fa-map-marker"></i> City/Area Management</a></li>
                </ul>
            </div>

        </li>
    </ul>
    <!--/ mega menu -->    </div>

<!--Header End-->

<!-- Body Start-->
<div class="container-fluid">
    <div class="row">
        <!--Tree Menu Start-->
        <!--Tree Menu End-->

        <!--Content Start-->
        <div class=""> <!-- col-lg-12 -->
            <script type="text/javascript">
                var settingObj = {
                    form_action: {
                        form_id: 'changePass',
                        hasTinyMCE: false,
                        go_message_id: 'actionMessage',
                        common_msg_field_id: 'actionMessage',
                        dialog_container_id: 'dialog_container',
                        dialog_progressbar_id: 'progressbar'
                    },
                    messages: {
                        common_msg_dialog_id: 'dialog_msg',
                        common_confirn_dialog_id: 'dialog-confirm',
                        common_ok: "Ok",
                        common_delete_selected: "Delete",
                        common_cancel: "Cancel",
                        common_delete_confirm: "product_list_delete_confirm",
                        common_publish_title: "Click To Approve",
                        common_unpublish_title: "Click To Disapprove",
                        common_publish_selected: "Approve",
                        common_unpublish_selected: "Disapprove",
                        common_publish_perm: "You do not have enough access privileges to publish or unpublish this.",
                        common_perm_err: "You do not have enough access privileges to perform this action.",
                        common_selected_err: "product_selected_err"
                    }
                };
                $(document).ready(function () {
                    $('a.reset_btn').click(function () {
                        commonResetFormFields(settingObj);
                        commonRemoveFormError(settingObj);
                    });

                    $('a.change_pass_btn').click(function () {
                        $.ajax({
                            url: "/Members/Password/change",
                            type: 'POST',
                            data: {
                                oldpass: $('#oldpass').val(),
                                confirmPassword: $('#confirmPassword').val(),
                                password: $('#password').val(),
                                user_id: ""
                            },
                            beforeSend: function () {
                                commonOpenLoaderDialog(settingObj);
                                commonRemoveFormError(settingObj);
                            },
                            success: function (response) {
                                //alert(response);
                                try {
                                    var json_arr = eval("(" + response + ")");
                                    commonCloseLoaderDialog(settingObj);
                                    if (json_arr.status == 'ok') {
                                        $('#actionMessage').html(succMsgDesign(json_arr.msg));
                                        commonGoMessage(settingObj);
                                        commonResetFormFields(settingObj);
                                    }
                                    else if (json_arr.status == 'errV') {
                                        $('#actionMessage').html(errMsgDesign("There are some error to perform this action. Please See below --"));

                                        for (var i = 0; i < json_arr.msg.length; i++) {
                                            commonAddFormError(json_arr.msg[i].key, json_arr.msg[i].value);
                                        }
                                    }
                                    else {
                                        $('#actionMessage').html(errMsgDesign(json_arr.msg));
                                        commonGoMessage(settingObj);
                                    }
                                }
                                catch (error) {
                                    commonCloseLoaderDialog(settingObj);
                                    var error_arr = [error, response];
                                    var msg = commonErrMsgException(error_arr);
                                    $('#actionMessage').html(errMsgDesign(msg));
                                }
                            },
                            error: function (xhr, status, error) {
                                commonCloseLoaderDialog();
                                var msg = "Error! " + xhr.status + " " + error;
                                $('#actionMessage').html(errMsgDesign(msg));
                            }

                        });
                    });
                });
            </script>

            <div class="container-fluid">
                <div class="tool-bar">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <h1><i class="fa fa-user action"><i class="fa fa-asterisk"></i></i> Change Password</h1>
                        </div>

                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 text-right btn-groups">
                            <a href="javascript:%20void(0);" class="reset_btn btn btn-success"><i
                                    class="fa fa-retweet"></i> Reset</a>
                            <a href="javascript:%20void(0);" class="change_pass_btn btn btn-primary"><i
                                    class="fa fa-save"></i> Save Password</a>
                        </div>
                    </div>
                </div>

                <section class="content">
                    <div class="row">
                        <div class="col-lg-3 visible-lg sidebar">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-angle-down"></i> User
                                </div>
                                <div class="panel-body">
                                    <ul class="sky-mega-menu sky-mega-menu-pos-left sky-mega-menu-response-to-icons sky-mega-menu-anim-scale">
                                        <li>
                                            <a href="<?php echo(base_url());?>user_profile" class=""><i
                                                    class="fa fa-credit-card"></i> User Profile</a>
                                        </li>


                                        <!--<li>
                                <a href=""  class="selected"class=""></a>
                            </li>-->


                                        <li>
                                            <a href="<?php echo(base_url());?>change_password"
                                               class="selected"><i class="fa fa-asterisk"></i> Change Password</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <form id="changePass" name="changePass" class="form-horizontal" role="form">
                                <div id="actionMessage"></div>
                                <fieldset>
                                    <legend>Change Your Password</legend>
                                    <div class="form-group">
                                        <label for="oldpass" class="col-sm-4 control-label">
                                            Old Password:<span class="required">*</span>
                                        </label>

                                        <div class="col-sm-7">

                                            <input name="oldpass" id="oldpass" size="25" class="form-control"
                                                   title="Enter Old Password" type="text">

                                            <div class="input-errors" id="oldpass_err"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="col-sm-4 control-label">
                                            New Password:<span class="required">*</span>
                                        </label>

                                        <div class="col-sm-7">

                                            <input name="password" id="password" value="" size="25" class="form-control"
                                                   type="password">

                                            <div class="input-errors" id="password_err"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="confirmPassword" class="col-sm-4 control-label">
                                            Confirm Password:<span class="required">*</span> </label>

                                        <div class="col-sm-7">

                                            <input name="confirmPassword" id="confirmPassword" value="" size="25"
                                                   class="form-control" type="password">

                                            <div class="input-errors" id="confirmPassword_err"></div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </section>

                <div id="dialog_container" title="Processing........ Please wait." style="display:none">
                    <div class="progress progress-striped active">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                             aria-valuemax="100" style="width: 100%">
                            <span class="sr-only">100% Complete</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!--Content End-->
    </div>
</div>
<!-- Body End -->

<!--Footer Start-->

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
<!--Footer End-->

<div class="ui-helper-hidden-accessible" aria-relevant="additions" aria-live="assertive" role="log"></div>
</body>
</html>