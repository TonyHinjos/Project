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
          content="LandSerachGIS - A Commercial Land GIS powered by tony, jQuery and 960grid">
    <!--<title><?php if (!empty($title)) {echo($title); } ?></title>-->

    <title>User Registration</title>
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
        logOut('a.topbar_logout_btn', '<img src="<?php base_url(); ?>../assets/application/layouts/scripts/realestate_default/images/loader/ajax-loader-email.gif" />', '', 'Sign in');
    });
</script>


<nav class="navbar navbar-default navbar-fixed-top ecitizen" id="subnav">
    <header>
        <div id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-5 user-links">
                        Welcome to LandGIS | <a href="<?php echo(base_url()); ?>login/user_login">Login</a> | <a
                            href="<?php base_url(); ?>">Register</a></div>

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
                            formData.role_id = '104';
                        }
                        $.ajax({
                            url: "/Members/Frontend/register",
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

                function gateWayList(info, member_id) {
                    var payment_method = '<div><span class="mod-label">Pay To :</span> <select name="full_payment" id="full_payment" >' +
                        '<option value="">Select...........</option>';
                    $.each(info, function (index, obj) {
                        payment_method += '<option value="' + obj['id'] + '_' + member_id + '">' + obj['name'] + '</option>';
                    });

                    payment_method += '</select></div><div id="full_payment_link"></div>';
                    $('#memberFormDiv').html(payment_method);
                    paymentAction();
                }

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


                    var img_code = '<div class="thumb"><img src="' + img_path + '" title="' + fileObj.name + '" width="30" height="20" /></div>'
                    var down_link = (!isImage(fileObj)) ? '<br /><a href="' + serverData.file_path + '/' + fileObj.name + '">Download</a>' : '';
                    var checked = '';
                    var primary = '&nbsp;&nbsp;&nbsp;';
                    var block = 'selected_file_' + upload_value_field;
                    var img_type = '';
                    switch (upload_value_field) {
                        case 'product_thumb':
                            checked = ($('#' + upload_value_field).val() == '') ? ' checked="checked" ' : '';
                            img_type = ($('#' + upload_value_field).val() == '') ? "<span class='main'>Main</span><br />" : "<span class='related'>Related</span><br />";
                            primary = '<input class="radio_style" type="radio" name="product_thumb_primary" id="product_thumb_primary" ' + checked + ' value="' + fileObj.name + '" title="Click To primary" />';
                            break;
                        case 'product_file':
                            checked = ($('#' + upload_value_field).val() == '') ? ' checked="checked" ' : '';
                            img_type = ($('#' + upload_value_field).val() == '') ? "<span class='main'>Main</span><br />" : "<span class='related'>Related</span><br />";
                            primary = '<input class="radio_style" type="radio" name="product_file_primary" id="product_file_primary" ' + checked + ' value="' + fileObj.name + '" title="Click To primary" />';
                            break;
                    }

                    var del_link = '<a href="javascript:void(0)" class="delete_uploaded_image_link" field_name="' + upload_value_field + '" file_name="' + fileObj.name + '" file_path="' + serverData.file_path + '">Delete</a>' + primary + down_link;

                    if (serverData.multi) {
                        $('#' + block).append('<div class="upload-img box">' + img_type + '<span>' + img_code + '<br />&nbsp;' + del_link + '</span></div>');
                        var file_val = ($('#' + upload_value_field).val() == '') ? fileObj.name : $('#' + upload_value_field).val() + ',' + fileObj.name;
                    }
                    else {
                        $('#' + block).html('<div class="upload-img box">' + img_type + '<span>' + img_code + '<br />&nbsp;' + del_link + '</span></div>');
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

           <script type="text/javascript" src="<?php base_url(); ?>../assets/js/jquery.min.js"></script>
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
                            vals = data.merucounty.split(",");
                            break;
                            case '27':
                            vals = data.migoricounty.split(",");
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



            <div class="mod">
                <div class="registration-icon">
                    <h1> User Sign Up</h1>
                </div>

                <div class="clear"></div>

                <div id="actionMessage">&nbsp;</div>

                <div id="memberFormDiv">

                    <form name="MemberForm" id="MemberForm">
                        <fieldset>
                            <legend>Member Information</legend>

                            <div>

                                <div class="form-label-container">
                                    <div class="label_class label_class" style="">
                                        Title:&nbsp;
                                    </div>
                                </div>

                                <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<select  name="title" id="title" title="Enter Title" size="1" class="form-control" admin="1"
       frontend="1">
<option selected value="4">Please Select</option>
    <option value="1">Mr</option>
    <option value="2">Mrs</option>
    <option value="3">Miss</option>


       </select></span><br/>
                                        <span class="input-errors" id="title_err"></span>
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
<input type="text" name="firstName" id="firstName" value="" size="35" title="Type Your First Name" class="form-control"
       admin="1" frontend="1"></span><br/>
                                        <span class="input-errors" id="firstName_err"></span>
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
<input type="text" name="lastName" id="lastName" value="" size="35" title="Enter Your Last Name" class="form-control"
       admin="1" frontend="1"></span><br/>
                                        <span class="input-errors" id="lastName_err"></span>
                                    </div>
                                    <div class="form-field-info"></div>
                                </div>

                                <div class="form-label-container">
                                    <div class="label_class label_class" style="">
                                        Company Name:&nbsp;
                                    </div>
                                </div>

                                <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<input type="text" name="companyName" id="companyName" value="" size="35" title="Type your Company Name"
       class="form-control" admin="1" frontend="1"></span><br/>
                                        <span class="input-errors" id="companyName_err"></span>
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
<input type="text" name="username" id="username" value="" size="35"
       title="Type your Email Address correct. This will consider as your login ID"
       info="Type your Email Address correct. This will consider as your login ID" class="form-control" admin="1"
       frontend="1"></span><br/>
                                        <span class="input-errors" id="username_err"></span>
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
<input type="password" name="password" id="password" value="" size="35" class="form-control" admin="1"
       frontend="1"></span><br/>
                                        <span class="input-errors" id="password_err"></span>
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
<input type="password" name="confirmPassword" id="confirmPassword" value="" size="35" class="form-control" admin="1"
       frontend="1"></span><br/>
                                        <span class="input-errors" id="confirmPassword_err"></span>
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
                                        Your Address:<span class="star_class star_class" style="">*</span>&nbsp;
                                    </div>
                                </div>

                                <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<textarea name="address" id="address" title="Please Type your Address" cols="30" rows="3" class="editor form-control"
          admin="1" frontend="1"></textarea></span><br/>
                                        <span class="input-errors" id="address_err"></span>
                                    </div>
                                    <div class="form-field-info"></div>
                                </div>

                                <div class="form-label-container">
                                    <div class="label_class label_class" style="">
                                        Your Mobile:&nbsp;
                                    </div>
                                </div>

                                <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<input type="text" name="mobile" id="mobile" value="" size="35" class="form-control" title="mobileNo" admin="1"
       frontend="1"></span><br/>
                                        <span class="input-errors" id="mobile_err"></span>
                                    </div>
                                    <div class="form-field-info"></div>
                                </div>

                                <div class="form-label-container">
                                    <div class="label_class label_class" style="">
                                        Your postal /Zip Code:<span class="star_class star_class" style="">*</span>&nbsp;
                                    </div>
                                </div>

                                <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<input type="text" name="postalCode" id="postalCode" value="" size="35" title="Enter postal / Zip Code "
       class="form-control" admin="1" frontend="1"></span><br/>
                                        <span class="input-errors" id="postalCode_err"></span>
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
<select name="country" id="json-one"id="country" size="1" style="" class="register_select_country form-control"
        title="Name of Your County" admin="1" frontend="1">
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
    <option value="25">Meru County</option>
    <option value="26">Migori County</option>
    <option value="27">Marsabit County</option>
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
    
</select></span><br/>
                                        <span class="input-errors" id="country_err"></span>
                                    </div>
                                    <div class="form-field-info"></div>
                                </div>

                                <div class="form-label-container">
                                    <div class="label_class label_class" style="">
                                        Type Your Ward:<span class="star_class star_class" style="">*</span>&nbsp;
                                        
                                    </div>
                                </div>


      <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<select name="state" id="json-two"id="state" size="1" style="" class="register_select_state form-control"
        title="Name of Your Ward" admin="1" frontend="1">
        <option>Please choose from above</option>
</select></span><br/>
                                        <span class="input-errors" id="state_err"></span>
                                    </div>
                                    <div class="form-field-info"></div>
                                </div>

                               <!-- <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<input type="text" name="state" id="state" value="" size="35" class="register_select_state form-control"
       title="Name of your Ward" admin="1" frontend="1"></span><br/>
                                        <span class="input-errors" id="state_err"></span>
                                    </div>
                                    <div class="form-field-info"></div>
                                </div>-->

                               <!--<div class="form-label-container">
                                    <div class="label_class label_class" style="">
                                        Your City/County:<span class="star_class star_class" style="">*</span>&nbsp;
                                    </div>
                                </div>

                                <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<input type="text" name="city" id="city" value="" size="35" class="form-control" title="Name of your City or County"
       admin="1" frontend="1"></span><br/>
                                        <span class="input-errors" id="city_err"></span>
                                    </div>
                                    <div class="form-field-info"></div>
                                </div>-->

                                <!--<div class="form-label-container">
                                    <div class="label_class label_class" style="">
                                        Your Telephone&nbsp;
                                    </div>
                                </div>

                                <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<input type="text" name="phone" id="phone" value="" size="35" title="phone" class="form-control" admin="1" frontend="1"></span><br/>
                                        <span class="input-errors" id="phone_err"></span>
                                    </div>
                                    <div class="form-field-info"></div>
                                </div>-->

                               <!-- <div class="form-label-container">
                                    <div class="label_class label_class" style="">
                                        Your Fax:&nbsp;
                                    </div>
                                </div>

                                <div class="form-field-container">
                                    <div class="form-field">
                                              <span class="ui-widget">
<input type="text" name="fax" id="fax" value="" size="35" title="fax" class="form-control" admin="1"
       frontend="1"></span><br/>
                                        <span class="input-errors" id="fax_err"></span>
                                    </div>
                                    <div class="form-field-info"></div>
                                </div>-->
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
<input type="text" name="website" id="website" value="" size="35" title="Enter your Website URL Without http://"
       info="Enter your Website URL Without http://" class="form-control" admin="1" frontend="1"></span><br/>
                                        <span class="input-errors" id="website_err"></span>
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
                        <fieldset>
                            <legend>Captcha Security</legend>

                            <div>
                                <div class="form-label-container">
                                    <div class="label_class label_class" style="">
                                        Image Verification :<span class="star_class star_class" style="">*</span></div>
                                </div>

                                <div class="form-field-container">
                                    <div class="form-field">
                                        <div class="captcha">
                                                          <span class="ui-widget">
<img width="145" height="50" alt="" src="temp/cache/c7b23aa509bb1a3d073372085fb2116f.png"/>
<input type="hidden" name="captcha_security[id]" value="c7b23aa509bb1a3d073372085fb2116f"
       title="A CAPTCHA image shows a random string which the user has to type to submit a form. This is a simple problem for (seeing) humans, but a very hard problem for computers which have to use character recognition, especially, because the displayed string is alienated in a way, which makes it very hard for a computer to decode. For more information see <b style='color:#045EC4'>http://en.wikipedia.org/wiki/Captcha</b>."
       info="A CAPTCHA image shows a random string which the user has to type to submit a form. This is a simple problem for (seeing) humans, but a very hard problem for computers which have to use character recognition, especially, because the displayed string is alienated in a way, which makes it very hard for a computer to decode. For more information see <b style='color:#045EC4'>http://en.wikipedia.org/wiki/Captcha</b>."
       class="ui-widget-content ui-corner-all" frontend="1" admin="0" id="captcha_security-id">
<input type="text" name="captcha_security[input]" id="captcha_security-input" value=""
       title="A CAPTCHA image shows a random string which the user has to type to submit a form. This is a simple problem for (seeing) humans, but a very hard problem for computers which have to use character recognition, especially, because the displayed string is alienated in a way, which makes it very hard for a computer to decode. For more information see <b style='color:#045EC4'>http://en.wikipedia.org/wiki/Captcha</b>."
       info="A CAPTCHA image shows a random string which the user has to type to submit a form. This is a simple problem for (seeing) humans, but a very hard problem for computers which have to use character recognition, especially, because the displayed string is alienated in a way, which makes it very hard for a computer to decode. For more information see <b style='color:#045EC4'>http://en.wikipedia.org/wiki/Captcha</b>."
       class="ui-widget-content ui-corner-all" frontend="1" admin="0"></span><br/>
                                            <span class="input-errors" id="captcha_security_err"></span>
                                        </div>
                                    </div>
                                    <div class="form-field-info">
                                        <div class="ui-widget ui-helper-clearfix info">
                                            <div class="ui-widget-header ui-corner-all ui-state-default"
                                                 title="A CAPTCHA image shows a random string which the user has to type to submit a form. This is a simple problem for (seeing) humans, but a very hard problem for computers which have to use character recognition, especially, because the displayed string is alienated in a way, which makes it very hard for a computer to decode. For more information see <b style='color:#045EC4'>http://en.wikipedia.org/wiki/Captcha</b>.">
                                                <p><span class="ui-icon ui-icon-info"></span></p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear">&nbsp;</div>
                        </fieldset>

                    </form>

                    <div class="text-center">
                        <a href="javascript:  void(0);" class="reset_btn btn btn-global">Reset</a>
                        <a href="javascript: void(0);" class="add_user_btn btn btn-global">Submit</a>
                    </div>
                </div>

                <div id="dialog_msg" title="Message Dialog"></div>
                <div id="dialog_container" style="display:none" title="Processing........ Please wait.">
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
        <!--<script src="<?php base_url(); ?>../assets/js/jquery.min.js"></script>
<script src="<?php base_url(); ?>../assets/js/bootstrap.min.js"></script>
<script src="<?php base_url(); ?>../assets/js/scripts.js"></script>-->
</body>
</html>
