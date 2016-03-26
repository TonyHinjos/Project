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
            var cLink = "/Members/index/profile/menu_id/Logistics-Home";
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
                    <li><a href="<?php echo(base_url()); ?>user_profileSS" class=""><i
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
                    <li><a href="http://demo.script4realestate.com/Menu/backend/add" class=""><i
                                class="fa fa-sitemap"></i> Create New Application</a></li>
                    <!--<li><a href="http://demo.script4realestate.com/Menu/backend/list" class=""><i
                            class="fa fa-gear"></i> Manage Applications</a></li>-->
                    <li><a href="http://demo.script4realestate.com/Menu/backend/list/draft/0" class=""><i
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
                                <li><a href="http://demo.script4realestate.com/Property/backendpro/add" class=""><i
                                            class="fa fa-institution"></i>Buy New Land Map</a></li>
                                <li><a href="http://demo.script4realestate.com/Property/backendpro/list" class=""><i
                                            class="fa fa-star-half-empty"></i> Buy New Land Deed Plan</a></li>
                                <li><a href="http://demo.script4realestate.com/Property/backendpro/saved" class=""><i
                                            class="fa fa-cogs"></i>Manage Maps</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

        </li>


        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-file-text"></i> <span>CONTENT</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="http://demo.script4realestate.com/Articles/backend/add" class=""><i
                                class="fa fa fa-pencil"></i> Create an Article</a></li>
                    <li><a href="http://demo.logisticsscript.com/Articles/backend/list" class=""><i
                                class="fa fa-th-list"></i> View All Articles</a></li>
                    <li><a href="http://demo.logisticsscript.com/Articles/backend/list" class=""><i
                                class="fa fa-gear"></i> Manage Articles</a></li>
                    <li><a href="http://demo.logisticsscript.com/Articles/backend/list/link/1" class=""><i
                                class="fa fa-link"></i> Link page with Menu</a></li>
                    <li><a href="http://demo.logisticsscript.com/Articles/backend/list/draft/0" class=""><i
                                class="fa fa-paste"></i> Publish draft page</a></li>
                </ul>
            </div>

        </li>


        <!--<li>
            <a href="javascript:void(0);" title=""><i class="fa fa-cube"></i> <span>REALESTATE</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="javascript:void(0);" class=""><i class="fa fa-building"></i> Property Management<i
                            class="text-right pull-right fa fa-angle-down"></i></a>

                        <div class="grid-container3">
                            <ul>
                                <li><a href="http://demo.script4realestate.com/Property/backendpro/add" class=""><i
                                        class="fa fa-institution"></i> Add New Property</a></li>
                                <li><a href="http://demo.script4realestate.com/Property/backendpro/list" class=""><i
                                        class="fa fa-cogs"></i> Manage Properties</a></li>
                                <li><a href="http://demo.script4realestate.com/Property/backendpro/saved" class=""><i
                                        class="fa fa-star-half-empty"></i> Favorite Property List</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

        </li>-->


        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-gift"></i> <span>MODULES</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="http://demo.logisticsscript.com/Projects/index/filepreview" class=""><i
                                class="fa fa-clipboard"></i> File Management</a></li>
                    <li><a href="http://demo.logisticsscript.com/Poll/backendpoll/list" class=""><i
                                class="fa fa-bar-chart-o"></i> Poll Manager</a></li>
                    <li><a href="http://demo.logisticsscript.com/Comment/backendcomment/list" class=""><i
                                class="fa fa-comments-o"></i> Comment Manager</a></li>
                </ul>
            </div>

        </li>

        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-money"></i> <span>BILLING</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="http://demo.logisticsscript.com/Invoice/backend/list" class=""><i
                                class="fa fa-ticket"></i> Manage Invoices<i
                                class="text-right pull-right fa fa-angle-down"></i></a>

                        <div class="grid-container3">
                            <ul>
                                <li><a href="http://demo.logisticsscript.com/Invoice/backend/list/status/1" class=""><i
                                            class="fa fa-check-circle"></i> Paid</a></li>
                                <li><a href="http://demo.logisticsscript.com/Invoice/backend/list/status/2" class=""><i
                                            class="fa fa-flag"></i> Unpaid</a></li>
                                <li><a href="http://demo.logisticsscript.com/Invoice/backend/list/status/0" class=""><i
                                            class="fa fa-times-circle"></i> Cancelled</a></li>
                            </ul>
                        </div>
                    </li>

                    <li><a href="http://demo.script4realestate.com/Invoice/backend/quotelist" class=""><i
                                class="fa fa-file-text-o"></i> Manage Quotation(s)</a></li>

                </ul>
            </div>

        </li>

        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-wrench"></i> <span>SETUP</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="http://demo.logisticsscript.com/Geo/country/list" class=""><i class="fa fa-globe"></i>
                            Country Management</a></li>
                    <li><a href="http://demo.logisticsscript.com/Geo/state/list" class=""><i
                                class="fa fa-crosshairs"></i> State Management</a></li>
                    <li><a href="http://demo.logisticsscript.com/Geo/city/list" class=""><i
                                class="fa fa-map-marker"></i> City/Area Management</a></li>
                </ul>
            </div>

        </li>
    </ul>
    <!--/ mega menu -->    </div>

<!-- Body Start-->
<div class="container-fluid">
    <div class="row">
        <!--Tree Menu Start-->
        <!--Tree Menu End-->

        <!--Content Start-->
        <div class=""> <!-- col-lg-12 -->
            <div class="container-fluid" id="topGo">

                <script type="text/javascript">
                    var settingObj = {
                        form_action: {
                            form_id: 'MemberProfileForm',
                            hasTinyMCE: false,
                            go_message_id: 'topGo',
                            common_msg_field_id: 'actionMessage',
                            dialog_container_id: 'dialog_container',
                            dialog_progressbar_id: 'progressbar'
                        },
                        calendar: {
                            calendar_include_time: true,
                            calendar_img_link: 'application/modules/Administrator/layouts/scripts/images/common/calendar.png',
                            monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                            dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                            buttonText: 'calendar',
                            dateFormat: 'yy-mm-dd',
                            dateTimeFormat: "yyyy-MM-dd HH:mm:ss tt",
                            culture: "en-US",
                            value: ''
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
                        floatingbar('#floatingbar', "#button_top_bar", null);
                        $('a.reset_btn').click(function () {
                            commonResetFormFields(settingObj);
                            commonRemoveFormError(settingObj);
                        });


                        $('a.edit_user_btn').click(function () {
                            var formData = commonGetFormData(settingObj.form_action.form_id, settingObj.form_action.hasTinyMCE);
                            formData.user_id = '5';
                            $.ajax({
                                url: "/Members/Index/profile",
                                type: 'POST',
                                data: formData,
                                beforeSend: function () {
                                    commonOpenLoaderDialog(settingObj);
                                    commonRemoveFormError(settingObj);
                                },
                                success: function (response) {
                                    //alert(response);
                                    try {
                                        var json_arr = eval("(" + response + ")");
                                        //refreshCaptcha(json_arr, 'div');
                                        commonCloseLoaderDialog(settingObj);
                                        if (json_arr.status == 'ok') {
                                            $('#actionMessage').html(succMsgDesign(json_arr.msg));
                                            commonGoMessage(settingObj);
                                        }
                                        else if (json_arr.status == 'errV') {
                                            $('#actionMessage').html(errMsgDesign("There are some error to perform this action. Please See below --"));

                                            for (var i = 0; i < json_arr.msg.length; i++) {
                                                focusFirst(json_arr.msg[i].key, json_arr.msg[i].value, i);
                                                commonAddFormError(json_arr.msg[i].key, json_arr.msg[i].value);
                                            }
                                        }
                                        else if (json_arr.status == 'errP') {
                                            $('#actionMessage').html(errMsgDesign("There are some error to perform this action. Please See below --"));
                                            commonAddFormError('confirmPassword', json_arr.msg);
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

                    function calender(id) {
                        $("#" + id).datepicker({
                            showOn: 'button',
                            buttonImage: 'application/modules/Administrator/layouts/scripts/images/common/calendar.png',
                            buttonImageOnly: true,
                            monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                            dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                            showAnim: 'slide',
                            buttonText: 'Calender',
                            dateFormat: 'yy-mm-dd',
                            autoSize: false,
                            showButtonPanel: false,
                            changeMonth: true,
                            changeYear: true
                        });

                        $("img[class='ui-datepicker-trigger']").each(function () {
                            $(this).attr('style', '');
                        });
                    }


                    /***********************************************************************UPLOAD FUNCTIONS START********************************************************/

                    function languageArray() {
                        var language_array = [];
                        language_array['portfolio_upload_dy_text_select'] = "Upload..";
                        language_array['portfolio_upload_text_cancel'] = "Cancel";
                        language_array['portfolio_upload_text_dropFilesHere'] = "drop files here to upload";
                        language_array['portfolio_upload_text_remove'] = "Remove";
                        language_array['portfolio_upload_text_retry'] = "Retry";
                        language_array['portfolio_upload_text_statusFailed'] = "Failed";
                        language_array['portfolio_upload_text_statusUploaded'] = "Uploaded";
                        language_array['portfolio_upload_text_statusUploading'] = "Uploading";
                        language_array['portfolio_upload_text_uploadSelectedFiles'] = "Upload Selected Files";
                        language_array['portfolio_file_extension_dy_support'] = "Allowable file extensions are ";
                        language_array['portfolio_file_no_ext_dy_support'] = "There is no extension in the uploaded file.";
                        language_array['portfolio_file_extension_dy_not_supportable_ext1'] = "Your file extension";
                        language_array['portfolio_file_extension_dy_not_supportable_ext2'] = "is NOT allowed to upload.";
                        language_array['portfolio_file_size_dy_support'] = "Maximum file size is ";
                        language_array['portfolio_file_upload_err'] = "Failed to upload file name";
                        return language_array;
                    }


                    function successFileDecoretion(fileObj, serverData, upload_field, upload_value_field) {
                        var extension = fileObj.extension;
                        var ext = extension.replace('.', '');

                        var img_path = commonFilePath(serverData.file_path, fileObj.name);


                        var img_code = '<img src="' + img_path + '" title="' + fileObj.name + '" width="50" height="40" class="img-thumbnail img-hover" />';
                        var down_link = (!isImage(fileObj)) ? '<br><a href="' + serverData.file_path + '/' + fileObj.name + '">Download</a>' : '';

                        var checked = '';
                        var primary = '';
                        var block = 'selected_file_' + upload_value_field;
                        var img_type = '';
                        switch (upload_value_field) {
                            case 'product_thumb':
                                checked = ($('#' + upload_value_field).val() == '') ? ' checked="checked" ' : '';
                                img_type = ($('#' + upload_value_field).val() == '') ? "<span class='main'>Main</span><br>" : "<span class='related'>Related</span><br>";
                                primary = '<input class="radio_style" type="radio" name="product_thumb_primary" id="product_thumb_primary" ' + checked + ' value="' + fileObj.name + '" title="Click To primary" />';
                                break;
                            case 'product_file':
                                checked = ($('#' + upload_value_field).val() == '') ? ' checked="checked" ' : '';
                                img_type = ($('#' + upload_value_field).val() == '') ? "<span class='main'>Main</span><br>" : "<span class='related'>Related</span><br>";
                                primary = '<input class="radio_style" type="radio" name="product_file_primary" id="product_file_primary" ' + checked + ' value="' + fileObj.name + '" title="Click To primary" />';
                                break;
                        }

                        var del_link = '<a href="javascript:void(0)" class="delete_uploaded_image_link" field_name="' + upload_value_field + '" file_name="' + fileObj.name + '" file_path="' + serverData.file_path + '"><span class="glyphicon glyphicon-remove-circle"></span></a>' + primary + down_link;
                        if (serverData.multi) {
                            $('#' + block).append('<div class="upload-img box">' + img_type + '<span>' + img_code + '<br>' + del_link + '</span></div>');
                            var file_val = ($('#' + upload_value_field).val() == '') ? fileObj.name : $('#' + upload_value_field).val() + ',' + fileObj.name;
                        }
                        else {
                            $('#' + block).html('<div class="upload-img box">' + img_type + '<span>' + img_code + '<br>' + del_link + '</span></div>');
                            var file_val = fileObj.name;
                        }
                        $('#' + upload_value_field).val(file_val);
                        deleteFiles("Main", "Related", "/Portfolio/frontend/remove", "Delete");

                    }

                    function onComplete(e) {

                    }

                    function onCancel(e) {

                    }

                    function onProgress(e) {

                    }

                    /***********************************************************************UPLOAD FUNCTIONS END********************************************************/

                </script>


                <div class="tool-bar">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <h1><i class="fa fa-user action"><i class="fa fa-info"></i></i> Your Profile</h1>
                        </div>

                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 text-right btn-groups">
                            <a href="javascript:%20void(0);" class="reset_btn btn btn-success"><i
                                    class="fa fa-retweet"></i> Reset</a>
                            <a href="javascript:%20void(0);" class="edit_user_btn btn btn-primary"><i
                                    class="fa fa-save"></i> Save Profile</a>
                        </div>
                    </div>
                </div>

                <section class="content">
                    <div id="button_top_bar"></div>
                    <div class="row">
                        <div class="col-lg-3 visible-lg sidebar">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-angle-down"></i> User
                                </div>
                                <div class="panel-body">
                                    <ul class="sky-mega-menu sky-mega-menu-pos-left sky-mega-menu-response-to-icons sky-mega-menu-anim-scale">
                                        <li>
                                            <a href="<?php echo(base_url());?>user_profile"
                                               class="selected"><i class="fa fa-credit-card"></i> User Profile</a>
                                        </li>


                                        <!--<li>
                                <a href=""  class="selected"class=""></a>
                            </li>-->


                                        <li>
                                            <a href="<?php echo(base_url());?>change_password"
                                               class=""><i class="fa fa-asterisk"></i> Change Password</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div id="actionMessage"></div>
                            <form name="MemberProfileForm" id="MemberProfileForm" class="form-horizontal" role="form">

                                <fieldset>
                                    <legend>Member Information</legend>


                                    <div class="form-group">
                                        <label for="title" class="col-sm-4 control-label label_class" style="">
                                            Title: </label>

                                        <div class="col-sm-7">

                                            <input name="title" id="title" value="Mr." title="Enter Title"
                                                   class="form-control" admin="1" frontend="1" type="text">

                                            <div class="input-errors" id="title_err"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="firstName" class="col-sm-4 control-label label_class" style="">
                                            Enter First Name:<span class="required star_class" style="">*</span>
                                        </label>

                                        <div class="col-sm-7">

                                            <input name="firstName" id="firstName" value="Default" size="35"
                                                   title="Type Your First Name" class="form-control" admin="1"
                                                   frontend="1" type="text">

                                            <div class="input-errors" id="firstName_err"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="lastName" class="col-sm-4 control-label label_class" style="">
                                            Enter Last Name:<span class="required star_class" style="">*</span> </label>

                                        <div class="col-sm-7">

                                            <input name="lastName" id="lastName" value="User" size="35"
                                                   title="Enter Your Last Name" class="form-control" admin="1"
                                                   frontend="1" type="text">

                                            <div class="input-errors" id="lastName_err"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="companyName" class="col-sm-4 control-label label_class" style="">
                                            Company Name: </label>

                                        <div class="col-sm-7">

                                            <input name="companyName" id="companyName" size="35"
                                                   title="Type your Company Name" class="form-control" admin="1"
                                                   frontend="1" type="text">

                                            <div class="input-errors" id="companyName_err"></div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <legend>Login Information</legend>


                                    <div class="form-group">
                                        <label for="username" class="col-sm-4 control-label label_class" style="">
                                            Email Address (As Username):<span class="required star_class"
                                                                              style="">*</span> </label>

                                        <div class="col-sm-7">

                                            <input name="username" id="username" value="user@systemdefault.com"
                                                   size="35"
                                                   title="Type your Email Address correct. This will consider as your login ID"
                                                   info="Type your Email Address correct. This will consider as your login ID"
                                                   class="form-control" admin="1" frontend="1" type="text">

                                            <div class="input-errors" id="username_err"></div>
                                        </div>
                                        <div class="ui-widget ui-helper-clearfix info">
                                            <div class="ui-widget-header ui-corner-all ui-state-default"
                                                 title="Type your Email Address correct. This will consider as your login ID">
                                                <p><span class="ui-icon ui-icon-info"></span></p></div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <legend>Contact Information</legend>


                                    <div class="form-group">
                                        <label for="address" class="col-sm-4 control-label label_class" style="">
                                            Your Address:<span class="required star_class" style="">*</span> </label>

                                        <div class="col-sm-7">

                                            <textarea name="address" id="address" title="Please Type your Address"
                                                      cols="30" rows="3" class="form-control" admin="1" frontend="1">Address</textarea>

                                            <div class="input-errors" id="address_err"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="mobile" class="col-sm-4 control-label label_class" style="">
                                            Your Mobile: </label>

                                        <div class="col-sm-7">

                                            <input name="mobile" id="mobile" value="88880000" size="35"
                                                   class="form-control" title="mobileNo" admin="1" frontend="1"
                                                   type="text">

                                            <div class="input-errors" id="mobile_err"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="postalCode" class="col-sm-4 control-label label_class" style="">
                                            Your postal /Zip Code:<span class="required star_class" style="">*</span>
                                        </label>

                                        <div class="col-sm-7">

                                            <input name="postalCode" id="postalCode" value="88880000" size="35"
                                                   title="Enter postal / Zip Code " class="form-control" admin="1"
                                                   frontend="1" type="text">

                                            <div class="input-errors" id="postalCode_err"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="country" class="col-sm-4 control-label label_class" style="">
                                            Select Your Country:<span class="required star_class" style="">*</span>
                                        </label>

                                        <div class="col-sm-7">

                                            <select name="country" id="country" size="1" style="" class="form-control"
                                                    title="Name of Your Country" admin="1" frontend="1">
                                                <option value="2">Åland Islands</option>
                                                <option value="1">Afghanistan</option>
                                                <option value="3">Albania</option>
                                                <option value="4">Algeria</option>
                                                <option value="5">American Samoa</option>
                                                <option value="6">Andorra</option>
                                                <option value="7">Angola</option>
                                                <option value="8">Anguilla</option>
                                                <option value="9">Antarctica</option>
                                                <option value="10">Antigua and Barbuda</option>
                                                <option value="11">Argentina</option>
                                                <option value="12">Armenia</option>
                                                <option value="13">Aruba</option>
                                                <option value="14">Australia</option>
                                                <option value="15">Austria</option>
                                                <option value="16">Azerbaijan</option>
                                                <option value="17">Bahamas</option>
                                                <option value="18">Bahrain</option>
                                                <option value="19">Bangladesh</option>
                                                <option value="20">Barbados</option>
                                                <option value="21">Belarus</option>
                                                <option value="22">Belgium</option>
                                                <option value="23">Belize</option>
                                                <option value="24">Benin</option>
                                                <option value="25">Bermuda</option>
                                                <option value="26">Bhutan</option>
                                                <option value="27">Bolivia</option>
                                                <option value="28">Bosnia and Herzegovina</option>
                                                <option value="29">Botswana</option>
                                                <option value="30">Bouvet Island</option>
                                                <option value="31">Brazil</option>
                                                <option value="32">British Indian Ocean territory</option>
                                                <option value="33">Brunei Darussalam</option>
                                                <option value="34">Bulgaria</option>
                                                <option value="35">Burkina Faso</option>
                                                <option value="36">Burundi</option>
                                                <option value="37">Cambodia</option>
                                                <option value="38">Cameroon</option>
                                                <option value="39">Canada</option>
                                                <option value="40">Cape Verde</option>
                                                <option value="41">Cayman Islands</option>
                                                <option value="42">Central African Republic</option>
                                                <option value="43">Chad</option>
                                                <option value="44">Chile</option>
                                                <option value="45">China</option>
                                                <option value="46">Christmas Island</option>
                                                <option value="47">Cocos (Keeling) Islands</option>
                                                <option value="48">Colombia</option>
                                                <option value="49">Comoros</option>
                                                <option value="50">Congo</option>
                                                <option value="239">Congo Democratic Republic</option>
                                                <option value="53">Cook Islands</option>
                                                <option value="54">Costa Rica</option>
                                                <option value="56">Croatia (Hrvatska)</option>
                                                <option value="57">Cuba</option>
                                                <option value="58">Cyprus</option>
                                                <option value="59">Czech Republic</option>
                                                <option value="60">Denmark</option>
                                                <option value="61">Djibouti</option>
                                                <option value="62">Dominica</option>
                                                <option value="63">Dominican Republic</option>
                                                <option value="64">East Timor</option>
                                                <option value="65">Ecuador</option>
                                                <option value="66">Egypt</option>
                                                <option value="67">El Salvador</option>
                                                <option value="68">Equatorial Guinea</option>
                                                <option value="69">Eritrea</option>
                                                <option value="70">Estonia</option>
                                                <option value="71">Ethiopia</option>
                                                <option value="72">Falkland Islands</option>
                                                <option value="73">Faroe Islands</option>
                                                <option value="74">Fiji</option>
                                                <option value="75">Finland</option>
                                                <option value="76">France</option>
                                                <option value="77">French Guiana</option>
                                                <option value="78">French Polynesia</option>
                                                <option value="79">French Southern Territories</option>
                                                <option value="80">Gabon</option>
                                                <option value="81">Gambia</option>
                                                <option value="82">Georgia</option>
                                                <option value="83">Germany</option>
                                                <option value="84">Ghana</option>
                                                <option value="85">Gibraltar</option>
                                                <option value="86">Greece</option>
                                                <option value="87">Greenland</option>
                                                <option value="88">Grenada</option>
                                                <option value="89">Guadeloupe</option>
                                                <option value="90">Guam</option>
                                                <option value="91">Guatemala</option>
                                                <option value="92">Guinea</option>
                                                <option value="93">Guinea-Bissau</option>
                                                <option value="94">Guyana</option>
                                                <option value="95">Haiti</option>
                                                <option value="96">Heard and McDonald Islands</option>
                                                <option value="97">Honduras</option>
                                                <option value="98">Hong Kong</option>
                                                <option value="99">Hungary</option>
                                                <option value="100">Iceland</option>
                                                <option value="101">India</option>
                                                <option value="102">Indonesia</option>
                                                <option value="103">Iran</option>
                                                <option value="104">Iraq</option>
                                                <option value="105">Ireland</option>
                                                <option value="106">Israel</option>
                                                <option value="107">Italy</option>
                                                <option value="55">Ivoire (Ivory Coast)</option>
                                                <option value="108">Jamaica</option>
                                                <option value="109">Japan</option>
                                                <option value="110">Jordan</option>
                                                <option value="111">Kazakhstan</option>
                                                <option value="112">Kenya</option>
                                                <option value="113">Kiribati</option>
                                                <option value="114">Korea (north)</option>
                                                <option value="115">Korea (south)</option>
                                                <option value="116">Kuwait</option>
                                                <option value="117">Kyrgyzstan</option>
                                                <option value="118">Lao People's Democratic Republic</option>
                                                <option value="119">Latvia</option>
                                                <option value="120">Lebanon</option>
                                                <option value="121">Lesotho</option>
                                                <option value="122">Liberia</option>
                                                <option value="123">Libyan Arab Jamahiriya</option>
                                                <option value="124">Liechtenstein</option>
                                                <option value="125">Lithuania</option>
                                                <option value="126">Luxembourg</option>
                                                <option value="127">Macao</option>
                                                <option value="128">Macedonia</option>
                                                <option value="129">Madagascar</option>
                                                <option value="130">Malawi</option>
                                                <option value="131">Malaysia</option>
                                                <option value="132">Maldives</option>
                                                <option value="133">Mali</option>
                                                <option value="134">Malta</option>
                                                <option value="135">Marshall Islands</option>
                                                <option value="136">Martinique</option>
                                                <option value="137">Mauritania</option>
                                                <option value="138">Mauritius</option>
                                                <option value="139">Mayotte</option>
                                                <option value="140">Mexico</option>
                                                <option value="141">Micronesia</option>
                                                <option value="142">Moldova</option>
                                                <option value="143">Monaco</option>
                                                <option value="144">Mongolia</option>
                                                <option value="145">Montserrat</option>
                                                <option value="146">Morocco</option>
                                                <option value="147">Mozambique</option>
                                                <option value="148">Myanmar</option>
                                                <option value="149">Namibia</option>
                                                <option value="150">Nauru</option>
                                                <option value="151">Nepal</option>
                                                <option value="152">Netherlands</option>
                                                <option value="153">Netherlands Antilles</option>
                                                <option value="154">New Caledonia</option>
                                                <option value="155">New Zealand</option>
                                                <option value="156">Nicaragua</option>
                                                <option value="157">Niger</option>
                                                <option value="158">Nigeria</option>
                                                <option value="159">Niue</option>
                                                <option value="160">Norfolk Island</option>
                                                <option value="161">Northern Mariana Islands</option>
                                                <option value="162">Norway</option>
                                                <option value="163">Oman</option>
                                                <option value="164">Pakistan</option>
                                                <option value="165">Palau</option>
                                                <option value="166">Palestinian Territories</option>
                                                <option value="167">Panama</option>
                                                <option value="168">Papua New Guinea</option>
                                                <option value="169">Paraguay</option>
                                                <option value="170">Peru</option>
                                                <option value="171">Philippines</option>
                                                <option value="172">Pitcairn</option>
                                                <option value="173">Poland</option>
                                                <option value="174">Portugal</option>
                                                <option value="175">Puerto Rico</option>
                                                <option value="176">Qatar</option>
                                                <option value="177">Reacute union</option>
                                                <option value="178">Romania</option>
                                                <option value="179">Russian Federation</option>
                                                <option value="180">Rwanda</option>
                                                <option value="181">Saint Helena</option>
                                                <option value="182">Saint Kitts and Nevis</option>
                                                <option value="183">Saint Lucia</option>
                                                <option value="184">Saint Pierre and Miquelon</option>
                                                <option value="185">Saint Vincent and the Grenadines</option>
                                                <option value="186">Samoa</option>
                                                <option value="187">San Marino</option>
                                                <option value="188">Sao Tome and Principe</option>
                                                <option value="189">Saudi Arabia</option>
                                                <option value="190">Senegal</option>
                                                <option value="191">Serbia and Montenegro</option>
                                                <option value="192">Seychelles</option>
                                                <option value="193">Sierra Leone</option>
                                                <option value="194">Singapore</option>
                                                <option value="195">Slovakia</option>
                                                <option value="196">Slovenia</option>
                                                <option value="197">Solomon Islands</option>
                                                <option value="198">Somalia</option>
                                                <option value="199">South Africa</option>
                                                <option value="200">South Georgia and the South Sandwich Islands
                                                </option>
                                                <option value="51">South Sudan</option>
                                                <option value="201">Spain</option>
                                                <option value="202">Sri Lanka</option>
                                                <option value="203">Sudan</option>
                                                <option value="204">Suriname</option>
                                                <option value="205">Svalbard and Jan Mayen Islands</option>
                                                <option value="206">Swaziland</option>
                                                <option value="207">Sweden</option>
                                                <option value="208">Switzerland</option>
                                                <option value="209">Syria</option>
                                                <option value="210">Taiwan</option>
                                                <option value="211">Tajikistan</option>
                                                <option value="212">Tanzania</option>
                                                <option value="213">Thailand</option>
                                                <option value="214">Togo</option>
                                                <option value="215">Tokelau</option>
                                                <option value="216">Tonga</option>
                                                <option value="217">Trinidad and Tobago</option>
                                                <option value="218">Tunisia</option>
                                                <option value="219">Turkey</option>
                                                <option value="220">Turkmenistan</option>
                                                <option value="221">Turks and Caicos Islands</option>
                                                <option value="222">Tuvalu</option>
                                                <option value="223">Uganda</option>
                                                <option value="224">Ukraine</option>
                                                <option value="225">United Arab Emirates</option>
                                                <option value="226" selected="selected">United Kingdom</option>
                                                <option value="227">United States of America</option>
                                                <option value="228">Uruguay</option>
                                                <option value="229">Uzbekistan</option>
                                                <option value="230">Vanuatu</option>
                                                <option value="231">Vatican City(Holy See)</option>
                                                <option value="232">Venezuela</option>
                                                <option value="233">Vietnam</option>
                                                <option value="234">Virgin Islands (British)</option>
                                                <option value="235">Virgin Islands (US)</option>
                                                <option value="236">Wallis and Futuna Islands</option>
                                                <option value="237">Western Sahara</option>
                                                <option value="238">Yemen</option>
                                                <option value="52">Zaire</option>
                                                <option value="240">Zambia</option>
                                                <option value="241">Zimbabwe</option>
                                            </select>

                                            <div class="input-errors" id="country_err"></div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="state" class="col-sm-4 control-label label_class" style="">
                                            Type Your State:<span class="required star_class" style="">*</span> </label>

                                        <div class="col-sm-7">

                                            <input name="state" id="state" value="ABC" size="35" class="form-control"
                                                   title="Name of your State" admin="1" frontend="1" type="text">

                                            <div class="input-errors" id="state_err"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="city" class="col-sm-4 control-label label_class" style="">
                                            Your City/County:<span class="required star_class" style="">*</span>
                                        </label>

                                        <div class="col-sm-7">

                                            <input name="city" id="city" value="XYZ" size="35" class="form-control"
                                                   title="Name of your City or County" admin="1" frontend="1"
                                                   type="text">

                                            <div class="input-errors" id="city_err"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone" class="col-sm-4 control-label label_class" style="">
                                            Your Telephone </label>

                                        <div class="col-sm-7">

                                            <input name="phone" id="phone" size="35" title="phone" class="form-control"
                                                   admin="1" frontend="1" type="text">

                                            <div class="input-errors" id="phone_err"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="fax" class="col-sm-4 control-label label_class" style="">
                                            Your Fax: </label>

                                        <div class="col-sm-7">

                                            <input name="fax" id="fax" size="35" title="fax" class="form-control"
                                                   admin="1" frontend="1" type="text">

                                            <div class="input-errors" id="fax_err"></div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <legend>Other Information</legend>


                                    <div class="form-group">
                                        <label for="website" class="col-sm-4 control-label label_class" style="">
                                            Your Web Address: </label>

                                        <div class="col-sm-7">

                                            <input name="website" id="website" value="www.eicra.com" size="35"
                                                   title="Enter your Website URL Without http://"
                                                   info="Enter your Website URL Without http://" class="form-control"
                                                   admin="1" frontend="1" type="text">

                                            <div class="input-errors" id="website_err"></div>
                                        </div>
                                        <div class="ui-widget ui-helper-clearfix info">
                                            <div class="ui-widget-header ui-corner-all ui-state-default"
                                                 title="Enter your Website URL Without http://"><p><span
                                                        class="ui-icon ui-icon-info"></span></p></div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>

                            <div class="btn-groups bottom text-right">
                                <a href="javascript:void(0);" class="reset_btn btn btn-success"><i
                                        class="fa fa-retweet"></i> Reset</a>
                                <a href="javascript:void(0);" class="edit_user_btn btn btn-primary"><i
                                        class="fa fa-save"></i> Save Profile</a>
                            </div>
                        </div>
                    </div>
                </section>

                <div style="height: 0px;margin-top:30px" id="floatingbar">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <h1>Your Profile</h1>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 text-right btn-groups">
                                <a href="javascript:void(0);" class="reset_btn btn btn-success"><i
                                        class="fa fa-retweet"></i> Reset</a>
                                <a href="javascript:void(0);" class="edit_user_btn btn btn-primary"><i
                                        class="fa fa-save"></i> Save Profile</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="dialog_msg" title="Your Profile Dialog"></div>
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

<div class="ui-helper-hidden-accessible" aria-relevant="additions" aria-live="assertive" role="log">
    <div style="display: none;">Enter Your Last Name</div>
    <div style="display: none;">Type your Company Name</div>
    <div style="display: none;">Enter Your Last Name</div>
    <div style="display: none;">Type Your First Name</div>
    <div style="display: none;">Type Your First Name</div>
    <div style="display: none;">Enter Your Last Name</div>
    <div style="display: none;">Type your Company Name</div>
    <div style="display: none;">Enter Your Last Name</div>
    <div style="display: none;">Type Your First Name</div>
    <div>Type Your First Name</div>
</div>
<div style="top: 488px; left: 759px; display: block; opacity: 0;" id="ui-id-10"
     class="ui-tooltip ui-widget ui-corner-all ui-widget-content jui-tooltip" role="tooltip">
    <div class="ui-tooltip-content">Type Your First Name</div>
</div>
</body>
</html>