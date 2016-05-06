<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="shortcut icon"
          href="<?php base_url(); ?>assets/data/adminImages/headerImages/1369722780_favicon.ico"/>
<!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600,700' rel='stylesheet'
          type='text/css'>

    <meta name="keywords"
          content="Demo - Realestate CMS, CMS, Content Management System, Open source CMS, Zend Framework, Zend Framework CMS, jQuery, 960gs, 960 Grid System, Layout Editor">
    <meta name="description"
          content="LandSerachGIS - A Commercial Land GIS powered by tony, jQuery and 960grid">
    

    <title>Land|GIS</title>
    
    <script type=""
            src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/vendor/scripts/jquery/jquery-1-9-1/jquery.js"></script>
           <!-- <script type=""
            src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/vendor/scripts/jquery/jquery-1-9-1/jquery2.js"></script>-->
            <script type=""
            src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/vendor/scripts/jquery/jquery-1-9-1/jquery.validate.js"></script>
<!--<script type=""
            src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/vendor/scripts/jquery/jquery-1-9-1/jquery-2.1.0.min.js"></script>

            <script type=""
            src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/vendor/scripts/jquery/jquery-1-9-1/jquery.validate.min.js"></script>-->
    <script type="" src="assets/application/layouts/scripts/realestate_default/vendor/bootstrap/js/dropdown.js"></script>

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
    <script type=""
            src="<?php base_url(); ?>assets/vendor/scripts/kendo/js/cultures/kendo.culture.en.min.js"></script>
     <script type="" src="<?php base_url(); ?>assets/vendor/scripts/kendo/js/cultures/kendo.culture.en-US.min.js"></script>
     <script type="" src="<?php base_url(); ?>assets/application/modules/Portfolio/js/uploader.js"></script>

    <link href="<?php base_url(); ?>assets/vendor/scripts/kendo/src/styles/kendo.common.css" media="screen"
          rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/vendor/scripts/kendo/src/styles/kendo.metro.css" media="screen"
          rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/css/pagination.css"
          media="screen" rel="stylesheet"
          type="text/css">       
    <link href="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/css/menu.css" media="screen"
      rel="stylesheet"
      type="text/css">



    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   <script>
$(document).ready(function(){
$( document ).unbind('tooltip');
$( document ).tooltip({
    items: "input[title],textarea[title],div[title],td[title],span[title],img[title],a[title],li[title]",
    //show: { effect: "slide" },
    content: function() {
        var element = $( this );
        if(element.attr('link') && !element.hasClass('noTitle'))
        {
             return (element.attr('title')) ? "<img  src='"+element.attr('link')+"' width='250' /><br />"+element.attr('title') : "<img  src='"+element.attr('link')+"' width='250' />";
        }
        else
        {
            if(element.attr('title') && !element.hasClass('noTitle'))
            {
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
        logOut('a.topbar_logout_btn', '<img src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/images/loader/ajax-loader-email.gif" />', '', 'Sign in');
    });
</script>


<nav class="navbar navbar-default navbar-fixed-top ecitizen" id="subnav">
    <header>
        <div id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-5 user-links">
                        Welcome to LandGIS | <a href="<?php echo(base_url()); ?>user_login">Login</a> | <a
                            href="<?php base_url(); ?>">Register</a></div>

                    <div class="col-xs-7 top-links">
                        <a href="<?php echo(base_url()); ?>user_login">My Account</a> |
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
                    <span style="margin-right:20px"class="navbar-form"><a href="<?php echo (base_url()); ?>user_login" class="ts-bt bt-login"><i class="fa fa-sign-in"></i>LOGIN</a></span>
    
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
<!-- Header End -->

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
        <h1>Find Your Way Find Your Dream Land.</h1>
    </div>
</div>

<!-- Banner End-->

<!-- Body Start-->
<div class="container">

    <div class="content-container">

        <!-- Inner Layout End -->

        <!-- Content Start-->
        <div id="">
            <style>
                .mod .thumb {
                    border: 0;
                    background-color: transparent;
                }
            </style>
            <script type="text/javascript">
                var settingObj = {
                    form_action: {
                        form_id: 'MemberForm',
                        hasTinyMCE: false,
                        go_message_id: 'actionMessage',
                        common_msg_field_id: 'actionMessage',
                        dialog_container_id: 'dialog_container',
                        dialog_progressbar_id: 'progressbar'
                    },
                    calendar: {
                        calendar_include_time: true,
                        calendar_img_link: 'application/layouts/scripts/realestate_default/images/mod_img/calendar-small.png',
                        monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                        buttonText: 'calendar',
                        dateFormat: 'yy-mm-dd',
                        dateTimeFormat: "yyyy-MM-dd hh:mm:ss tt",
                        culture: "en-US"
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
                        commonGoMessage(settingObj);
                    });


                    $('a.add_user_btn').click(function () {
                        var formData = commonGetFormData(settingObj.form_action.form_id, settingObj.form_action.hasTinyMCE);
                        if (!formData.role_id) {
                            formData.role_id = '';
                        }
                        $.ajax({
                            url: "",
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
                                    commonRefreshCaptcha(json_arr, 'span');

                                    if (json_arr.status == 'ok') {
                                        if (json_arr.package_msg == 'ok') {
                                            var package_name = json_arr.package_info[0].field_value;
                                            var package_price = parseFloat(json_arr.package_info[1].field_value);
                                            if (package_price != 0) {
                                                if (json_arr.gateway_info) {
                                                    gateWayList(json_arr.gateway_info, json_arr.member_id);
                                                }
                                                //document.location.href = "https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=demo@script4realestate.com&item_name="+package_name+"&item_number=1&amount="+package_price+"&no_shipping=0&no_note=1&currency_code=USD&bn=PP%2dBuyNowBF&charset=UTF%2d8 target=_blank";
                                            }

                                            commonCloseLoaderDialog(settingObj);
                                        }
                                        else if (json_arr.package_msg == 'invoice') {
                                            document.location.href = "http://demo.script4realestate.com/Create-Invoice";
                                        }
                                        else {
                                            commonCloseLoaderDialog(settingObj);
                                        }
                                        $('#actionMessage').html(succMsgDesign(json_arr.msg));
                                        commonResetFormFields(settingObj);
                                        commonGoMessage(settingObj);
                                    }
                                    else if (json_arr.status == 'errV') {
                                        commonCloseLoaderDialog(settingObj);
                                        $('#actionMessage').html(errMsgDesign("There are some error to perform this action. Please See below --"));

                                        for (var i = 0; i < json_arr.msg.length; i++) {
                                            focusFirst(json_arr.msg[i].key, json_arr.msg[i].value, i);
                                            commonAddFormError(json_arr.msg[i].key, json_arr.msg[i].value);
                                        }
                                    }
                                    else if (json_arr.status == 'errP') {
                                        commonCloseLoaderDialog(settingObj);
                                        $('#actionMessage').html(errMsgDesign("There are some error to perform this action. Please See below --"));
                                        commonAddFormError('confirmPassword', json_arr.msg);
                                    }
                                    else {
                                        commonCloseLoaderDialog(settingObj);
                                        $('#actionMessage').html(errMsgDesign(json_arr.msg));
                                        commonGoMessage(settingObj);
                                    }
                                }
                                catch (error) {
                                    commonCloseLoaderDialog(settingObj);
                                    var error_arr = [error, response];
                                    var msg = commonErrMsgException(error_arr);
                                    $('#actionMessage').html(errMsgDesign(msg));
                                    commonGoMessage(settingObj);
                                }
                            },
                            error: function (xhr, status, error) {
                                commonCloseLoaderDialog(settingObj);
                                var msg = "Error! " + xhr.status + " " + error;
                                $('#actionMessage').html(errMsgDesign(msg));
                            }
                        });
                    });

                });

                
                function paymentAction() {
                    $('#full_payment').change(function () {
                        var self = this;
                        if ($(self).val() != null && $(self).val() != '') {
                            var data = $(self).val();
                            var data_arr = data.split('_');
                            $.ajax({
                                url: "/Members/frontend/frontpay",
                                type: 'POST',
                                data: {payment_id: data_arr[0], member_id: data_arr[1]},
                                beforeSend: function () {
                                    $('#full_payment_link').html('<img src="application/layouts/scripts/realestate_default/images/loader/ajax-loader-email.gif" height="16"  border="0" />');
                                },
                                success: function (response) {
                                    //alert(response);
                                    var json_arr = eval("(" + response + ")");
                                    if (json_arr.status == 'ok') {
                                        var payment_link = json_arr.payment_data;
                                        var payment_logo = json_arr.payment_info.logo;
                                        var input_type = json_arr.input_type;
                                        //alert(payment_logo);
                                        var html_data = (input_type == 'link') ? '<a href="' + payment_link + '"><img src="data/frontImages/gateway/gateway_logo/' + payment_logo + '" width="140" border="0" /></a>' : payment_link;
                                        $('#full_payment_link').html(html_data);
                                    }
                                    else {
                                        commonMsgDialog(settingObj, json_arr.msg);
                                        $('#full_payment_link').html('');
                                    }
                                },
                                error: function (xhr, status, error) {
                                    commonCloseLoaderDialog(settingObj);
                                    $('#full_payment_link').html('');
                                    var msg = "Error! " + xhr.status + " " + error;
                                    commonMsgDialog(settingObj, msg);
                                }
                            });
                        }
                        else {
                            $('#full_payment_link').html('');
                        }

                    });
                }

                function calender(id) {
                    $("#" + id).datepicker({
                        showOn: 'button',
                        buttonImage: 'application/layouts/scripts/realestate_default/images/mod_img/calendar-small.png',
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


                function onComplete(e) {

                }

                function onCancel(e) {

                }

                function onProgress(e) {

                }

                /***********************************************************************UPLOAD FUNCTIONS END********************************************************/

            </script>

          
           <script>
           $(function() {         
            $("#json-one").change(function() {
            
                var $dropdown = $(this);
            
                $.getJSON("http://localhost/landgis/jsondata/data.json", function(data) {
                    var key = $dropdown.val();
                    var vals = [];
                                        
                    switch(key) {
                        case '1':
                            vals = data.baringocounty.split(",");
                            break;
                        case '2':
                            vals = data.bometcounty.split(",");
                            break;
                        case '3':
                            vals = data.bungomacounty.split(",");
                            break;
                            case '4':
                            vals = data.busiacounty.split(",");
                            break;
                            case '5':
                            vals = data.elgeyomarakwetcounty.split(",");
                            break;
                            case '6':
                            vals = data.embucounty.split(",");
                            break;
                            case '7':
                            vals = data.garissacounty.split(",");
                            break;
                            case '8':
                            vals = data.homabaycounty.split(",");
                            break;
                            case '9':
                            vals = data.isiolocounty.split(",");
                            break;
                            case '10':
                            vals = data.kajiadocounty.split(",");
                            break;
                            case '11':
                            vals = data.kakamegacounty.split(",");
                            break;
                            case '12':
                            vals = data.kerichocounty.split(",");
                            break;
                            case '13':
                            vals = data.kiambucounty.split(",");
                            break;
                            case '14':
                            vals = data.kilificounty.split(",");
                            break;
                            case '15':
                            vals = data.kirinyagacounty.split(",");
                            break;
                            case '16':
                            vals = data.kisiicounty.split(",");
                            break;
                            case '17':
                            vals = data.kisumucounty.split(",");
                            break;
                            case '18':
                            vals = data.kituicounty.split(",");
                            break;
                            case '19':
                            vals = data.kwalecounty.split(",");
                            break;
                            case '20':
                            vals = data.laikipiacounty.split(",");
                            break;
                            case '21':
                            vals = data.lamucounty.split(",");
                            break;
                            case '22':
                            vals = data.machakoscounty.split(",");
                            break;
                            case '23':
                            vals = data.makuenicounty.split(",");
                            break;
                            case '24':
                            vals = data.manderacounty.split(",");
                            break;
                            case '25':
                            vals = data.marsabitcounty.split(",");
                            break;
                            case '26':
                            vals = data.migoricounty.split(",");
                            break;
                            case '27':
                            vals = data.merucounty.split(",");
                            break;
                            case '28':
                            vals = data.mombasacounty.split(",");
                            break;
                            case '29':
                            vals = data.murangacounty.split(",");
                            break;
                            case '30':
                            vals = data.nairobicounty.split(",");
                            break;
                            case '31':
                            vals = data.nakurucounty.split(",");
                            break;
                            case '32':
                            vals = data.nandicounty.split(",");
                            break;
                            case '33':
                            vals = data.narokcounty.split(",");
                            break;
                            case '34':
                            vals = data.nyamiracounty.split(",");
                            break;
                            case '35':
                            vals = data.nyandaruacounty.split(",");
                            break;
                            case '36':
                            vals = data.nyericounty.split(",");
                            break;
                            case '37':
                            vals = data.samburucounty.split(",");
                            break;
                            case '38':
                            vals = data.siayacounty.split(",");
                            break;
                            case '39':
                            vals = data.taitatavetacounty.split(",");
                            break;
                            case '40':
                            vals = data.tanarivercounty.split(",");
                            break;
                            case '41':
                            vals = data.tharakanithicounty.split(",");
                            break;
                            case '42':
                            vals = data.transnzoiacounty.split(",");
                            break;
                            case '43':
                            vals = data.turkanacounty.split(",");
                            break;
                            case '44':
                            vals = data.uasingishucounty.split(",");
                            break;
                            case '45':
                            vals = data.vihigacounty.split(",");
                            break;
                            case '46':
                            vals = data.wajircounty.split(",");
                            break;
                            case '47':
                            vals = data.westpokotcounty.split(",");
                            break;
                            
                        case '48':
                            vals = ['Please choose from above'];
                    }
                    
                    var $jsontwo = $("#json-two");
                    $jsontwo.empty();
                    $.each(vals, function(index, value) {
                        $jsontwo.append("<option>" + value + "</option>");
                    });
            
                });
            });

        });
    
</script>

<script>
    $.validator.setDefaults({
        submitHandler: function() {
            alert("submitted!");
        }
    });
    

    $(document).ready(function() {
        // validate the comment form when it is submitted

        // validate signup form on keyup and submit
        $("#signup").validate({
            rules: {
                userrole:"required",
                gender:"required",
                firstname: "required",
                 surname: "required",
                lastname: "required",
                 email: {
                    required: true,
                    email: true
                },
                 password: {
                    required: true,
                    rangelength: [8,16]
                },
                confirm_password: {
                    
                    equalTo: "#password"
                },
                 mobileno:{
                    required: true,
                    digits: true,
                    maxlength: 10

                 },
                 nationalid: {

                    required: true,
                    digits: true,
                    maxlength: 8
                },
                 county: "required",
                 ward: "required",
                 url: "required"
                    
            },
            messages: {
                userrole: "Please select user role",
                gender: "please select your gender",
                firstname: "Please enter your firstname",
                surname: "please enter your surname",
                lastname: "Please enter your lastname",
                 email:{
                      required: "Please enter an email address",
                      email: "Please enter a valid email address"
                        
               },
                  password: {
                    required: "Please provide a password",
                    rangelength: "Your password must be between 8 and 16 characters long"
                },
                confirm_password: {
                    equalTo: "Please enter the same password as above"
                },


                 mobileno: {
                    required: "Please provide your mobile number",
                    digits: "You must put only digits ",
                    maxlength: "Your mobile number must be at most 10 characters long"
                },
                
                 nationalid: {

                    required: "please provide your national id number",
                    digits: "You must put only digits",
                    maxlength: "Your id number must be at most 8 characters long"
                },
                 county: "Please select your county",
                 ward: "Please select your ward",
                  url: "Please provide a valid web address"

            }
        });

        // propose username by combining first- and lastname
        // $("#username").focus(function() {
        //     var firstname = $("#firstname").val();
        //     var lastname = $("#lastname").val();
        //     if (firstname && lastname && !this.value) {
        //         this.value = firstname + "." + lastname;
        //     }
        // });

    });
    </script>

    <style>
   
   #signup span.error {
font-size: 0.8em;
color: #F00;
font-weight: bold;
display: block;
margin-left: 215px;
}
#signup input.error, #signup select.error {
background: #FFA9B8;
border: 1px solid red;
}
    
    </style>

    


            <div class="mod">
                <div class="registration-icon">
                    <h1> User Sign Up</h1>
                </div>

                <div class="clear"></div>

                <div id="actionMessage">&nbsp;</div>

                <div id="memberFormDiv">

                    <form role="form" action="<?php echo(base_url()); ?>user_register/user_create_account" method="post" id="MemberForm" id="signupForm">
                    <fieldset>
                    <fieldset>
                        <legend >Select User Role:&nbsp;<span class="members-star star_class">*</span></legend>
                        <div id="actionMessage">&nbsp;</div>

                        <div class="type" >
                            <label><input required="" type="radio" name="userrole" id="userrole" value="surveyor" size="1" 
                                          class="ui-widget-content ui-corner-all" 
                                          title="Name of User Role">Surveyor</label><br><label><input required="" type="radio"
                                                                                                      name="userrole"
                                                                                                      id="userrole"
                                                                                                      value="agent"
                                                                                                      size="1"
                                                                                                      class="ui-widget-content ui-corner-all"
                                                                                                      
                                                                                                      title="Name of User Role">Agent</label><br><label><input
                                   required="" type="radio" name="userrole" id="userrole" value="landowner" size="1"
                                    class="ui-widget-content ui-corner-all"
                                    title="Name of User Role">LandOwner</label ><br><label><input required="" type="radio"
                                                                                                 name="userrole"
                                                                                                 id="userrole"
                                                                                                 value="landbuyer" size="1"
                                                                                                 class="ui-widget-content ui-corner-all"
                                                                                                 title="Name of User Role">LandBuyer
                            </label><br><label><input required=""
                                    type="radio" name="userrole" id="userrole" value="advocate" size="1"
                                    class="ui-widget-content ui-corner-all" title="Name of User Role">Advocate</label>
                        </div>
                        <span class="input-errors" for="userrole"></span>

                        
                        <div class="clear">&nbsp;</div>
                    </fieldset>





                        <fieldset>
                            <legend>Member Information</legend>

                            <div>

                                <div class="form-label-container">
                                    <div class="label_class label_class" style="">
                                        Gender:&nbsp;
                                    </div>
                                </div>

                                <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<select required="" name="gender" id="gender" title="Enter Gender" size="1"  class="form-control" >
<option  selected value="4">Please Select</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
    


       </select></span><br/>
                               <span class="input-errors" for="gender"></span>
                                        
                                    </div>
                                    <div class="form-field-info"></div>
                                </div>

                                <div class="form-label-container">
                                    <div class="label_class label_class" style="">
                                        Enter First Name:<span class="star_class star_class" style="">*</span>&nbsp;
                                    </div>
                                </div>

                                <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<input required="" type="text" name="firstname" id="firstname" value="" size="35" title="Type Your First Name"class="form-control" ></span><br/>   <span class="input-errors" for="firstname"></span>
                                        
                                    </div>
                                    <div class="form-field-info"></div>
                                </div>

                                <div class="form-label-container">
                                    <div class="label_class label_class" style="">
                                        Enter Surname:<span class="star_class star_class" style="">*</span>&nbsp;
                                    </div>
                                </div>

                                <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<input required="" type="text" name="surname" id="surname" value="" size="35" title="Enter Your Surname" class="form-control" ></span><br/>
                              <span class="input-errors" for="surname"></span>           
                                    </div>
                                    <div class="form-field-info"></div>
                                </div>

                                <div class="form-label-container">
                                    <div class="label_class label_class" style="">
                                        Enter Last Name:<span class="star_class star_class" style="">*</span>&nbsp;
                                    </div>
                                </div>

                                <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<input required="" type="text" name="lastname" id="lastname" value="" size="35" title="Type your Last Name"
       class="form-control" ></span><br/>
                                       <span class="input-errors" for="lastname"></span>  
                                    </div>
                                    <div class="form-field-info"></div>
                                </div>
                            </div>
                            <div class="clear">&nbsp;</div>
                        </fieldset>
                        <fieldset>
                            <legend>Login Information</legend>

                            <div>

                                <div class="form-label-container">
                                    <div class="label_class label_class" style="">
                                        Email Address (As Username):<span class="star_class star_class"
                                                                          style="">*</span>&nbsp;
                                    </div>
                                </div>

                                <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<input required="" type="email" name="email" id="email" value="" size="35"
       title="Type your Email Address correct. This will consider as your login ID"
       info="Type your Email Address correct. This will consider as your login ID" class="form-control" class="required"></span><br/>  <span class="input-errors" for="email"></span>
                                        
                                    </div>
                                    <div class="form-field-info">
                                        <div class="ui-widget ui-helper-clearfix info">
                                            <div class="ui-widget-header ui-corner-all ui-state-default"
                                                 title="Type your Email Address correct. This will consider as your login ID">
                                                <p><span class="ui-icon ui-icon-info"></span></p></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-label-container">
                                    <div class="label_class label_class" style="">
                                        Password:<span class="star_class star_class" style="">*</span>&nbsp;
                                    </div>
                                </div>

                                <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<input required="" type="password" name="password" id="password" value="" size="35" class="form-control" ></span><br/>
                                       <span class="input-errors" for="password"></span>  
                                    </div>
                                    <div class="form-field-info"></div>
                                </div>

                                <div class="form-label-container">
                                    <div class="label_class label_class" style="">
                                        Confirm Password:<span class="star_class star_class" style="">*</span>&nbsp;
                                    </div>
                                </div>

                                <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<input required="" type="password" name="confirm_Password" id="confirm_password" value="" size="35" class="form-control"></span><br/> <span class="input-errors" for="confirm_password"></span>
                                       
                                    </div>
                                    <div class="form-field-info"></div>
                                </div>
                            </div>
                            <div class="clear">&nbsp;</div>
                        </fieldset>
                        <fieldset>
                            <legend>Contact Information</legend>

                            <div>

                               

                                <div class="form-label-container">
                                    <div class="label_class label_class" style="">
                                        Your Mobile:<span class="star_class star_class" style="">*</span>&nbsp;
                                    </div>
                                </div>

                                <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<input required="" type="text" name="mobile" id="mobile" value="" size="35" class="form-control" title="mobile number"></span><br/> <span class="input-errors" id="mobile"></span>
                                        
                                    </div>
                                    <div class="form-field-info"></div>
                                </div>

                                <div class="form-label-container">
                                    <div class="label_class label_class" style="">
                                        Your National Id:<span class="star_class star_class" style="">*</span>&nbsp;
                                    </div>
                                </div>

                                <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<input required="" type="text" name="nationalid" id="nationalid" value="" size="35" title="Enter National Id Number "
       class="form-control" ></span><br/> <span class="input-errors" for="nationalid"></span>
                                        
                                    </div>
                                    <div class="form-field-info"></div>
                                </div>

                                <div class="form-label-container">
                                    <div class="label_class label_class" style="">
                                        Select Your County:<span class="star_class star_class" style="">*</span>&nbsp;
                                    </div>
                                </div>

                                <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<select required="" name="county" id="json-one"id="county" size="1" style="" class="register_select_country form-control"
        title="Name of Your County" >
    <option selected value="48">Please Select</option>
    <option value="1">Baringo County</option>
    <option value="2">Bomet County</option>
    <option value="3">Bungoma County</option>
    <option value="4">Busia County</option>
    <option value="5">Elgeyo Marakwet County</option>
    <option value="6">Embu County</option>
    <option value="7">Garissa County</option>
    <option value="8">Homa Bay County</option>
    <option value="9">Isiolo County</option>
    <option value="10">Kajiado County</option>
    <option value="11">Kakamega County</option>
    <option value="12">Kericho County</option>
    <option value="13">Kiambu County</option>
    <option value="14">Kilifi County</option>
    <option value="15">Kirinyaga County</option>
    <option value="16">Kisii County</option>
    <option value="17">Kisumu County</option>
    <option value="18">Kitui County</option>
    <option value="19">Kwale County</option>
    <option value="20">Laikipia County</option>
    <option value="21">Lamu County</option>
    <option value="22">Machakos County</option>
    <option value="23">Makueni County</option>
    <option value="24">Mandera County</option>
    <option value="25">Marsabit County</option>
    <option value="26">Migori County</option>
    <option value="27">Meru County</option>
    <option value="28">Mombasa County</option>
    <option value="29">Muranga County</option>
    <option value="30">Nairobi County</option>
    <option value="31">Nakuru County</option>
    <option value="32">Nandi County</option>
    <option value="33">Narok County</option>
    <option value="34">Nyamira County</option>
    <option value="35">Nyandarua County</option>
    <option value="36">Nyeri County</option>
    <option value="37">Samburu County</option>
    <option value="38">Siaya County</option>
    <option value="39">Taita Taveta County</option>
    <option value="40">Tana River County</option>
    <option value="41">Tharaka Nithi County</option>
    <option value="42">Trans Nzoia County</option>
    <option value="43">Turkana County</option>
    <option value="44">Uasin Gishu County</option>
    <option value="45">Vihiga County</option>
    <option value="46">Wajir County</option>
    <option value="47">West Pokot County</option>
    
</select></span><br/> <span class="input-errors" for="county"></span>
                                        
                                    </div>
                                    <div class="form-field-info"></div>
                                </div>

                                <div class="form-label-container">
                                    <div class="label_class label_class" style="">
                                        Select Your Ward:<span class="star_class star_class" style="">*</span>&nbsp;
                                        
                                    </div>
                                </div>


      <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<select required="" name="ward" id="json-two"id="ward" size="1" style="" class="register_select_state form-control"
        title="Name of Your Ward" >
        <option>Please choose from above</option>
</select></span><br/> <span class="input-errors" for="ward"></span>
                                        
                                    </div>
                                    <div class="form-field-info"></div>
                                </div>

                            
                            </div>
                            <div class="clear">&nbsp;</div>
                       
                        </fieldset>
                        <fieldset>
                            <legend>Other Information</legend>

                            <div>

                                <div class="form-label-container">
                                    <div class="label_class label_class" style="">
                                        Your Web Address:&nbsp;
                                    </div>
                                </div>

                                <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<input required="" type="url" name="url" id="url" value="" size="35" title="Enter your Website URL Without http://"
       info="Enter your Website URL Without http://" class="form-control"></span><br/>
                                       <span class="input-errors" for="url"></span> 
                                    </div>
                                    <div class="form-field-info">
                                        <div class="ui-widget ui-helper-clearfix info">
                                            <div class="ui-widget-header ui-corner-all ui-state-default"
                                                 title="Enter your Website URL Without http://"><p><span
                                                        class="ui-icon ui-icon-info"></span></p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear">&nbsp;</div>
                        </fieldset>
                        
                        <div class="text-center">
                        <a href="javascript:  void(0);" class="reset_btn btn btn-global">Reset</a>
                         
                        <input class="btn"  type="submit" value="Submit">
 
                          </div>
                          </fieldset>
                    </form>
                    
           
           
      
                    
                </div>

                <div id="dialog_msg" title="Message Dialog"></div>
                <div id="dialog_container"  title="Processing........ Please wait.">
                    <div id="progressbar"></div>
                </div>
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
<script type="text/javascript"
        src="<?php base_url(); ?>assets/application/layouts/scripts/realestate_default/vendor/scripts/js/scroll.js"></script>
        
</body>
</html>
