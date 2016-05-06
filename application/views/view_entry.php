


<?php if($this->session->userdata('user_role')=='landowner' || $this->session->userdata('user_role')=='landbuyer' || $this->session->userdata('user_role')=='agent' || $this->session->userdata('user_role')=='advocate' || $this->session->userdata('user_role')=='surveyor'){ ?>

<!DOCTYPE html>
<html class="k-ff k-ff44" dir="ltr" lang="en">
<head>

    <meta http-equiv="content-type" content="text/css; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortcut icon" href="<?php echo(base_url()); ?>assets/data/adminImages/headerImages/1369722780_favicon.ico"/>
    <meta name="keywords"
          content="Demo - Logistics, CMS, Content Management System, Open source CMS, Zend Framework, Zend Framework CMS, jQuery, 960gs, 960 Grid System, Layout Editor">
    <meta name="description" content="Demo - Logistics - A Commercial CMS powered by Eicrasoft Ltd, jQuery and 960grid">
    <title>Land|GIS</title>
    <script type="" src="<?php echo(base_url()); ?>assets/user/js/jquery_003.js"></script>
    <script type="" src="<?php echo(base_url()); ?>assets/user/js/jquery-ui.js"></script>
    <script type="" src="<?php echo(base_url()); ?>assets/user/js/common.js"></script>
    <script type="" src="<?php echo(base_url()); ?>assets/user/js/slicker.js"></script>
    <script type="text/javascript" src="<?php echo(base_url()); ?>assets/user/js/dropdown.js"></script>
    <script type="" src="<?php echo(base_url()); ?>assets/user/js/jquery.js"></script>
     <script type="" src="<?php echo(base_url()); ?>assets/user/js/ddslick.js"></script>

    <link href="<?php echo(base_url()); ?>assets/user/css/bootstrap.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="<?php echo(base_url()); ?>assets/user/css/jquery-ui.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="<?php echo(base_url()); ?>assets/user/css/mega-menu.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="<?php echo(base_url()); ?>assets/user/css/mega-menu-black.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="<?php echo(base_url()); ?>assets/user/css/font-awesome.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="<?php echo(base_url()); ?>assets/user/css/floatingbar.css" media="screen" rel="stylesheet"
          type="text/css">
          <link href="<?php echo(base_url()); ?>assets/user/css/template.css" media="screen" rel="stylesheet"
          type="text/css">
          <link href="<?php echo(base_url()); ?>assets/user/css/members.css" media="screen" rel="stylesheet"
          type="text/css">




    <script type="" src="<?php echo(base_url()); ?>assets/user/js/kendo_002.js"></script>
    <script type="" src="<?php echo(base_url()); ?>assets/user/js/kendo_003.js"></script>
    <script type="" src="<?php echo(base_url()); ?>assets/user/js/kendo.js"></script>
    <script type="" src="<?php echo(base_url()); ?>assets/user/js/kendo.js"></script>
    <script type="" src="<?php echo(base_url()); ?>assets/user/js/uploader.js"></script>


     <!-- Datatables-->
      <script src="<?php echo(base_url()); ?>assets/user/datatable/jquery.js"></script>
      <script src="<?php echo(base_url()); ?>assets/user/datatable/dataTables_002.js"></script>
      <script src="<?php echo(base_url()); ?>assets/user/datatable/dataTables_003.js"></script>
      <script src="<?php echo(base_url()); ?>assets/user/datatable/buttons.js"></script>
      <script src="<?php echo(base_url()); ?>assets/user/datatable/jszip.js"></script>
      <script src="<?php echo(base_url()); ?>assets/user/datatable/pdfmake.js"></script>
      <script src="<?php echo(base_url()); ?>assets/user/datatable/vfs_fonts.js"></script>
      <script src="<?php echo(base_url()); ?>assets/user/datatable/buttons_002.js"></script>
      <script src="<?php echo(base_url()); ?>assets/user/datatable/buttons_003.js"></script>
      <script src="<?php echo(base_url()); ?>assets/user/datatable/dataTables_005.js"></script>
      <script src="<?php echo(base_url()); ?>assets/user/datatable/dataTables.js"></script>
      <script src="<?php echo(base_url()); ?>assets/user/datatable/dataTables_006.js"></script>
      <script src="<?php echo(base_url()); ?>assets/user/datatable/responsive.js"></script>
      <script src="<?php echo(base_url()); ?>assets/user/datatable/dataTables_004.js"></script>

      <!-- Datatable init js -->
      <script src="<?php echo(base_url()); ?>assets/user/datatable/datatables.js"></script>

       <script type="text/javascript">
          $(document).ready(function() {
              $('#datatable').dataTable();
              $('#datatable-keytable').DataTable( { keys: true } );
              $('#datatable-responsive').DataTable();
              $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
              var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
          } );
          TableManageButtons.init();

      </script>
       <link rel="stylesheet" type="text/css" href="<?php echo(base_url()); ?>assets/user/datatable/css/jquery.dataTables.css">
          


    <link href="<?php echo(base_url()); ?>assets/user/css/kendo.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="<?php echo(base_url()); ?>assets/user/css/kendo_002.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="<?php echo(base_url()); ?>assets/user/css/stylesheet.css" media="screen" rel="stylesheet"
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
            <a href="<?php echo(base_url()); ?>user_dashboard"><i class="fa fa-home"></i></a>
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
                    <li><a href="<?php echo(base_url()); ?>gis_view" class="" target="_blank"><i class="fa fa-laptop"></i>
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
        

        <!--Content Start-->
        <div class="col-lg-12 col-md-12"> <!-- col-lg-12 -->
            <script type="text/javascript"
                    src="<?php echo(base_url()); ?>assets/user/js/easyResponsiveTabs.js"></script>
            <link href="<?php echo(base_url()); ?>assets/user/css/easy-responsive-tabs.css" media="screen"
                  rel="stylesheet" type="text/css">
            <link href="<?php echo(base_url()); ?>assets/user/css/admin.css" media="screen" rel="stylesheet"
                  type="text/css">
            <script type="text/javascript"
                    src="<?php echo(base_url()); ?>assets/user/js/jquery_002.js"></script>
          


            <div class="welcome-panel">
                <h2>Dashboard</h2>

                <div class="row">
                    <div class="col-md-6 col-xs-6">
                        <div class="row">
                            <div class="col-md-2 col-xs-3">
                                <img src="<?php echo(base_url()); ?>assets/user/img/avatar.png"
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
               <!--  <?php print_r($applications);?>-->
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
    <script type="text/javascript" language="javascript" class="init">


$(document).ready(function() {
    $('#example').dataTable( {
        columnDefs: [ {
            targets: [ 0 ],
            orderData: [ 0, 1 ]
        }, {
            targets: [ 1 ],
            orderData: [ 1, 0 ]
        }, {
            targets: [ 4 ],
            orderData: [ 4, 0 ]
        } ]
    } );
} );

    </script>

        

          <div class="wrapper">
    
<?php foreach ($query->result() as $q): ?>
              <!-- Page-Title -->
<div class="row">
    <div class="col-sm-6">
        <h4 class="page-title">Application History</h4>
    </div>
    <div class="col-sm-6 right">
        <div class="btn-group">
            <button style="padding-top: 6.5px;
padding-bottom: 6.5px;" type="button" class="btn btn-primary dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-print"></i> Downloads <span class="caret"></span> </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            </ul>
        </div>
        <a href="<?php echo (base_url()); ?>user_search/edit/<?=$q->user_search_id?>/<?=$q->title_number?>" class="btn btn-primary dropdown-toggle waves-effect"><i class="fa fa-edit"></i> Edit </a>
    </div>
</div>
<!-- Page-Title -->
<!--<?php print_r($query->result());?>-->
<div class="row">

    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                                    <h4 class="text-dark  header-title">Official Land Search- Leasehold/Freehold</h4>
                                    <p class="text-primary">
                    Ref: Draft-<?=$q->date;?>  </p>
                <p class="text-muted font-15"><strong>Date of Submission: <?=$q->date;?> <br>
                 Duration:<?php $time=getTimeDifference($q->date);
                                       echo "".$time."";



                                            ?> 




                                        
                        <br>
                                            Approval: Draft                </p></strong>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
    <table class="table table-card-box m-b-0">
        <tbody>
                                            <tr>
                        <td><strong>Land Title Number</strong></td>
                        <td><?=$q->title_number;?></td>
                    </tr>
                                                    <tr>
                        <td><strong>Land Parcel Number</strong></td>
                        <td><?=$q->parcel_number;?></td>
                    </tr>
                                                    <tr>
                        <td><strong>Purpose of the Search</strong></td>
                        <td><?=$q->purpose;?></td>
                    </tr>
                        </tbody>
    </table>
</div>
            </div>
        </div>
    </div><!--Panel-dark-->


    <!--Display a sidebar with information from the site config-->
    
      <div class="col-lg-4">
            <!--<div class="card-box widget-user">
                <h4 class="m-t-0 m-b-20 header-title"><b>Messages</b></h4>
                <div class="chat-conversation">
                    <ul tabindex="5000" style="overflow: hidden;" class="conversation-list nicescroll">
                                                <table class="table mb0">
                            <tbody>
                            <tr>
                                <td>
                                    <i class="bold-label">No Messages</i>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        
                    </ul>
                    <div class="row">
                        <form action="/index.php/application/view/id/54559" method="post" autocomplete="off" data-ajax="false">
                            <div class="col-sm-9 chat-inputbar">
                                <input name="txtmessage" class="form-control chat-input" placeholder="Enter your text" type="text">
                            </div>
                            <div class="col-sm-3 chat-send">
                                <button type="submit" class="btn btn-md btn-primary btn-block waves-effect waves-light">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>-->

                            <div class="card-box widget-user">
                    <div>
                        <div>
                            <h4 class="m-t-0 m-b-5">Billing Summary</h4>
                            <table class="table  table-card-box">
                                <tbody>
                                <tr>
                                    <td style="width:30%;"><strong>Bill Ref:</strong></td>
                                    <td>463                                        /42501/53117</td>
                                </tr>
                                <tr>
                                    <td style="width:30%;"><strong>Status:</strong></td>
                                    <td>Pending</td>
                                </tr>
                                <tr>
                                    <td style="width:30%;"><strong>Service:</strong></td>
                                    <td>Official Land Search- Leasehold/Freehold</td>
                                </tr>
                                <tr>
                                    <td style="width:30%;"><strong>Total:</strong></td>
                                    <td><strong>500</strong></td>
                                </tr>
                                </tbody>
                            </table>

                            <a href="<?php echo (base_url()); ?>print_invoice/index/<?=$q->user_search_id?>/<?=$q->title_number?>" class="btn btn-primary waves-effect w-md waves-light"><i class="fa fa-print"></i>
                                Print Invoice</a>

                                                            <a href="" class="btn btn-success waves-effect w-md waves-light"><i class="fa fa-credit-card"></i>
                                    Make Payment</a>
                                                        </div>
                    </div>
                </div>
                
           
        </div>
    <?php endforeach; ?>
</div><!-- /Content panel-->

               
              

    
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
        src="<?php echo(base_url()); ?>assets/user/js/scroll2.js"></script>

<div class="ui-helper-hidden-accessible" aria-relevant="additions" aria-live="assertive" role="log"></div>
</body>
</html>
<?php } ?>