<!DOCTYPE html>
<html class="k-ff k-ff44" dir="ltr" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- base href="http://demo.script4realestate.com/" -->
    <link rel="shortcut icon"
          href="http://demo.script4realestate.com/data/adminImages/headerImages/1369722780_favicon.ico">
    <meta name="keywords"
          content="Demo - Realestate CMS, CMS, Content Management System, Open source CMS, Zend Framework, Zend Framework CMS, jQuery, 960gs, 960 Grid System, Layout Editor">
    <meta name="description"
          content="Demo - Realestate CMS - A Commercial CMS powered by Eicrasoft Ltd, jQuery and 960grid">
    <title>Administrator's Control Panel</title>
    <script type="" src="Administrator%27s%20Control%20Panel_files/jquery_002.js"></script>
    <script type="" src="Administrator%27s%20Control%20Panel_files/jquery-ui.js"></script>
    <script type="" src="Administrator%27s%20Control%20Panel_files/common.js"></script>
    <script type="" src="Administrator%27s%20Control%20Panel_files/slicker.js"></script>
    <script type="text/javascript" src="Administrator%27s%20Control%20Panel_files/dropdown.js"></script>
    <script type="" src="Administrator%27s%20Control%20Panel_files/jquery_003.js"></script>
    <script type="text/javascript" src="Administrator%27s%20Control%20Panel_files/ddslick.js"></script>
    <link href="Administrator%27s%20Control%20Panel_files/bootstrap.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="Administrator%27s%20Control%20Panel_files/jquery-ui.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="Administrator%27s%20Control%20Panel_files/mega-menu.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="Administrator%27s%20Control%20Panel_files/mega-menu-black.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="Administrator%27s%20Control%20Panel_files/font-awesome.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="Administrator%27s%20Control%20Panel_files/floatingbar.css" media="screen" rel="stylesheet"
          type="text/css">
    <script type="" src="Administrator%27s%20Control%20Panel_files/kendo_003.js"></script>
    <script type="" src="Administrator%27s%20Control%20Panel_files/kendo_002.js"></script>
    <script type="" src="Administrator%27s%20Control%20Panel_files/kendo.js"></script>
    <script type="" src="Administrator%27s%20Control%20Panel_files/kendo.js"></script>
    <script type="" src="Administrator%27s%20Control%20Panel_files/uploader.js"></script>
    <link href="Administrator%27s%20Control%20Panel_files/kendo.css" media="screen" rel="stylesheet" type="text/css">
    <link href="Administrator%27s%20Control%20Panel_files/kendo_002.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="Administrator%27s%20Control%20Panel_files/stylesheet.css" media="screen" rel="stylesheet"
          type="text/css">
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
            ,
            {
                text: "<i class='fa fa-wrench'></i> Global Settings",
                value: 1,
                link_value: "/Settings/global/update",
                //description: "",
                //imageSrc: "application/modules/Administrator/layouts/scripts/images/tools/global-setting.png"
            }
            ,
            {
                text: "<i class='fa fa-phone-square'></i> Update Contact",
                value: 2,
                link_value: "/Contact/backend/update",
                //description: "",
                //imageSrc: "application/modules/Administrator/layouts/scripts/images/tools/contact.png"
            }
        ];

        var dIndex = null;

        for (var i = 0; i < ddData.length; i++) {
            var dLink = ddData[i].link_value;
            var cLink = "/Members-Login";
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

<div id="user-nav">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-10">
                <ul class="btn-group">
                    <li class="btn active"><i class="fa fa-globe"></i> <span>Welcome:</span> demo@script4realestate.com
                    </li>
                    <li class="btn">&nbsp;<a href="http://demo.script4realestate.com/Members/index/profile"><i
                                class="fa fa-user"></i><span> Administrator</span></a></li>
                    <li class="btn"><a href="http://demo.script4realestate.com/" target="_blank"><i
                                class="fa fa-eye"></i> <span>Public View</span></a></li>
                    <li class="btn"><a href="http://demo.script4realestate.com/Administrator/login/logout"><i
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
                                    var url = '/Members-Login';
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
                <div class="flags">
                    <dl id="sample" class="dropdown" style="margin:0; padding:0">
                        <dt><a href="javascript:void(0);"><span class="lang">English - United States</span><span
                                    class="flag"><img src="Administrator%27s%20Control%20Panel_files/US.gif"
                                                      title="English (USA)" border="0"></span> &nbsp;</a></dt>
                        <dd>
                            <ul>
                                <li><a class="change_lang" rel="ar_SA:rtl" href="javascript:void(0);"><span
                                            class="lang">العربية - المملكة العربية السعودية</span><span
                                            class="flag"><img src="Administrator%27s%20Control%20Panel_files/SA.gif"
                                                              title="Arabic (Saudia Arabia)" border="0"></span></a></li>
                                <li><a class="change_lang" rel="bn_BD:ltr" href="javascript:void(0);"><span
                                            class="lang">বাংলা - বাংলাদেশ</span><span class="flag"><img
                                                src="Administrator%27s%20Control%20Panel_files/BD.gif"
                                                title="Bangla (Bangladesh)" border="0"></span></a></li>
                                <li><a class="change_lang" rel="de_DE:ltr" href="javascript:void(0);"><span
                                            class="lang">Deutsch - Deutschland</span><span class="flag"><img
                                                src="Administrator%27s%20Control%20Panel_files/DE.gif" title="German"
                                                border="0"></span></a></li>
                                <li><a class="change_lang" rel="en_GB:ltr" href="javascript:void(0);"><span
                                            class="lang">English - United Kingdom</span><span class="flag"><img
                                                src="Administrator%27s%20Control%20Panel_files/GB.gif"
                                                title="English (UK)" border="0"></span></a></li>
                                <li><a class="change_lang" rel="en_US:ltr" href="javascript:void(0);"><span
                                            class="lang">English - United States</span><span class="flag"><img
                                                src="Administrator%27s%20Control%20Panel_files/US.gif"
                                                title="English (USA)" border="0"></span></a></li>
                                <li><a class="change_lang" rel="es_ES:ltr" href="javascript:void(0);"><span
                                            class="lang">español - España</span><span class="flag"><img
                                                src="Administrator%27s%20Control%20Panel_files/ES.gif" title="Spanish"
                                                border="0"></span></a></li>
                                <li><a class="change_lang" rel="fr_FR:ltr" href="javascript:void(0);"><span
                                            class="lang">français - France</span><span class="flag"><img
                                                src="Administrator%27s%20Control%20Panel_files/FR.gif" title="French"
                                                border="0"></span></a></li>
                                <li><a class="change_lang" rel="mk_MK:ltr" href="javascript:void(0);"><span
                                            class="lang">македонски - Македонија</span><span class="flag"><img
                                                src="Administrator%27s%20Control%20Panel_files/MK.gif"
                                                title="Macedonian (Macedonia)" border="0"></span></a></li>
                                <li><a class="change_lang" rel="nl_BE:ltr" href="javascript:void(0);"><span
                                            class="lang">Nederlands - België</span><span class="flag"><img
                                                src="Administrator%27s%20Control%20Panel_files/BE.gif"
                                                title="Dutch (Belgium)" border="0"></span></a></li>
                                <li><a class="change_lang" rel="nl_NL:ltr" href="javascript:void(0);"><span
                                            class="lang">Nederlands - Nederland</span><span class="flag"><img
                                                src="Administrator%27s%20Control%20Panel_files/NL.gif"
                                                title="Dutch (Netherlands)" border="0"></span></a></li>
                                <li><a class="change_lang" rel="pt_BR:ltr" href="javascript:void(0);"><span
                                            class="lang">português - Brasil</span><span class="flag"><img
                                                src="Administrator%27s%20Control%20Panel_files/BR.gif"
                                                title="Portugis (Brazil)" border="0"></span></a></li>
                                <li><a class="change_lang" rel="pt_PT:ltr" href="javascript:void(0);"><span
                                            class="lang">português - Portugal</span><span class="flag"><img
                                                src="Administrator%27s%20Control%20Panel_files/PT.gif"
                                                title="Portugis (Portugal)" border="0"></span></a></li>
                                <li><a class="change_lang" rel="ru_RU:ltr" href="javascript:void(0);"><span
                                            class="lang">русский - Россия</span><span class="flag"><img
                                                src="Administrator%27s%20Control%20Panel_files/RU.gif" title="Russian"
                                                border="0"></span></a></li>
                                <li><a class="change_lang" rel="tr_TR:ltr" href="javascript:void(0);"><span
                                            class="lang">Türkçe - Türkiye</span><span class="flag"><img
                                                src="Administrator%27s%20Control%20Panel_files/TR.gif" title="Turkey"
                                                border="0"></span></a></li>
                                <li><a class="change_lang" rel="it_IT:ltr" href="javascript:void(0);"><span
                                            class="lang">italiano - Italia</span><span class="flag"><img
                                                src="Administrator%27s%20Control%20Panel_files/IT.gif" title="Italy"
                                                border="0"></span></a></li>
                                <li><a class="change_lang" rel="id_ID:ltr" href="javascript:void(0);"><span
                                            class="lang">Bahasa Indonesia - Indonesia</span><span class="flag"><img
                                                src="Administrator%27s%20Control%20Panel_files/ID.gif"
                                                title="Indoneshian" border="0"></span></a></li>
                                <li><a class="change_lang" rel="zh_CN:ltr" href="javascript:void(0);"><span
                                            class="lang">中文 - 中国</span><span class="flag"><img
                                                src="Administrator%27s%20Control%20Panel_files/CN.gif"
                                                title="Chainese (Simplified)" border="0"></span></a></li>
                                <li><a class="change_lang" rel="zh_TW:ltr" href="javascript:void(0);"><span
                                            class="lang">中文 - 台灣</span><span class="flag"><img
                                                src="Administrator%27s%20Control%20Panel_files/TW.gif"
                                                title="Chainese (Traditional)" border="0"></span></a></li>
                                <li><a class="change_lang" rel="sk_SK:ltr" href="javascript:void(0);"><span
                                            class="lang">slovenčina - Slovensko</span><span class="flag"><img
                                                src="Administrator%27s%20Control%20Panel_files/SK.gif"
                                                title="Slovak (Slovakia)" border="0"></span></a></li>
                            </ul>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>

<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">
                <div class="logo"><img src="Administrator%27s%20Control%20Panel_files/header_logo.jpg" height="60">

                    <h1>Administrator's Control Panel</h1></div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                <div style="width: 220px;" class="dd-container" id="dropdownBasico">
                    <div style="width: 220px; background: rgb(238, 238, 238) none repeat scroll 0% 0%;"
                         class="dd-select"><input class="dd-selected-value" value="" type="hidden"><a
                            class="dd-selected"><i class="fa fa-cog"></i> General Settings</a><span
                            class="dd-pointer dd-pointer-down"></span></div>
                    <ul style="width: 220px;" class="dd-options dd-click-off-close">
                        <li><a class="dd-option"> <label class="dd-option-text"><i class="fa fa-user"></i> User Profile</label></a>
                        </li>
                        <li><a class="dd-option"> <input class="dd-option-value" value="1" type="hidden"> <label
                                    class="dd-option-text"><i class="fa fa-wrench"></i> Global Settings</label></a></li>
                        <li><a class="dd-option"> <input class="dd-option-value" value="2" type="hidden"> <label
                                    class="dd-option-text"><i class="fa fa-phone-square"></i> Update Contact</label></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid">

    <!-- mega menu -->
    <ul class="sky-mega-menu sky-mega-menu-response-to-icons sky-mega-menu-anim-scale">
        <!-- home -->
        <li>
            <a href="http://demo.script4realestate.com/Dashboard"><i class="fa fa-home"></i></a>
        </li>
        <!--/ home -->

        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-user"></i> <span>USERS</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="http://demo.script4realestate.com/Members/index/profile" class=""><i
                                class="fa fa-credit-card"></i> User Profile</a></li>
                    <li><a href="http://demo.script4realestate.com/Administrator/role/list" class=""><i
                                class="fa fa-gear"></i> User Role Policy</a></li>
                    <li><a href="http://demo.script4realestate.com/Members/index/group" class=""><i
                                class="fa fa-plus-square"></i> Create New User</a></li>
                    <li><a href="http://demo.script4realestate.com/Members/index/list" class=""><i
                                class="fa fa-wrench"></i> Manage Users</a></li>
                    <li><a href="http://demo.script4realestate.com/Members/index/list" class=""><i
                                class="fa fa-search"></i> User Search</a></li>
                    <li><a href="http://demo.script4realestate.com/Members/form/values/form_id/9" class=""><i
                                class="fa fa-bookmark"></i> Membership Package</a></li>
                    <li><a href="http://demo.script4realestate.com/Members/password/change" class=""><i
                                class="fa fa-asterisk"></i> Change Password</a></li>
                </ul>
            </div>

        </li>

        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-globe"></i> <span>SITE</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="http://demo.script4realestate.com/Settings/global/update" class=""><i
                                class="fa fa-gear"></i> Global Settings</a></li>
                    <li><a href="http://demo.script4realestate.com/Members/form/add" class=""><i
                                class="fa fa-file-text-o"></i> Create Custom Form</a></li>
                    <li><a href="http://demo.script4realestate.com/Members/form/list" class=""><i
                                class="fa fa-wrench"></i> Manage Custom Form(s)</a></li>
                    <li><a href="http://demo.script4realestate.com/Administrator/index/approval" class=""><i
                                class="fa fa-flag"></i> Pending for Approval</a></li>
                    <li><a href="http://demo.script4realestate.com/" class="" target="_blank"><i
                                class="fa fa-laptop"></i> Site Preview</a></li>
                </ul>
            </div>

        </li>

        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-file-text"></i> <span>CONTENT</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="http://demo.script4realestate.com/Articles/backend/add" class=""><i
                                class="fa fa fa-pencil"></i> Create an Article</a></li>
                    <li><a href="http://demo.script4realestate.com/Articles/backend/list" class=""><i
                                class="fa fa-th-list"></i> View All Articles</a></li>
                    <li><a href="http://demo.script4realestate.com/Articles/backend/list" class=""><i
                                class="fa fa-gear"></i> Manage Articles</a></li>
                    <li><a href="http://demo.script4realestate.com/Articles/backend/list/link/1" class=""><i
                                class="fa fa-link"></i> Link page with Menu</a></li>
                    <li><a href="http://demo.script4realestate.com/Articles/backend/list/draft/0" class=""><i
                                class="fa fa-paste"></i> Publish draft page</a></li>
                </ul>
            </div>

        </li>

        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-bars"></i> <span>MENU</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="http://demo.script4realestate.com/Menu/backend/listgrp/create/new" class=""><i
                                class="fa fa-plus-square"></i> Create A Menu Group</a></li>
                    <li><a href="http://demo.script4realestate.com/Menu/backend/listgrp" class=""><i
                                class="fa fa-cubes"></i> Manage Menu Group(s)</a></li>
                    <li><a href="http://demo.script4realestate.com/Menu/backend/add" class=""><i
                                class="fa fa-sitemap"></i> Create New Menu</a></li>
                    <li><a href="http://demo.script4realestate.com/Menu/backend/list" class=""><i
                                class="fa fa-gear"></i> Manage Menu(s)</a></li>
                    <li><a href="http://demo.script4realestate.com/Menu/backend/list/draft/0" class=""><i
                                class="fa fa-check-square-o"></i> Manage Draft Menu(s)</a></li>
                </ul>
            </div>

        </li>

        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-cube"></i> <span>REAL-ESTATE</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="javascript:void(0);" class=""><i class="fa fa-building"></i> Property Management<i
                                class="text-right pull-right fa fa-angle-down"></i></a>

                        <div class="grid-container3">
                            <ul>
                                <li><a href="http://demo.script4realestate.com/Property/preferences/settings"
                                       class=""><i class="fa fa-gear"></i> System Preferences</a></li>
                                <li><a href="http://demo.script4realestate.com/Property/backendgrp/listgrp" class=""><i
                                            class="fa fa-cubes"></i> Property Group</a></li>
                                <li><a href="http://demo.script4realestate.com/Property/backendgrp/addgrp" class=""><i
                                            class="fa fa-plus-square"></i> Add Property Group</a></li>
                                <li><a href="http://demo.script4realestate.com/Property/backendgrp/listgrp" class=""><i
                                            class="fa fa-wrench"></i> Manage Property Group</a></li>
                                <li><a href="http://demo.script4realestate.com/Property/backendpro/add" class=""><i
                                            class="fa fa-institution"></i> Add New Property</a></li>
                                <li><a href="http://demo.script4realestate.com/Property/backendpro/list" class=""><i
                                            class="fa fa-cogs"></i> Manage Properties</a></li>
                                <li><a href="http://demo.script4realestate.com/Property/backendpro/saved" class=""><i
                                            class="fa fa-star-half-empty"></i> Favorite Property List</a></li>
                                <li><a href="http://demo.script4realestate.com/Property/backendtype/list/create/new"
                                       class=""><i class="fa fa-medkit"></i> Add Business Type</a></li>
                                <li><a href="http://demo.script4realestate.com/Property/backendtype/list" class=""><i
                                            class="fa fa-suitcase"></i> Manage Business Type</a></li>
                                <li><a href="http://demo.script4realestate.com/Property/backend/add" class=""><i
                                            class="fa fa-plus-square-o"></i> Add New Category</a></li>
                                <li><a href="http://demo.script4realestate.com/Property/backend/list" class=""><i
                                            class="fa fa-sitemap"></i> Manage Category</a></li>
                                <li>
                                    <a href="http://demo.script4realestate.com/Vote/backendvote/list/group_id/property_page"
                                       class=""><i class="fa fa-thumbs-o-up"></i> Voting Management</a></li>
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
                    <li><a href="http://demo.script4realestate.com/Gallery/backendpro/list" class=""><i
                                class="fa fa-photo"></i> Gallery Management<i
                                class="text-right pull-right fa fa-angle-down"></i></a>

                        <div class="grid-container3">
                            <ul>
                                <li><a href="http://demo.script4realestate.com/Gallery/backendpro/add" class=""><i
                                            class="fa fa-plus-square"></i> Add New Image / Video</a></li>
                                <li><a href="http://demo.script4realestate.com/Gallery/backendpro/list" class=""><i
                                            class="fa fa-cog"></i> Manage Image(s) / Video(s)</a></li>
                                <li><a href="http://demo.script4realestate.com/Gallery/backendgrp/addgrp" class=""><i
                                            class="fa fa-cubes"></i> Add New Group</a></li>
                                <li><a href="http://demo.script4realestate.com/Gallery/backendgrp/listgrp" class=""><i
                                            class="fa fa-wrench"></i> Manage Groups</a></li>
                                <li><a href="http://demo.script4realestate.com/Gallery/backend/add" class=""><i
                                            class="fa fa-plus-square-o"></i> Add New Category</a></li>
                                <li><a href="http://demo.script4realestate.com/Gallery/backend/list" class=""><i
                                            class="fa fa-sitemap"></i> Manage Categories</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="http://demo.script4realestate.com/News/Backendpro/list/group_id/1" class=""><i
                                class="fa fa-calendar"></i> News Management</a></li>
                    <li><a href="http://demo.script4realestate.com/News/Backendpro/list/group_id/2" class=""><i
                                class="fa fa-pencil-square-o"></i> Feedback Management</a></li>
                    <li><a href="http://demo.script4realestate.com/News/Backendpro/list/group_id/3" class=""><i
                                class="fa fa-upload"></i> Project Management</a></li>
                    <li><a href="http://demo.script4realestate.com/News/Backendpro/list/group_id/4" class=""><i
                                class="fa fa-clock-o"></i> Events Management</a></li>
                    <li><a href="http://demo.script4realestate.com/News/Backendpro/list/group_id/5" class=""><i
                                class="fa fa-bullhorn"></i> Ads / Commercials Management</a></li>
                    <li><a href="http://demo.script4realestate.com/Projects/index/filepreview" class=""><i
                                class="fa fa-clipboard"></i> File Management</a></li>
                    <li><a href="http://demo.script4realestate.com/Newsletter/templates/send" class=""><i
                                class="fa fa-envelope"></i> Send Newsletter</a></li>
                    <li><a href="http://demo.script4realestate.com/Poll/backendpoll/list" class=""><i
                                class="fa fa-bar-chart-o"></i> Poll Manager</a></li>
                    <li><a href="http://demo.script4realestate.com/Review/backend/list" class=""><i
                                class="fa fa-star-half-full"></i> Client Review Engine</a></li>
                    <li><a href="http://demo.script4realestate.com/Comment/backendcomment/list" class=""><i
                                class="fa fa-comments-o"></i> Comment Manager</a></li>
                </ul>
            </div>

        </li>

        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-money"></i> <span>BILLING</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="http://demo.script4realestate.com/Paymentgateway/backendgateway/list" class=""><i
                                class="fa fa-credit-card"></i> Payment Gateway</a></li>
                    <li><a href="http://demo.script4realestate.com/Invoice/backend/list" class=""><i
                                class="fa fa-ticket"></i> Manage Invoices<i
                                class="text-right pull-right fa fa-angle-down"></i></a>

                        <div class="grid-container3">
                            <ul>
                                <li><a href="http://demo.script4realestate.com/Invoice/backend/list/status/1"
                                       class=""><i class="fa fa-check-circle"></i> Paid</a></li>
                                <li><a href="http://demo.script4realestate.com/Invoice/backend/list/status/2"
                                       class=""><i class="fa fa-flag"></i> Unpaid</a></li>
                                <li><a href="http://demo.script4realestate.com/Invoice/backend/list/status/0"
                                       class=""><i class="fa fa-times-circle"></i> Cancelled</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="http://demo.script4realestate.com/Invoice/backend/quotelist" class=""><i
                                class="fa fa-file-text-o"></i> Manage Quotation(s)</a></li>
                    <li><a href="http://demo.script4realestate.com/Settings/global/price" class=""><i
                                class="fa fa-superscript"></i> Supplementary charges</a></li>
                </ul>
            </div>

        </li>

        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-wrench"></i> <span>SETUP</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="http://demo.script4realestate.com/Administrator/privilege/list" class=""><i
                                class="fa fa-cog"></i> Privilege Manager</a></li>
                    <li><a href="http://demo.script4realestate.com/Administrator/role/list" class=""><i
                                class="fa fa-user"></i> User Role Manager</a></li>
                    <li><a href="http://demo.script4realestate.com/Theme/template/list" class=""><i
                                class="fa fa-columns"></i> Template Manager</a></li>
                    <li><a href="http://demo.script4realestate.com/Database/backend/list" class=""><i
                                class="fa fa-database"></i> Database Management</a></li>
                    <li><a href="http://demo.script4realestate.com/Newsletter/templates/list" class=""><i
                                class="fa fa-envelope"></i> Email Templates</a></li>
                    <li><a href="http://demo.script4realestate.com/Geo/country/list" class=""><i
                                class="fa fa-globe"></i> Country Management</a></li>
                    <li><a href="http://demo.script4realestate.com/Geo/state/list" class=""><i
                                class="fa fa-crosshairs"></i> State Management</a></li>
                    <li><a href="http://demo.script4realestate.com/Geo/city/list" class=""><i
                                class="fa fa-map-marker"></i> City/Area Management</a></li>
                </ul>
            </div>

        </li>

        <li>
            <a href="javascript:void(0);" title=""><i class="fa fa-cogs"></i> <span>UTILITY</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="http://demo.script4realestate.com/Settings/global/ip" class=""><i
                                class="fa fa-shield"></i> Allow/Deny IP(s)</a></li>
                    <li><a href="http://demo.script4realestate.com/Database/csv/list" class=""><i
                                class="fa fa-exchange"></i> Export/Import</a></li>
                    <li><a href="http://demo.script4realestate.com/Utility/backend/php" class=""><i
                                class="fa fa-hdd-o"></i> PHP Settings</a></li>
                    <li><a href="http://demo.script4realestate.com/Settings/global/cronsetup" class=""><i
                                class="fa fa-clock-o"></i> Cron Scheduling</a></li>
                    <li><a href="http://demo.script4realestate.com/Utility/backend/cache" class=""><i
                                class="fa fa-refresh"></i> Refresh All Cache</a></li>
                    <li><a href="http://demo.script4realestate.com/Utility/backend/log" class=""><i
                                class="fa fa-list-ol"></i> Logs</a></li>
                </ul>
            </div>

        </li>

        <li class="right">
            <a href="javascript:void(0);" title=""><i class="fa fa-life-ring"></i> <span>HELP</span></a>

            <div class="grid-container3">
                <ul>
                    <li><a href="http://forums.eicra.com/index.php" class="" target="_blank"><i class="fa fa-users"></i>
                            Community Forum</a></li>
                    <li><a href="https://support.eicra.com/index.php?/Tickets/Submit" class="" target="_blank"><i
                                class="fa fa-ticket"></i> Open support ticket</a></li>
                    <li><a href="http://order.eicra.com/knowledgebase.php" class="" target="_blank"><i
                                class="fa fa-graduation-cap"></i> Knowledgebase</a></li>
                    <li><a href="http://www.eicracasts.com/" class="" target="_blank"><i class="fa fa-video-camera"></i>
                            Video Tutorials</a></li>
                    <li><a href="http://www.httpsdoc.com/" class="" target="_blank"><i class="fa fa-book"></i> User
                            guides</a></li>
                    <li><a href="http://blog.eicra.com/" class="" target="_blank"><i class="fa fa-pencil"></i> Blogs</a>
                    </li>
                </ul>
            </div>

        </li>
    </ul>
    <!--/ mega menu --> </div>
<!--Header End-->

<!-- Body Start-->
<div class="container-fluid">
    <div class="row">
        <!--Tree Menu Start-->
        <div class="col-lg-3 col-md-12 visible-lg">
            <script type="text/javascript" src="Administrator%27s%20Control%20Panel_files/jqueryFileTree.js"></script>
            <link href="Administrator%27s%20Control%20Panel_files/jqueryFileTree.css" media="screen" rel="stylesheet"
                  type="text/css">
            <script type="text/javascript">

                $(document).ready(function () {

                    $('#fileTreeDemo_1').fileTree({
                        root: 'root',
                        script: "/Administrator/Index/tree/getAction/index/getController/index/getModule/Administrator",
                        expandEasing: 'easeOutBounce',
                        collapseEasing: 'easeOutBounce',
                        loadMessage: "Loading Data....."
                    }, function (file) {
                        document.location.href = file;
                    });

                    /*$('#fileTreeDemo_2').fileTree({ root: '/images/', script: '/js/jquery/jqueryFileTree/connectors/jqueryFileTree.php', folderEvent: 'click', expandSpeed: 750, collapseSpeed: 750, multiFolder: false }, function(file) { 
                     alert(file);
                     });

                     $('#fileTreeDemo_3').fileTree({ root: '/images/', script: '/js/jquery/jqueryFileTree/connectors/jqueryFileTree.php', folderEvent: 'click', expandSpeed: 750, collapseSpeed: 750, expandEasing: 'easeOutBounce', collapseEasing: 'easeOutBounce', loadMessage: 'Un momento...' }, function(file) { 
                     alert(file);
                     });

                     $('#fileTreeDemo_4').fileTree({ root: '/images/', script: '/js/jquery/jqueryFileTree/connectors/jqueryFileTree.php', folderEvent: 'dblclick', expandSpeed: 1, collapseSpeed: 1 }, function(file) { 
                     alert(file);
                     });*/

                });
            </script>

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-angle-down"></i> Modules</div>
                <div class="panel-body">
                    <div class="" id="fileTreeDemo_1">
                        <ul class="jqueryFileTree" style="">
                            <li class="directory collapsed"><a href="#" rel="root/Database/">Database</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Poll/">Poll</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Projects/">Projects</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Utility/">Utility</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Theme/">Theme</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Comment/">Comment</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Geo/">Geo</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Newsletter/">Newsletter</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Invoice/">Invoice</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Paymentgateway/">Paymentgateway</a>
                            </li>
                            <li class="directory collapsed"><a href="#" rel="root/Menu/">Menu</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Password/">Password</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Property/">Property</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Gallery/">Gallery</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Settings/">Settings</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Articles/">Articles</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Vote/">Vote</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/News/">News</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Contact/">Contact</a></li>
                            <li class="directory expanded"><a href="#" rel="root/Administrator/">Administrator</a>
                                <ul class="jqueryFileTree">
                                    <li class="file ext_css selected"><a
                                            href="http://demo.script4realestate.com/Administrator/index/index"
                                            rel="/Administrator/index/index">View The Dashboard</a></li>
                                    <li class="file ext_css "><a
                                            href="http://demo.script4realestate.com/Administrator/privilege/list"
                                            rel="/Administrator/privilege/list">View the list of Privileges</a></li>
                                    <li class="file ext_css "><a
                                            href="http://demo.script4realestate.com/Administrator/role/list"
                                            rel="/Administrator/role/list">View the list of User Role</a></li>
                                </ul>
                            </li>
                            <li class="directory collapsed"><a href="#" rel="root/Members/">Members</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Review/">Review</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Tree Menu End-->

        <!--Content Start-->
        <div class="col-lg-9 col-md-12"> <!-- col-lg-12 -->
            <script type="text/javascript"
                    src="Administrator%27s%20Control%20Panel_files/easyResponsiveTabs.js"></script>
            <link href="Administrator%27s%20Control%20Panel_files/easy-responsive-tabs.css" media="screen"
                  rel="stylesheet" type="text/css">
            <link href="Administrator%27s%20Control%20Panel_files/admin.css" media="screen" rel="stylesheet"
                  type="text/css">
            <script type="text/javascript" src="Administrator%27s%20Control%20Panel_files/jquery.js"></script>
            <script type="text/javascript">
                var settingInvoiceObj = {
                    grid_id: 'grid-invoice',
                    dest_url: "/Invoice/backend/list",
                    no_browse_url: true,
                    pageSize: '30',
                    page: '',
                    calendar: {
                        culture: "en-US",
                        value: ''
                    },
                    search_action: {
                        search_form_id: 'searchForm',
                        search_form_btn: 'search_btn',
                        hasTinyMCE: false
                    },
                    common_action: {},

                    search_data: {},
                    batch: false,
                    editable: {confirmation: false},
                    scrollable: false,
                    detailInit: false,
                    dataBound: function (e) {
                        var self = this;
                        self.tbody.find("tr").children('td:nth-child(7)').css({'overflow': 'visible'});

                    },
                    filterable: {

                        extra: true,
                        messages: {
                            info: "Show Items with value that:", // sets the text on top of the filter menu
                            filter: "Filter", // sets the text for the "Filter" button
                            clear: "Clear", // sets the text for the "Clear" button

                            // when filtering boolean numbers
                            isTrue: "custom is true", // sets the text for "isTrue" radio button
                            isFalse: "custom is false", // sets the text for "isFalse" radio button

                            //changes the text of the "And" and "Or" of the filter menu
                            and: "And",
                            or: "Or"
                        },
                        operators: {
                            string: {
                                startswith: "Starts with",
                                contains: "Contains",
                                doesnotcontain: "Does not contain",
                                endswith: "Ends with",
                                eq: "Is equal to",
                                neq: "Is not equal to"
                            },
                            number: {
                                eq: "Is equal to",
                                neq: "Is not equal to",
                                gte: "Is greater than or equal to",
                                gt: "Is greater than",
                                lte: "Is less than or equal to",
                                lt: "Is less than"
                            },
                            date: {
                                gte: "Is after than or equal to",
                                gt: "Is after than",
                                lte: "Is before than or equal to",
                                lt: "Is before than",
                                eq: "Is equal to",
                                neq: "Is not equal to"
                            },
                            enums: {
                                eq: "Is equal to",
                                neq: "Is not equal to"
                            }
                        }
                    },
                    model: {
                        fields: {
                            id: {type: "number", editable: false},
                            module_name: {type: "string", editable: false},
                            full_name: {type: "string", editable: false},
                            total_amount: {type: "number", editable: false},
                            now_payable: {type: "number", editable: false},
                            invoice_create_date: {type: "date", editable: false},
                            status: {type: "enums", editable: false},
                            payment_method: {editable: true},
                            common_action: {editable: false}
                        }
                    },
                    column_fields: [
                        {
                            field: "id",
                            title: "Invoice #",
                            template: "#= id_format #",
                            width: 50,
                            filterable: {
                                ui: function (element) {
                                    element.kendoNumericTextBox({
                                        culture: "en-US",
                                        format: "0",
                                        min: 0,
                                        placeholder: "Selecte a value",
                                        upArrowText: "Increase value",
                                        downArrowText: "Decrease value"
                                    });
                                }
                            }
                        },
                        {field: "module_name", title: "Item(s)", width: 100},
                        {field: "full_name", title: "Client Name"},
                        {
                            field: "invoice_create_date",
                            title: "Invoice Date",
                            format: "{0:MM/dd/yyyy}",
                            template: '<div title="Date : ${invoice_create_date_format}">#= kendo.toString(invoice_create_date,\'dd/MM/yyyy\') #</div>',
                            width: 100,
                            attributes: {'align': 'center'},
                            filterable: {
                                ui: function (element) {
                                    kendoDateTimeCalendar(element, settingObj);
                                }
                            }
                        },
                        {
                            field: "total_amount",
                            title: "Total",
                            headerTemplate: "Total ( USD )",
                            template: '<div class="text-right">$ #= total_amount_format #</div>',
                            width: 105,
                            filterable: {
                                ui: function (element) {
                                    element.kendoNumericTextBox({
                                        culture: "en-US",
                                        format: "c",
                                        min: 0,
                                        placeholder: "Selecte a value",
                                        upArrowText: "Increase value",
                                        downArrowText: "Decrease value"
                                    });
                                }
                            }
                        },


                        {
                            field: "status",
                            title: "Status",
                            width: 80,
                            template: '#= invoice_status_format #',
                            attributes: {'align': 'center'},
                            filterable: {
                                ui: function (element) {
                                    element.kendoDropDownList({
                                        dataSource: [{Id: 1, Title: "Paid"}, {Id: 2, Title: "Unpaid"}, {
                                            Id: 0,
                                            Title: "Cancelled"
                                        }],
                                        dataTextField: "Title",
                                        dataValueField: "Id",
                                        optionLabel: "Select..........."
                                    });
                                }
                            }
                        },
                        {
                            field: "common_action",
                            title: "Action",
                            width: 100,
                            template: '<div class="btn-group">' +
                            '<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">' +
                            'Action <span class="caret"></span>' +
                            '<span class="sr-only">Toggle Dropdown</span>' +
                            '</button>' +
                            '<ul class="dropdown-menu dropdown-menu-right" role="menu">' +

                            '<li><a href="/Invoice/backend/details/invoice_id/${id}" title="View Details"><i class="fa fa-file-text-o blue"></i> View Details</a></li>' +

                            '</ul>' +
                            '</div>',
                            attributes: {'align': 'center'},
                            filterable: false,
                            sortable: false,
                            columnMenu: false
                        }
                    ],
                    columnMenu: {
                        columns: true,
                        messages: {
                            sortAscending: "Sort Ascending",
                            sortDescending: "Sort Descending",
                            filter: "Filter",
                            columns: "Columns"
                        }
                    },
                    messages: {
                        display: '{0} - {1} of {2} items',
                        empty: 'No items to display',
                        page: 'Page',
                        of: 'of {0}',
                        itemsPerPage: 'items per page',
                        first: 'Go to the first page',
                        previous: 'Go to the previous page',
                        next: 'Go to the next page',
                        last: 'Go to the last page',
                        refresh: 'Refresh',

                        common_msg_dialog_id: 'dialog_msg',
                        common_confirn_dialog_id: 'dialog-confirm',
                        common_ok: "Ok",
                        common_delete_title: "Delete",
                        common_delete_selected: "Delete",
                        common_cancel: "Cancel",
                        common_delete_confirm: "invoice_list_delete_confirm",
                        common_publish_title: "Click To Publish",
                        common_unpublish_title: "Click To Un-Publish",
                        common_publish_selected: "Publish",
                        common_unpublish_selected: "Unpublish",
                        common_publish_perm: "You do not have enough access privileges to publish or unpublish this.",
                        common_perm_err: "You do not have enough access privileges to perform this action.",
                        common_selected_err: "invoice_selected_err"
                    }
                };
                var settingCommentObj = {
                    grid_id: 'grid-comment',
                    no_browse_url: true,
                    dest_url: "/Comment/backendcomment/list",
                    pageSize: '',
                    page: '',
                    common_action: {},
                    detailInit_action: {},
                    search_data: {},
                    batch: false,
                    editable: false,
                    scrollable: false, //{ virtual: false },
                    detailInit: false,
                    dataBound: function (e) {
                        var self = this;
                        self.tbody.find("tr").children('td:nth-child(8)').css({'overflow': 'visible'});
                        self.tbody.find("tr").children('td:nth-child(4)').css({'overflow': 'visible'});
                    },
                    filterable: {
                        extra: true,
                        messages: {
                            info: "Show Items with value that:", // sets the text on top of the filter menu
                            filter: "Filter", // sets the text for the "Filter" button
                            clear: "Clear", // sets the text for the "Clear" button

                            // when filtering boolean numbers
                            isTrue: "custom is true", // sets the text for "isTrue" radio button
                            isFalse: "custom is false", // sets the text for "isFalse" radio button

                            //changes the text of the "And" and "Or" of the filter menu
                            and: "And",
                            or: "Or",

                            selectValue: "Select..........."
                        },
                        operators: {
                            string: {
                                startswith: "Starts with",
                                contains: "Contains",
                                doesnotcontain: "Does not contain",
                                endswith: "Ends with",
                                eq: "Is equal to",
                                neq: "Is not equal to"
                            },
                            number: {
                                eq: "Is equal to",
                                neq: "Is not equal to",
                                gte: "Is greater than or equal to",
                                gt: "Is greater than",
                                lte: "Is less than or equal to",
                                lt: "Is less than"
                            },
                            enums: {
                                eq: "Is equal to",
                                neq: "Is not equal to"
                            }
                        }
                    },
                    model: {
                        fields: {

                            id: {type: "number"},
                            table_name: {type: "string"},
                            entry_by: {type: "enums"},
                            page_title: {type: "string"},
                            page_url: {type: "string"},
                            comment_title: {type: "string"},
                            comment_desc: {type: "string"},
                            comment_date: {type: "date"},
                            active: {type: "enums"}

                        }
                    },
                    column_fields: [
                        {
                            field: "id",
                            template: '#= id_format #',
                            title: "ID",

                            filterable: {
                                ui: function (element) {
                                    element.kendoNumericTextBox({
                                        culture: "en-US",
                                        format: "0",
                                        min: 1,
                                        placeholder: "Selecte a value",
                                        upArrowText: "Increase value",
                                        downArrowText: "Decrease value"
                                    });
                                }
                            }
                        },
                        {
                            field: "table_name",
                            title: "Module",
                            template: '#= table_name_format #',
                        },

                        {
                            field: "page_title",
                            title: "Page Title",
                            width: 90,
                            template: '# if(page_title_format){ #<a href="#= page_url #" target="_blank" class="td_pad category_link_1" />${page_title_format}</a># } #',
                            filterable: false,
                            sortable: false,
                            columnMenu: false
                        },

                        {
                            field: "user_thumb",
                            title: "Image",
                            template: '# if(user_thumb_format){ #<img src="#=user_thumb_format #" width="30" height="20" class="img-thumbnail img-hover" /> # } #',
                            attributes: {'align': 'center'},
                            filterable: false,
                            sortable: false,
                            columnMenu: false

                        },
                        {
                            field: "comment_title", title: "Title"
                        },
                        {
                            field: "comment_date",
                            title: "Date",
                            format: "{0:MM/dd/yyyy}",
                            template: '#= comment_date_lang_format #',
                            attributes: {
                                'align': 'center',
                                'title': 'Date : ${comment_date_format}<br>Entry By : ${username}'
                            },

                            filterable: {
                                ui: function (element) {
                                    kendoDateTimeCalendar(element, settingObj);
                                }
                            }
                        },
                        {
                            field: "active",
                            optionLabel: "Select...........",
                            values: [{text: "Unpublished", value: 0}, {text: "Published", value: 1}],
                            title: "Publish",
                            template: '<a rel="${id}_${table_name}_#= (active == 1) ? \'unpublish\' : \'publish\' #" title="#= (active == 1) ? \'Click To Un-Publish\' : \'Click To Publish\' #">#= (active == 1) ? \'<i class="fa fa-check-circle green"></i>\' : \'<i class="fa fa-minus-circle red"></i>\' #</a>',
                            attributes: {'align': 'center'},
                            filterable: {
                                ui: function (element) {
                                    element.kendoDropDownList({
                                        dataSource: [{Id: 0, Title: "Unpublished"}, {Id: 1, Title: "Published"}],
                                        dataTextField: "Title",
                                        dataValueField: "Id",
                                        optionLabel: "Select..........."
                                    });
                                }
                            }
                        },
                        {
                            field: "common_action",
                            title: "Action",
                            width: 50,
                            attributes: {'align': 'center'},
                            template: '# if(edit_enable){ #<a href="/Comment/backendcomment/edit/id/${id}" title="Edit"><i class="fa fa-pencil green"></i></a> # } #',
                            filterable: false,
                            sortable: false,
                            columnMenu: false
                        }
                    ],
                    columnMenu: {
                        columns: true,
                        messages: {
                            sortAscending: "Sort Ascending",
                            sortDescending: "Sort Descending",
                            filter: "Filter",
                            columns: "Columns"
                        }
                    },
                    messages: {
                        display: '{0} - {1} of {2} items',
                        empty: 'No items to display',
                        page: 'Page',
                        of: 'of {0}',
                        itemsPerPage: 'items per page',
                        first: 'Go to the first page',
                        previous: 'Go to the previous page',
                        next: 'Go to the next page',
                        last: 'Go to the last page',
                        refresh: 'Refresh',
                        common_msg_dialog_id: 'dialog_msg',
                        common_confirn_dialog_id: 'dialog-confirm',
                        common_ok: "Ok",
                        common_delete_title: "Delete",
                        common_delete_selected: "Delete",
                        common_cancel: "Cancel",
                        common_delete_confirm: "comment_list_delete_selected_confirm",
                        common_publish_title: "Click To Publish",
                        common_unpublish_title: "Click To Un-Publish",
                        common_publish_selected: "Publish",
                        common_unpublish_selected: "Unpublish",
                        common_publish_perm: "You do not have enough access privileges to publish or unpublish this."
                    }
                };
                var settingVoteObj = {
                    grid_id: 'grid-vote',
                    dest_url: "/Vote/backendvote/list",
                    no_browse_url: true,
                    pageSize: '30',
                    page: '',
                    calendar: {
                        culture: "en-US",
                        value: ''
                    },
                    search_action: {},
                    common_action: {
                        permission_arr: {}
                    },
                    search_data: {},
                    batch: false,
                    editable: false,
                    scrollable: true,
                    dataSource_transport_parameterMap: function (options, operation) {

                        //alert (options.toSource());
                        if (operation !== "read" && options.models) {
                            commonOpenLoaderDialog(settingObj);
                            return {models: options.models};
                        }
                        else {
                            return options;
                        }
                    },
                    detailInit: false,
                    dataBound: function (e) {
                        var self = this;
                        self.tbody.find("tr").children('td:nth-child(8)').css({'overflow': 'visible'});
                        $(".pollpercent").tipsy({gravity: 'south'});
                        $(".weight").each(function () {
                            interval = 3000; // the time (in ms) to animate the results
                            lp = $(this).attr("data-lp");
                            $(this).css({width: "0%"}).animate({width: lp + "%"}, interval);
                        });
                    },
                    filterable: {
                        extra: true,
                        messages: {
                            info: "Show Items with value that:", // sets the text on top of the filter menu
                            filter: "Filter", // sets the text for the "Filter" button
                            clear: "Clear", // sets the text for the "Clear" button

                            // when filtering boolean numbers
                            isTrue: "custom is true", // sets the text for "isTrue" radio button
                            isFalse: "custom is false", // sets the text for "isFalse" radio button

                            //changes the text of the "And" and "Or" of the filter menu
                            and: "And",
                            or: "Or"
                        },
                        operators: {
                            string: {
                                startswith: "Starts with",
                                contains: "Contains",
                                doesnotcontain: "Does not contain",
                                endswith: "Ends with",
                                eq: "Is equal to",
                                neq: "Is not equal to"
                            },
                            number: {
                                eq: "Is equal to",
                                neq: "Is not equal to",
                                gte: "Is greater than or equal to",
                                gt: "Is greater than",
                                lte: "Is less than or equal to",
                                lt: "Is less than"
                            },
                            date: {
                                gte: "Is after than or equal to",
                                gt: "Is after than",
                                lte: "Is before than or equal to",
                                lt: "Is before than",
                                eq: "Is equal to",
                                neq: "Is not equal to"
                            }
                        }
                    },
                    model: {
                        fields: {
                            article_title: {type: "string"},
                            table_name: {type: "string"},
                            total_votes: {type: "number"},
                            ActionCount: {type: "number"},
                            like_percent: {type: "string"},
                            active: {type: "enums"},
                            module_name: {editable: false},
                            article_title_short_format: {editable: false},
                            common_action: {editable: false}
                        }
                    },
                    column_fields: [
                        {
                            field: "article_title",
                            title: "Page Title",
                            template: "#= article_title_short_format #",
                            width: 250,
                            attributes: {
                                'title': '#= article_title #'
                            }
                        },
                        {
                            field: "table_name",
                            title: "Module",
                            template: '#= module_name #',
                            width: 110
                        },
                        {
                            field: "like_percent",
                            title: "Percent",
                            headerTemplate: "<center>Percent</center>",
                            template: '<div class="pollpercent" title="#= like_percent_format # %"><div class="weight" data-lp="#= like_percent #"></div></div>',
                            attributes: {'align': 'center'},
                            width: 150,
                            filterable: false,
                            sortable: false,
                            columnMenu: false
                        },
                        {
                            field: "total_votes",
                            title: "Vote(s)",
                            width: 80,
                            attributes: {'align': 'center'},
                            filterable: {
                                ui: function (element) {
                                    element.kendoNumericTextBox({
                                        culture: "en-US",
                                        format: "0",
                                        placeholder: "Selecte a value",
                                        upArrowText: "Increase value",
                                        downArrowText: "Decrease value"
                                    });
                                }
                            }
                        },
                        {
                            field: "ActionCount",
                            title: "User Interactions",
                            width: 180,
                            attributes: {'align': 'center'},
                            filterable: {
                                ui: function (element) {
                                    element.kendoNumericTextBox({
                                        culture: "en-US",
                                        format: "0",
                                        min: 1,
                                        placeholder: "Selecte a value",
                                        upArrowText: "Increase value",
                                        downArrowText: "Decrease value"
                                    });
                                }
                            }
                        },
                        {
                            field: "active",
                            title: "Publish",
                            width: 110,
                            template: '<a rel="${table_id}_${publish_status_table_name}_#= (active == 1) ? \'unpublish\' : \'publish\' #" title="#= (active == 1) ? \'Published\' : \'Unpublished\' #">#= (active == 1) ? \'<i class="fa fa-check-circle green"></i>\' : \'<i class="fa fa-minus-circle red"></i>\' #</a>',
                            attributes: {'align': 'center'},
                            filterable: {
                                ui: function (element) {
                                    element.kendoDropDownList({
                                        dataSource: [{Id: 0, Title: "Disabled"}, {Id: 1, Title: "Enabled"}],
                                        dataTextField: "Title",
                                        dataValueField: "Id",
                                        optionLabel: "Select..........."
                                    });
                                }
                            }
                        }
                    ],
                    columnMenu: {
                        columns: true,
                        messages: {
                            sortAscending: "Sort Ascending",
                            sortDescending: "Sort Descending",
                            filter: "Filter",
                            columns: "Columns"
                        }
                    },
                    messages: {
                        display: '{0} - {1} of {2} items',
                        empty: 'No items to display',
                        page: 'Page',
                        of: 'of {0}',
                        itemsPerPage: 'items per page',
                        first: 'Go to the first page',
                        previous: 'Go to the previous page',
                        next: 'Go to the next page',
                        last: 'Go to the last page',
                        refresh: 'Refresh',

                    }
                };
                var settingUserObj = {
                    grid_id: 'grid-user',
                    dest_url: "/Members/index/list",
                    no_browse_url: true,
                    pageSize: '30',
                    page: '',
                    calendar: {
                        culture: "en-US",
                        value: ''
                    },

                    search_action: {
                        search_form_id: 'formUserSearch',
                        search_form_btn: 'user_search_btn',
                        hasTinyMCE: false,
                        show_loader_on_search_button: true
                    },
                    common_action: {},
                    search_data: {},
                    batch: false,
                    editable: false,
                    scrollable: {virtual: false},
                    detailInit: false,
                    dataBound: function (e) {
                        var self = this;
                        self.tbody.find("tr").children('td:nth-child(5)').css({'overflow': 'visible'});
                    },
                    filterable: {
                        extra: true,
                        messages: {
                            info: "Show Items with value that:", // sets the text on top of the filter menu
                            filter: "Filter", // sets the text for the "Filter" button
                            clear: "Clear", // sets the text for the "Clear" button

                            // when filtering boolean numbers
                            isTrue: "custom is true", // sets the text for "isTrue" radio button
                            isFalse: "custom is false", // sets the text for "isFalse" radio button

                            //changes the text of the "And" and "Or" of the filter menu
                            and: "And",
                            or: "Or"
                        },
                        operators: {
                            string: {
                                startswith: "Starts with",
                                contains: "Contains",
                                doesnotcontain: "Does not contain",
                                endswith: "Ends with",
                                eq: "Is equal to",
                                neq: "Is not equal to"
                            },
                            number: {
                                eq: "Is equal to",
                                neq: "Is not equal to",
                                gte: "Is greater than or equal to",
                                gt: "Is greater than",
                                lte: "Is less than or equal to",
                                lt: "Is less than"
                            },
                            date: {
                                gte: "Is after than or equal to",
                                gt: "Is after than",
                                lte: "Is before than or equal to",
                                lt: "Is before than",
                                eq: "Is equal to",
                                neq: "Is not equal to"
                            }
                        }
                    },
                    model: {
                        fields: {
                            user_id: {type: "number"},
                            username: {type: "string"},
                            full_name: {type: "string"},
                            role_name: {type: "string"},
                            last_access: {type: "date"},
                            register_date: {type: "date"}
                        }
                    },
                    column_fields: [
                        {
                            field: "user_id",
                            template: '#= user_id_format #',
                            title: "ID",
                            width: 48,
                            filterable: {
                                ui: function (element) {
                                    element.kendoNumericTextBox({
                                        culture: "en-US",
                                        format: "0",
                                        min: 0,
                                        placeholder: "Selecte a value",
                                        upArrowText: "Increase value",
                                        downArrowText: "Decrease value"
                                    });
                                }
                            }
                        },
                        {field: "username", title: "Username/Email", width: 190},
                        {field: "full_name", title: "Name"},
                        {field: "role_name", title: "User Roles", width: 150},

                        {
                            field: "common_action",
                            title: "Manage",
                            width: 100,
                            attributes: {'align': 'center'},
                            template: '<div class="btn-group">' +
                            '<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">' +
                            'Action <span class="caret"></span>' +
                            '<span class="sr-only">Toggle Dropdown</span>' +
                            '</button>' +
                            '<ul class="dropdown-menu dropdown-menu-right" role="menu">' +
                            '# if(edit_enable){ #<li><a href="/Members/index/edit/user_id/${user_id}" title="Edit"><i class="fa fa-pencil green"></i> Edit</a></li># } #' +

                            '</ul>' +
                            '</div>',
                            filterable: false,
                            sortable: false,
                            columnMenu: false
                        }
                        //{ command: { text: "View Details", click: gridPublish }, title: " ", width: "140px" }
                    ],
                    columnMenu: {
                        columns: true,
                        messages: {
                            sortAscending: "Sort Ascending",
                            sortDescending: "Sort Descending",
                            filter: "Filter",
                            columns: "Columns"
                        }
                    },
                    messages: {
                        display: '{0} - {1} of {2} items',
                        empty: 'No items to display',
                        page: 'Page',
                        of: 'of {0}',
                        itemsPerPage: 'items per page',
                        first: 'Go to the first page',
                        previous: 'Go to the previous page',
                        next: 'Go to the next page',
                        last: 'Go to the last page',
                        refresh: 'Refresh',

                        common_msg_dialog_id: 'dialog_msg',
                        common_confirn_dialog_id: 'dialog-confirm',
                        common_ok: "Ok",
                        common_delete_title: "Delete",
                        common_delete_selected: "Delete",
                        common_cancel: "Cancel",
                        common_delete_confirm: "member_list_delete_confirm",
                        common_publish_title: "Click To Publish",
                        common_unpublish_title: "Click To Un-Publish",
                        common_publish_selected: "Publish",
                        common_unpublish_selected: "Unpublish",
                        common_publish_perm: "You do not have enough access privileges to publish or unpublish this.",
                        common_selected_err: "member_selected_err"
                    }
                };
                $(document).ready(function () {
                    $("#demoTab>ul>li:eq(1)").click(function () {
                        var grid = $("#" + settingInvoiceObj.grid_id).data("kendoGrid");
                        if (grid) {
                            grid.destroy();
                        }
                        $("#" + settingInvoiceObj.grid_id).html('');
                        commonGrid(settingInvoiceObj);
                    });
                    $("#demoTab>ul>li:eq(2)").click(function () {
                        var grid = $("#" + settingCommentObj.grid_id).data("kendoGrid");
                        if (grid) {
                            grid.destroy();
                        }
                        $("#" + settingCommentObj.grid_id).html('');
                        commonGrid(settingCommentObj);
                    });
                    $("#demoTab>ul>li:eq(3)").click(function () {
                        var grid = $("#" + settingUserObj.grid_id).data("kendoGrid");
                        if (grid) {
                            grid.destroy();
                        }
                        $("#" + settingUserObj.grid_id).html('');
                        commonGrid(settingUserObj);
                    });

                    $("#demoTab>ul>li:eq(4)").click(function () {
                        var grid = $("#" + settingVoteObj.grid_id).data("kendoGrid");
                        if (grid) {
                            grid.destroy();
                        }
                        $("#" + settingVoteObj.grid_id).html('');
                        commonGrid(settingVoteObj);
                    });

                    $(".pollpercent").tipsy({gravity: 'south'});
                    $(".weight").each(function () {
                        interval = 3000; // the time (in ms) to animate the results
                        lp = $(this).attr("data-lp");
                        $(this).css({width: "0%"}).animate({width: lp + "%"}, interval);
                    });


                    $("table.highlighter tr:nth-child(even)").addClass("even");
                    $("table.highlighter tr:nth-child(odd)").addClass("odd");
                });

            </script>


            <div class="welcome-panel">
                <h2>Dashboard</h2>

                <div class="row">
                    <div class="col-md-6 col-xs-6">
                        <div class="row">
                            <div class="col-md-2 col-xs-3">
                                <img src="Administrator%27s%20Control%20Panel_files/avatar.png" class="img-responsive">
                            </div>
                            <div class="col-md-10 col-xs-9">
                                <p>
                                    Administrator Profile<br>
                                    User Name : demo@script4realestate.com<br>
                                    Email : demo@script4realestate.com<br>
                                    Payment Gateway: demo@script4realestate.com<br>
                                    Last Login : Wednesday, February 17, 2016 2:37:35 PM<br>
                                </p>
                                <a href="http://demo.script4realestate.com/Administrator/login/logout"
                                   class="btn btn-success btn-sm no-radius"><i class="fa fa-unlock-alt"></i> Log Out</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xs-6">
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <figure><i class="fa fa-user user"></i><a
                                        href="http://demo.script4realestate.com/Members/index/list">Users<br><span
                                            class="count">8</span></a></figure>
                            </div>

                            <div class="col-md-6 col-xs-6">

                                <figure><i class="fa fa-sitemap listing"></i><a
                                        href="http://demo.script4realestate.com/Property/backendpro/list">Listings<br><span
                                            class="count">51</span></a></figure>


                            </div>

                            <div class="col-md-6 col-xs-6">
                                <figure><i class="fa fa-ticket invoice"></i><a
                                        href="http://demo.script4realestate.com/Invoice/backend/list">Invoices<br><span
                                            class="count">1</span></a></figure>
                            </div>

                            <div class="col-md-6 col-xs-6">
                                <figure>
                                    <i class="fa fa-calendar date"></i>
                                    Feb<br>
                                    <span class="count">17</span>
                                    2016
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div style="display: block; width: 100%; margin: 0px;" id="demoTab" class="clearfix resp-vtabs">
                <ul class="resp-tabs-list">
                    <li role="tab" aria-controls="tab_item-0" class="first resp-tab-item resp-tab-active"><i
                            class="fa fa-sitemap"></i> Navigation
                    </li>
                    <li role="tab" aria-controls="tab_item-1" class="resp-tab-item"><i class="fa fa-tags"></i> Invoice
                    </li>
                    <li role="tab" aria-controls="tab_item-2" class="resp-tab-item"><i class="fa fa-comments"></i>
                        Comments
                    </li>
                    <li role="tab" aria-controls="tab_item-3" class="resp-tab-item"><i class="fa fa-user"></i> Users
                    </li>
                    <li role="tab" aria-controls="tab_item-4" class="resp-tab-item"><i class="fa fa-thumbs-o-up"></i>
                        Voting
                    </li>
                    <li role="tab" aria-controls="tab_item-5" class="resp-tab-item"><i class="fa fa-cog"></i> Global
                        Settings
                    </li>
                    <li role="tab" aria-controls="tab_item-6" class="resp-tab-item"><i class="fa fa-globe"></i>
                        Environment Set
                    </li>
                </ul>

                <div class="resp-tabs-container dashboard-icon">
                    <h2 aria-controls="tab_item-0" class="resp-accordion resp-tab-active" role="tab"><span
                            class="resp-arrow"></span> Navigation</h2>

                    <div aria-labelledby="tab_item-0" style="display:block"
                         class="resp-tab-content resp-tab-content-active">
                        <fieldset>
                            <legend>User Management</legend>
                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Members/index/group">
                                    <div class="circle circle-blue">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <i class="fa fa-plus action"></i>
                                    Add Users </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Members/index/list">
                                    <div class="circle circle-green">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    Manage Users </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Members/index/list">
                                    <div class="circle circle-red">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <i class="fa fa-search action"></i>
                                    User Search </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Members/password/change">
                                    <div class="circle circle-purple">
                                        <i class="fa fa-key"></i>
                                    </div>
                                    Change Password </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Members/index/profile">
                                    <div class="circle circle-orange">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <i class="fa fa-info action"></i>
                                    View Profile </a>
                            </div>
                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Administrator/Role/list">
                                    <div class="circle circle-light-green">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <i class="fa fa-wrench action"></i>
                                    Role Policy </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Administrator/privilege/list">
                                    <div class="circle circle-black">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <i class="fa fa-check-square-o action"></i>
                                    Access Privilege </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Members/form/list/form_id/9">
                                    <div class="circle circle-yellow">
                                        <i class="fa fa-suitcase"></i>
                                    </div>
                                    Package Plans </a>
                            </div>

                        </fieldset>
                        <fieldset>
                            <legend>Content Management</legend>
                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Articles/backend/add">
                                    <div class="circle circle-blue">
                                        <i class="fa fa-file-text-o"></i>
                                    </div>
                                    <i class="fa fa-plus action"></i>
                                    Add Article </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Articles/backend/list">
                                    <div class="circle circle-green">
                                        <i class="fa fa-file-text-o"></i>
                                    </div>
                                    <i class="fa fa-cog action"></i>
                                    Manage Article(s) </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Menu/backend/add">
                                    <div class="circle circle-red">
                                        <i class="fa fa-sitemap"></i>
                                    </div>
                                    <i class="fa fa-plus action"></i>
                                    New Menu </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Menu/backend/list">
                                    <div class="circle circle-purple">
                                        <i class="fa fa-sitemap"></i>
                                    </div>
                                    <i class="fa fa-cog action"></i>
                                    Manage Menu(s) </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Members/form/add">
                                    <div class="circle circle-orange">
                                        <i class="fa fa-list-alt"></i>
                                    </div>
                                    <i class="fa fa-plus action"></i>
                                    Add Web Form(s) </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Members/form/list">
                                    <div class="circle circle-light-green">
                                        <i class="fa fa-list-alt"></i>
                                    </div>
                                    <i class="fa fa-cog action"></i>
                                    Manage Web Forms </a>
                            </div>
                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Articles/backend/list/link/1">
                                    <div class="circle circle-black">
                                        <i class="fa fa-file-text"></i>
                                    </div>
                                    <i class="fa fa-link action"></i>
                                    Link Article to Menu </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Menu/backend/list">
                                    <div class="circle circle-yellow">
                                        <i class="fa fa-sitemap"></i>
                                    </div>
                                    <i class="fa fa-link action"></i>
                                    Link Menu to Article </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Administrator/index/approval">
                                    <div class="circle circle-pink">
                                        <i class="fa fa-flag"></i>
                                    </div>
                                    Approval Pending </a>
                            </div>

                        </fieldset>
                        <fieldset>
                            <legend>Classifieds (Property)</legend>
                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Property/backendgrp/addgrp">
                                    <div class="circle circle-blue">
                                        <i class="fa fa-building-o"></i>
                                    </div>

                                    <i class="fa fa-plus action"></i>

                                    Add Group

                                </a>
                            </div>
                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Property/backendgrp/listgrp">
                                    <div class="circle circle-green">
                                        <i class="fa fa-building-o"></i>
                                    </div>

                                    <i class="fa fa-cog action"></i>

                                    Manage Group

                                </a>
                            </div>
                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Property/backendpro/add">
                                    <div class="circle circle-red">
                                        <i class="fa fa-list-ul"></i>
                                    </div>

                                    <i class="fa fa-plus action"></i>

                                    Add new Listing

                                </a>
                            </div>
                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Property/backendpro/list">
                                    <div class="circle circle-purple">
                                        <i class="fa fa-list-ul"></i>
                                    </div>

                                    <i class="fa fa-cog action"></i>

                                    Manage Listing(s)

                                </a>
                            </div>
                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Property/backend/add">
                                    <div class="circle circle-orange">
                                        <i class="fa fa-sitemap"></i>
                                    </div>

                                    <i class="fa fa-plus action"></i>

                                    Add Category

                                </a>
                            </div>
                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Property/backend/list">
                                    <div class="circle circle-light-green">
                                        <i class="fa fa-sitemap"></i>
                                    </div>

                                    <i class="fa fa-cog action"></i>

                                    Manage Categories

                                </a>
                            </div>
                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Property/backendtype/list/create/new">
                                    <div class="circle circle-black">
                                        <i class="fa fa-briefcase"></i>
                                    </div>

                                    <i class="fa fa-plus action"></i>

                                    Add Business types

                                </a>
                            </div>
                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Property/backendtype/list">
                                    <div class="circle circle-yellow">
                                        <i class="fa fa-briefcase"></i>
                                    </div>

                                    <i class="fa fa-cog action"></i>

                                    Manage Business types

                                </a>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>Modules</legend>
                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Gallery/backendgrp/listgrp">
                                    <div class="circle circle-blue">
                                        <i class="fa fa-picture-o"></i>
                                    </div>
                                    Gallery Management </a>
                            </div>
                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/News/backend/list/group_id/1">
                                    <div class="circle circle-green">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    News Management </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/News/backend/list/group_id/5">
                                    <div class="circle circle-red">
                                        <i class="fa fa-bullhorn"></i>
                                    </div>
                                    Ads Management </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/News/backend/list/group_id/3">
                                    <div class="circle circle-purple">
                                        <i class="fa fa-clipboard"></i>
                                    </div>
                                    Project Management </a>
                            </div>


                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/News/backendpro/list/group_id/2">
                                    <div class="circle circle-orange">
                                        <i class="fa fa-comments-o"></i>
                                    </div>
                                    Feedbacks </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Invoice/backend/list">
                                    <div class="circle circle-light-green">
                                        <i class="fa fa-money"></i>
                                    </div>
                                    Billing </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Newsletter/templates/send">
                                    <div class="circle circle-black">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    News letters </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Poll/backendpoll/list">
                                    <div class="circle circle-yellow">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </div>
                                    Polling </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Comment/backendcomment/list">
                                    <div class="circle circle-pink">
                                        <i class="fa fa-comment"></i>
                                    </div>
                                    Comments </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Comment/backendcomment/list">
                                    <div class="circle circle-deep-purple">
                                        <i class="fa fa-group"></i>
                                    </div>
                                    <i class="fa fa-comment action"></i>
                                    Visitor's Comment(s) </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Review/backend/list">
                                    <div class="circle circle-blue">
                                        <i class="fa fa-file-text-o"></i>
                                    </div>
                                    <i class="fa fa-user action"></i>
                                    Client's Review(s) </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Geo/country/list">
                                    <div class="circle circle-green">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    GEO </a>
                            </div>

                        </fieldset>

                        <fieldset>
                            <legend>Setting &amp; Others</legend>
                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Settings/global/update">
                                    <div class="circle circle-blue">
                                        <i class="fa fa-wrench"></i>
                                    </div>
                                    <i class="fa fa-cog action"></i>
                                    Global Settings </a>
                            </div>
                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Theme/template/list">
                                    <div class="circle circle-green">
                                        <i class="fa fa-columns"></i>
                                    </div>
                                    Templates Manager </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Newsletter/templates/list">
                                    <div class="circle circle-red">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    Email Templates </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Contact/backend/update">
                                    <div class="circle circle-purple">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    Contact Page </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Paymentgateway/backendgateway/list">
                                    <div class="circle circle-pink">
                                        <i class="fa fa-credit-card"></i>
                                    </div>
                                    Payment Gateway </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Database/backend/list">
                                    <div class="circle circle-deep-purple">
                                        <i class="fa fa-upload"></i>
                                    </div>
                                    Export Database </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Utility/backend/cache">
                                    <div class="circle circle-blue">
                                        <i class="fa fa-retweet"></i>
                                    </div>
                                    Rebuild System Cache </a>
                            </div>

                            <div class="tools-icon">
                                <a href="http://demo.script4realestate.com/Utility/backend/log">
                                    <div class="circle circle-green">
                                        <i class="fa fa-shield"></i>
                                    </div>
                                    System Logs </a>
                            </div>

                        </fieldset>
                    </div>

                    <h2 aria-controls="tab_item-1" class="resp-accordion" role="tab"><span class="resp-arrow"></span>
                        Invoice</h2>

                    <div aria-labelledby="tab_item-1" class="resp-tab-content">
                        <div class="extend label">Latest Invoice Status</div>
                        <div class="chart">
                            <div>
                                <div id="grid-invoice"></div>
                            </div>
                        </div>
                    </div>

                    <h2 aria-controls="tab_item-2" class="resp-accordion" role="tab"><span class="resp-arrow"></span>
                        Comments</h2>

                    <div aria-labelledby="tab_item-2" class="resp-tab-content">
                        <div class="extend label">Latest Comments Status</div>
                        <div class="chart">
                            <div>
                                <div id="grid-comment"></div>
                            </div>
                        </div>
                    </div>

                    <h2 aria-controls="tab_item-3" class="resp-accordion" role="tab"><span class="resp-arrow"></span>
                        Users</h2>

                    <div aria-labelledby="tab_item-3" class="resp-tab-content">
                        <div class="extend label">Latest Users Status</div>
                        <div class="chart">
                            <div>
                                <div id="grid-user"></div>
                            </div>
                        </div>
                    </div>

                    <h2 aria-controls="tab_item-4" class="resp-accordion" role="tab"><span class="resp-arrow"></span>
                        Voting</h2>

                    <div aria-labelledby="tab_item-4" class="resp-tab-content">
                        <div class="extend label">Latest Voting Status</div>
                        <div class="chart">
                            <div>
                                <div id="grid-vote"></div>
                            </div>
                        </div>
                    </div>

                    <h2 aria-controls="tab_item-5" class="resp-accordion" role="tab"><span class="resp-arrow"></span>
                        Global Settings</h2>

                    <div aria-labelledby="tab_item-5" class="resp-tab-content">
                        <div class="extend label">Global Settings</div>
                        <table class="table table-striped table-hover table-bordered">
                            <tbody>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Site Name</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">Realestate CMS <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Site Title</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">Realestate CMS <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Site URL</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">demo.script4realestate.com <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Google Analytics</td>
                                <td style="word-break:break-all;" width="57%" bgcolor=""><a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-danger pull-right">Not Set</span></a></td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Additional Javascript</td>
                                <td style="word-break:break-all;" width="57%" bgcolor=""><a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-danger pull-right">Not Set</span></a></td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Keywords</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">Demo - Realestate CMS, CMS,
                                    Content... <a href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Description</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">Demo - Realestate CMS - A... <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Default Country</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">226 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Default Language</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">en_US <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Default Currency</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">en_US <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;SEO On/Off</td>
                                <td style="word-break:break-all;" width="57%" bgcolor=""><a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-danger pull-right">Not Set</span></a></td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;IP Checking for login</td>
                                <td style="word-break:break-all;" width="57%" bgcolor=""><a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-danger pull-right">Not Set</span></a></td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Set Captcha as Mandatory before Login</td>
                                <td style="word-break:break-all;" width="57%" bgcolor=""><a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-danger pull-right">Not Set</span></a></td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;After uploading a file, rename it automatically or add
                                    prefix
                                </td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">1 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Append Custom Prefix</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">eicra_ <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Acceptable / Allowed MIME types</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">All <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Acceptable / Allowed Archive Extension</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">zip <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Blacklist vulnerable file extensions</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">php <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Languages Direction</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">ltr <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;The memory status of server</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">2 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Select Your Account(Site Owner)</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">2 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Billing &amp; Payment Module</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">On <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Method of Payment Flow</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">1 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Shopping Cart OFF/ON</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">On <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Price Margine</td>
                                <td style="word-break:break-all;" width="57%" bgcolor=""><a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-danger pull-right">Not Set</span></a></td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Email Address (Global)</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">demo@script4realestate.com <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Email Address (Online Payment)</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">demo@script4realestate.com <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;URL of logo prints on invoice</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">
                                    https://billing.eicra.com/images/logo.jpg <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Pay To Text</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">PAY TO : Mr xxxxxxxxxx
                                    Bank Name... <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Default Email Protocol</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">mail <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;SMTP From</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">demo@script4realestate.com <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;SMTP Host</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">mail.domain.com <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Username</td>
                                <td style="word-break:break-all;" width="57%" bgcolor=""><a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-danger pull-right">Not Set</span></a></td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Password</td>
                                <td style="word-break:break-all;" width="57%" bgcolor=""><a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-danger pull-right">Not Set</span></a></td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;SMTP Port</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">26 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;SMTP Word Wrap</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">50 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Admin Footer Name</td>
                                <td style="word-break:break-all;" width="57%" bgcolor=""><a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-danger pull-right">Not Set</span></a></td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Admin Footer URL</td>
                                <td style="word-break:break-all;" width="57%" bgcolor=""><a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-danger pull-right">Not Set</span></a></td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Frontend Footer Name</td>
                                <td style="word-break:break-all;" width="57%" bgcolor=""><a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-danger pull-right">Not Set</span></a></td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Frontend Footer URL</td>
                                <td style="word-break:break-all;" width="57%" bgcolor=""><a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-danger pull-right">Not Set</span></a></td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Frontend Header Logo</td>
                                <td style="word-break:break-all;" width="57%" bgcolor=""><a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-danger pull-right">Not Set</span></a></td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Admin Header Logo</td>
                                <td style="word-break:break-all;" width="57%" bgcolor=""><a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-danger pull-right">Not Set</span></a></td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Admin Favicon</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">
                                    data/adminImages/headerImages/1369722780_favicon.ico <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Frontend Favicon</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">
                                    data/adminImages/headerImages/1369722780_favicon.ico <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">2.10.60 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Watermark On/Off</td>
                                <td style="word-break:break-all;" width="57%" bgcolor=""><a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-danger pull-right">Not Set</span></a></td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Place the watermark inside or outside the image</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">true <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Setting the background color</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">F4F4F4 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Setting the background transparency</td>
                                <td style="word-break:break-all;" width="57%" bgcolor=""><a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-danger pull-right">Not Set</span></a></td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Setting the height of the watermark</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">30 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Setting the position of the watermark</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">bottom <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Icon image</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">yes <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Watermark Icon Files</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">heart.png,reg.png <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Set Max height percentage</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">80 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Setting the icons alignment</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">right <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Setting the icons vertical alignment</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">center <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Setting the icons offset X</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">9 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Setting the icons offset Y</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">4 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Setting the spacing between icons</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">9 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Setting the JPEG quality</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">80 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Show Text</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">yes <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Write Text</td>
                                <td style="word-break:break-all;" width="57%" bgcolor=""><a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-danger pull-right">Not Set</span></a></td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Setting the text alignment</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">left <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Setting the text offset X</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">9 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Setting the text offset Y</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">9 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Setting the spacing between texts</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">9 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Setting the font directory</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">
                                    data/frontImages/portfolio/watermark/fonts/ <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Setting the font</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">Designosaur-Regular.ttf <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Setting the font size</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">12 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Setting the font color</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">#4a4a4a <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Googlemaps pin Logo</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">
                                    data/adminImages/headerImages/1385527243_map-pin-green.png <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Maps API Key</td>
                                <td style="word-break:break-all;" width="57%" bgcolor=""><a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-danger pull-right">Not Set</span></a></td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;The initial Map Multi Point zoom level</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">2 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;The initial Map Single Point zoom level</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">15 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Default Latitude</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">51 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Default Longitude</td>
                                <td style="word-break:break-all;" width="57%" bgcolor=""><a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-danger pull-right">Not Set</span></a></td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Maximum number of places to mark</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">30 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Select displays style of map</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">ROADMAP <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Select Role</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">104 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;App id</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">00 <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="41%" bgcolor="">&nbsp;Login with Facebook</td>
                                <td style="word-break:break-all;" width="57%" bgcolor="">yes <a
                                        href="http://demo.script4realestate.com/Settings/global/update"><span
                                            class="label label-success pull-right"><i class="fa fa-eye"></i> View</span></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <h2 aria-controls="tab_item-6" class="resp-accordion" role="tab"><span class="resp-arrow"></span>
                        Environment Set</h2>

                    <div aria-labelledby="tab_item-6" class="resp-tab-content">
                        <div class="extend label">Environment Set</div>
                        <table class="table table-striped table-hover table-bordered">
                            <tbody>
                            <tr>
                                <td width="53%">&nbsp;PHP Version</td>
                                <td width="45%">5.4.22</td>
                            </tr>
                            <tr>
                                <td>&nbsp;MySQL Version</td>
                                <td>5.5.48-cll</td>
                            </tr>

                            <tr>
                                <td width="53%" bgcolor="">&nbsp;ioncube_license_properties Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;file_get_contents Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;file_put_contents Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;curl_exec Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;imagettftext Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;imagefilledrectangle Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;imagecopyresampled Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;getimagesize Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;imagealphablending Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;imagedestroy Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;imagepng Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;imagecreatetruecolor Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;imagecreatefromjpeg Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;imagecreatefrompng Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;imagecreatefromgif Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;imagefttext Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;imagesx Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;imagesy Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;imagecolorallocate Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;imageftbbox Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;imagefilledellipse Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;imageline Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;imagesetpixel Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td width="53%" bgcolor="">&nbsp;simplexml_load_file Function</td>
                                <td width="45%" bgcolor=""><i class="fa fa-check green" title="Installed"
                                                              alt="Installed"></i></td>
                            </tr>

                            <tr>
                                <td bgcolor="">&nbsp;gd</td>
                                <td bgcolor=""><i class="fa fa-check green" title="Installed" alt="Installed"></i></td>
                            </tr>

                            <tr>
                                <td bgcolor="">&nbsp;json</td>
                                <td bgcolor=""><i class="fa fa-check green" title="Installed" alt="Installed"></i></td>
                            </tr>

                            <tr>
                                <td bgcolor="">&nbsp;mbstring</td>
                                <td bgcolor=""><i class="fa fa-check green" title="Installed" alt="Installed"></i></td>
                            </tr>

                            <tr>
                                <td bgcolor="">&nbsp;simplexml</td>
                                <td bgcolor=""><i class="fa fa-check green" title="Installed" alt="Installed"></i></td>
                            </tr>

                            <tr>
                                <td bgcolor="">&nbsp;xml</td>
                                <td bgcolor=""><i class="fa fa-check green" title="Installed" alt="Installed"></i></td>
                            </tr>

                            <tr>
                                <td bgcolor="">&nbsp;xmlreader</td>
                                <td bgcolor=""><i class="fa fa-check green" title="Installed" alt="Installed"></i></td>
                            </tr>

                            <tr>
                                <td bgcolor="">&nbsp;mysql</td>
                                <td bgcolor=""><i class="fa fa-check green" title="Installed" alt="Installed"></i></td>
                            </tr>

                            <tr>
                                <td bgcolor="">&nbsp;mysqli</td>
                                <td bgcolor=""><i class="fa fa-check green" title="Installed" alt="Installed"></i></td>
                            </tr>

                            <tr>
                                <td bgcolor="">&nbsp;zip</td>
                                <td bgcolor=""><i class="fa fa-check green" title="Installed" alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td bgcolor="">&nbsp;application/configs/config.ini</td>
                                <td bgcolor=""><i class="fa fa-check green" title="Installed" alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td bgcolor="">&nbsp;data</td>
                                <td bgcolor=""><i class="fa fa-check green" title="Installed" alt="Installed"></i></td>
                            </tr>
                            <tr>
                                <td bgcolor="">&nbsp;data/frontImages</td>
                                <td bgcolor=""><i class="fa fa-check green" title="Installed" alt="Installed"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <script>
                $("#demoTab").easyResponsiveTabs({
                    type: 'vertical', //Types: default, vertical, accordion           
                    width: 'auto', //auto or any custom width
                    fit: true   // 100% fits in a container
                });
            </script>


            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading"><i class="fa fa-angle-down"></i> License Details</div>
                        <div class="panel-body">
                            <table class="table table-striped table-hover table-bordered">
                                <tbody>
                                <tr>
                                    <td width="40%"><i class="fa fa-bookmark"></i> Product</td>
                                    <td width="59%">Realestate CMS</td>
                                </tr>
                                <tr>
                                    <td height="20"><i class="fa fa-bar-chart-o"></i> Version</td>
                                    <td>2.10.60</td>
                                </tr>

                                <tr>
                                    <td><i class="fa fa-briefcase"></i> Vendor</td>
                                    <td>Eicra Soft Ltd</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-chain"></i> Vendor Domain</td>
                                    <td><a href="http://www.eicra.com/" target="_blank">eicra.com</a></td>
                                </tr>

                                <tr>
                                    <td><i class="fa fa-random"></i> License Status</td>
                                    <td><span class="label label-success">Valid</span></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-clock-o"></i> Expires</td>
                                    <td><span class="label label-success">Never</span></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-certificate"></i> Domain</td>
                                    <td>http://demo.script4realestate.com</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading"><i class="fa fa-angle-down"></i> Pending Approval</div>
                        <div class="panel-body">
                            <table class="table table-striped table-hover table-bordered">
                                <tbody>
                                <tr>
                                    <td width="52%"><i class="fa fa-user"></i> User's Profile</td>
                                    <td width="47%" align="center">
                                        <a href="http://demo.script4realestate.com/Members/index/list/approve/0"><span
                                                class="label label-danger">0</span></a></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-comment"></i> Feedback</td>
                                    <td align="center">
                                        <a href="http://demo.script4realestate.com/News/backendpro/list/group_id/2/approve/0"><span
                                                class="label label-danger">0</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-calendar-o"></i> News</td>
                                    <td align="center">
                                        <a href="http://demo.script4realestate.com/News/backendpro/list/group_id/1/approve/0"><span
                                                class="label label-danger">0</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-picture-o"></i> Picture</td>
                                    <td align="center">
                                        <a href="http://demo.script4realestate.com/Gallery/backendpro/list/approve/0"><span
                                                class="label label-danger">0</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-building-o"></i> Listings</td>
                                    <td align="center">
                                        <a href="http://demo.script4realestate.com/Property/backendpro/list/approve/0"><span
                                                class="label label-danger">0</span></a>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-angle-down"></i> Featured Modules</div>
                <div class="panel-body">
                    <table class="table table-striped table-hover table-bordered">

                        <tbody>
                        <tr>
                            <td width="35%"><i class="fa fa-folder-open"></i> Packages</td>
                            <td width="64%"><a href="http://demo.script4realestate.com/Members/form/values/form_id/9">Membership
                                    Package</a></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-calendar"></i> News</td>
                            <td><a href="http://demo.script4realestate.com/News/backendpro/list/group_id/1">Latest
                                    News</a></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-comment"></i> Feedback</td>
                            <td><a href="http://demo.script4realestate.com/News/backendpro/list/group_id/2">Posted
                                    Feedback</a></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-bullhorn"></i> Advertise</td>
                            <td><a href="http://demo.script4realestate.com/News/backendpro/list/group_id/5">Advertise
                                    Management</a></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-picture-o"></i> Photo Gallery</td>
                            <td><a href="http://demo.script4realestate.com/Gallery/backendpro/list/group_id/1">Image
                                    Management</a></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-video-camera"></i> Video Gallery</td>
                            <td><a href="http://demo.script4realestate.com/Gallery/backendpro/list/group_id/2">Audio/Video
                                    Gallery</a></td>
                        </tr>

                        <tr>
                            <td><i class="fa fa-building-o"></i> Property</td>
                            <td><a href="http://demo.script4realestate.com/Property/backendpro/list/group_id/1">Property
                                    Management</a></td>
                        </tr>
                        </tbody>
                    </table>
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
                Powered By : <a href="http://www.eicra.com/" target="_blank">Eicra Soft Ltd</a><br>
                Copyright © 2007-2016 All Rights Reserved
            </div>

            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4">
                <div class="version text-right">Version : 2.10.60</div>
            </div>
        </div>
    </div>
</footer>
<!--Footer End-->

<div class="ui-helper-hidden-accessible" aria-relevant="additions" aria-live="assertive" role="log">
    <div>English (USA)</div>
</div>
</body>
</html>