


<?php if($this->session->userdata('user_role')=='landowner' || $this->session->userdata('user_role')=='landbuyer' || $this->session->userdata('user_role')=='agent' || $this->session->userdata('user_role')=='advocate' || $this->session->userdata('user_role')=='surveyor'){ ?>

<!DOCTYPE html>
<html class="k-ff k-ff44" dir="ltr" lang="en">
<head>

    <meta http-equiv="content-type" content="text/css; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortcut icon" href="<?php base_url(); ?>assets/data/adminImages/headerImages/1369722780_favicon.ico"/>
    <meta name="keywords"
          content="Demo - Logistics, CMS, Content Management System, Open source CMS, Zend Framework, Zend Framework CMS, jQuery, 960gs, 960 Grid System, Layout Editor">
    <meta name="description" content="Demo - Logistics - A Commercial CMS powered by Eicrasoft Ltd, jQuery and 960grid">
    <title>Land|GIS</title>
    <script type="" src="<?php base_url(); ?>assets/user/js/jquery_003.js"></script>
    <script type="" src="<?php base_url(); ?>assets/user/js/jquery-ui.js"></script>
    <script type="" src="<?php base_url(); ?>assets/user/js/common.js"></script>
    <script type="" src="<?php base_url(); ?>assets/user/js/slicker.js"></script>
    <script type="text/javascript" src="<?php base_url(); ?>assets/user/js/dropdown.js"></script>
    <script type="" src="<?php base_url(); ?>assets/user/js/jquery.js"></script>
     <script type="" src="<?php base_url(); ?>assets/user/js/ddslick.js"></script>

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
          <link href="<?php base_url(); ?>assets/user/css/template.css" media="screen" rel="stylesheet"
          type="text/css">
          <link href="<?php base_url(); ?>assets/user/css/members.css" media="screen" rel="stylesheet"
          type="text/css">




    <script type="" src="<?php base_url(); ?>assets/user/js/kendo_002.js"></script>
    <script type="" src="<?php base_url(); ?>assets/user/js/kendo_003.js"></script>
    <script type="" src="<?php base_url(); ?>assets/user/js/kendo.js"></script>
    <script type="" src="<?php base_url(); ?>assets/user/js/kendo.js"></script>
    <script type="" src="<?php base_url(); ?>assets/user/js/uploader.js"></script>


    <link href="<?php base_url(); ?>assets/user/css/kendo.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="<?php base_url(); ?>assets/user/css/kendo_002.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="<?php base_url(); ?>assets/user/css/stylesheet.css" media="screen" rel="stylesheet"
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
        ];

        var dIndex = null;

        for (var i = 0; i < ddData.length; i++) {
            var dLink = ddData[i].link_value;
            var cLink = "/Dashboard";
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
       <!--  <div class="col-lg-3 col-md-12 visible-lg">
            <script type="text/javascript"
                    src="<?php base_url(); ?>assets/user/js/jqueryFileTree.js"></script>
            <link href="<?php base_url(); ?>assets/user/css/jqueryFileTree.css" media="screen"
                  rel="stylesheet" type="text/css">
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
                            <li class="directory collapsed"><a href="#" rel="root/Poll/">Poll</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Projects/">Projects</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Comment/">Comment</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Geo/">Geo</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Invoice/">Invoice</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Password/">Password</a></li>
                            <li class="directory collapsed"><a href="#" rel="root/Articles/">Articles</a></li>
                            <li class="directory expanded"><a href="#" rel="root/Administrator/">Administrator</a>
                                <ul class="jqueryFileTree">
                                    <li class="file ext_css selected"><a
                                            href="http://demo.logisticsscript.com/Administrator/index/index"
                                            rel="/Administrator/index/index">View The Dashboard</a></li>
                                </ul>
                            </li>
                            <li class="directory collapsed"><a href="#" rel="root/Members/">Members</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
        <!--Tree Menu End-->

        <!--Content Start-->
        <div class="col-lg-12 col-md-12"> <!-- col-lg-12 -->
            <script type="text/javascript"
                    src="<?php base_url(); ?>assets/user/js/easyResponsiveTabs.js"></script>
            <link href="<?php base_url(); ?>assets/user/css/easy-responsive-tabs.css" media="screen"
                  rel="stylesheet" type="text/css">
            <link href="<?php base_url(); ?>assets/user/css/admin.css" media="screen" rel="stylesheet"
                  type="text/css">
            <script type="text/javascript"
                    src="<?php base_url(); ?>assets/user/js/jquery_002.js"></script>
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
                                <img src="<?php base_url(); ?>assets/user/img/avatar.png"
                                     class="img-responsive">
                            </div>
                            <div class="col-md-10 col-xs-9">
                                <p>
                                   <strong> User Profile</strong><br>
                                   <strong class="font-bold"> User Name : <span style="color:#0088DD"><?php echo($this->session->userdata('first_name')." ".$this->session->userdata('surname')); ?></span></strong><br>
                                    <strong class="font-bold"> Email :<span style="color:#0088DD"> <?php echo($this->session->userdata('email_address')); ?></span></strong><br>
                                   <strong> Payment Gateway: <span style="color:#0088DD">pesapal.com</span></strong><br>
                                   <strong> Last Login : <span style="color:#0088DD"><?php echo(date("D, M d Y H:i:s A"))?></span></strong><br>
                                </p>
                                <a href="<?php echo(base_url()); ?>user_login/logout"
                                   class="btn btn-success btn-sm no-radius"><i class="fa fa-unlock-alt"></i> Log Out</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xs-6">
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                            </div>

                            <div class="col-md-6 col-xs-6">


                            </div>

                            <div class="col-md-6 col-xs-6">
                                <figure><i class="fa fa-ticket invoice"></i><a
                                        href="">Invoices<br><span
                                        class="count">0</span></a></figure>
                            </div>

                            <div class="col-md-6 col-xs-6">
                                <figure>
                                    <i class="fa fa-calendar date"></i>
                                    <?php echo(date("M"))?><br>
                                    <span class="count"><?php echo(date("d"))?></span>
                                    <?php echo(date("Y "))?>
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
                        Land Searches
                    </li>
                    <li role="tab" aria-controls="tab_item-3" class="resp-tab-item"><i class="fa fa-user"></i> Land Maps
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
                                <a href="">
                                    <div class="circle circle-green">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    Manage Applications </a>
                            </div>

                            <div class="tools-icon">
                                <a href="">
                                    <div class="circle circle-red">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <i class="fa fa-search action"></i>
                                    User Searches </a>
                            </div>

                            <div class="tools-icon">
                                <a href="">
                                    <div class="circle circle-purple">
                                        <i class="fa fa-key"></i>
                                    </div>
                                    Change Password </a>
                            </div>

                            <div class="tools-icon">
                                <a href="">
                                    <div class="circle circle-orange">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <i class="fa fa-info action"></i>
                                    View Profile </a>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Content Management</legend>
                            <div class="tools-icon">
                                <a href="">
                                    <div class="circle circle-green">
                                        <i class="fa fa-file-text-o"></i>
                                    </div>
                                    <i class="fa fa-cog action"></i>
                                    File Management </a>
                            </div>

                            <div class="tools-icon">
                                <a href="">
                                    <div class="circle circle-black">
                                        <i class="fa fa-file-text"></i>
                                    </div>
                                    <i class="fa fa-link action"></i>
                                    Poll Management </a>
                            </div>

                        </fieldset>

                        <fieldset>
                            <legend>Modules</legend>
                            <div class="tools-icon">
                                <a href="">
                                    <div class="circle circle-light-green">
                                        <i class="fa fa-money"></i>
                                    </div>
                                    Billing </a>
                            </div>

                            <div class="tools-icon">
                                <a href="">
                                    <div class="circle circle-yellow">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    Land Searches</a>
                            </div>

                           <!-- <div class="tools-icon">
                                <a href="">
                                    <div class="circle circle-pink">
                                        <i class="fa fa-buy"></i>
                                    </div>
                                    Buy Land Maps </a>
                            </div>-->

                            <div class="tools-icon">
                                <a href="">
                                    <div class="circle circle-deep-purple">
                                        <i class="fa fa-group"></i>
                                    </div>
                                    <i class="fa fa-comment action"></i>
                                    Buy Land Map(s) </a>
                            </div>


                            <div class="tools-icon">
                                <a href="http://demo.logisticsscript.com/Geo/country/list">
                                    <div class="circle circle-green">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    GIS </a>
                            </div>

                        </fieldset>

                        <fieldset>
                            <legend>Setting &amp; Others</legend>
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
                        Land Searches</h2>

                    <div aria-labelledby="tab_item-2" class="resp-tab-content">
                        <div class="extend label">Latest Searches Status</div>
                        <div class="chart">
                            <div>
                                <div id="grid-comment"></div>
                            </div>
                        </div>
                    </div>

                    <h2 aria-controls="tab_item-3" class="resp-accordion" role="tab"><span class="resp-arrow"></span>
                        Land Maps</h2>

                    <div aria-labelledby="tab_item-3" class="resp-tab-content">
                        <div class="extend label">Latest Maps Status</div>
                        <div class="chart">
                            <div>
                                <div id="grid-user"></div>
                            </div>
                        </div>
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


           </div>

    </div>
    <!--Content End-->
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
<style type="text/css">
.go-top a{
    font-size:18px;
    background:#67AE34;
    width:45px;
    line-height:45px;
    display:block;
    z-index:100;
    transition:all 0.9s;
    position:fixed;
    bottom:10px;
    right:10px;
    color:#FFF;
    outline:0;
    display:inline-block;
    text-align:center;
    border-radius:3px;
    -moz-border -radius:3px;
    -webkit-border-radius:3px;
}

.go-top a:hover{
    transition:all 0.9s;
    color:#FFF;
    background-color:#F0AD4E;
}
    
</style>
 

<div class="go-top"><a href="#top" id="scroll-top"><i class="glyphicon glyphicon-chevron-up"></i></a></div>
<script type="text/javascript"
        src="<?php base_url(); ?>assets/user/js/scroll2.js"></script>

<div class="ui-helper-hidden-accessible" aria-relevant="additions" aria-live="assertive" role="log"></div>
</body>
</html>
<?php } ?>