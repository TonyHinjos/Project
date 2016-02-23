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
    <meta name="keywords" content="Contact Us">
    <meta name="description" content="Contact Us">
     <!--<title><?php if (!empty($title)) {echo($title); } ?></title>-->

    <title>Contact Us - Contact here to Administrator</title>
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
                            href="<?php echo(base_url()); ?>login/user_register">Register</a></div>

                    <div class="col-xs-7 top-links">
                        <a href="<?php echo(base_url()); ?>login/user_login">My Account</a> |
                        <a href="<?php echo(base_url()); ?>login/contact_us">Contact us</a>
                    <div class="flags">

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
                                            var url = '/Contact-Us';
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
<section class="container">

    <div class="content-container">

        <!-- Inner Layout End -->

        <!-- Content Start-->
        <div id="">
            <script type="text/javascript">
                var settingObj = {
                    form_action: {
                        form_id: 'contact_us',
                        hasTinyMCE: false,
                        go_message_id: 'actionMessage',
                        common_msg_field_id: 'actionMessage',
                        dialog_container_id: 'dialog_container',
                        dialog_progressbar_id: 'progressbar'
                    },
                    calendar: {
                        calendar_include_time: true,
                        calendar_img_link: 'application/layouts/scripts//images/mod_img/calendar-small.png',
                        monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                        buttonText: 'calendar',
                        dateFormat: 'yy-mm-dd',
                        dateTimeFormat: "yyyy-MM-dd HH:mm:ss tt"
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

                    $('a.reset_btn').click(function () {
                        commonResetFormFields(settingObj);
                        commonRemoveFormError(settingObj);
                        commonGoMessage(settingObj);
                    });


                    $('a.submit_btn').click(function () {
                        var formData = commonGetFormData(settingObj.form_action.form_id, settingObj.form_action.hasTinyMCE);
                        $.ajax({
                            url: "/Contact/View/form/menu_id/Realestate-Home",
                            type: 'POST',
                            data: formData,
                            beforeSend: function () {
                                commonOpenLoaderDialog(settingObj);
                                commonRemoveFormError(settingObj);
                            },
                            success: function (response) {
                                try {
                                    //alert(response);
                                    var json_arr = eval("(" + response + ")");
                                    if (json_arr.status == 'ok') {
                                        $('#actionMessage').html(succMsgDesign(json_arr.msg));
                                        commonResetFormFields(settingObj);
                                        commonGoMessage(settingObj);
                                    }
                                    else if (json_arr.status == 'errV') {
                                        $('#actionMessage').html(errMsgDesign("There are some error to perform this action. Please See below --"));

                                        for (var i = 0; i < json_arr.msg.length; i++) {
                                            commonAddFormError(json_arr.msg[i].key, json_arr.msg[i].value);
                                            focusFirst(json_arr.msg[i].key, json_arr.msg[i].value, i);
                                        }
                                    }
                                    else {
                                        $('#actionMessage').html(errMsgDesign(json_arr.msg));
                                        commonGoMessage(settingObj);
                                    }
                                    commonRefreshCaptcha(json_arr, 'span');
                                    commonCloseLoaderDialog(settingObj);
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
                                $('#actionMessage').html(msg);
                                commonGoMessage(settingObj);
                            }
                        });
                    });


                    $('#contact_country_value').change(function () {

                        if ($('#contact_state').html()) {
                            $('#contact_state').html('<option value="0">Loading Data......</option>');

                            if ($('#contact_city').html()) {
                                $('#contact_city').html('<option value="0">Select a city</option>');
                            }

                            $.ajax({
                                url: "/Contact/view/states/menu_id/Realestate-Home",
                                type: 'POST',
                                data: {id: $('#contact_country_value').val()},
                                success: function (response) {
                                    //alert(response);
                                    var json_arr = eval("(" + response + ")");
                                    var option = '<option value="0">Select a state</option>';
                                    if (json_arr.status == 'ok') {
                                        for (var i = 0; i < json_arr.states.length; i++) {
                                            option += '<option value="' + json_arr.states[i].state_id + '" >' + json_arr.states[i].state_name + '</option>';
                                        }
                                        $('#contact_state').html(option);
                                    }
                                    else {
                                        $('#contact_state').html('<option value="0">' + json_arr.msg + '</option>');
                                    }
                                }
                            });
                        }
                    });

                    $('select.contact_state').change(function () {

                        $('select.contact_city').html('<option value="0">Loading Data......</option>');
                        if ($('select.contact_state option:selected').val() == 0 || $('select.contact_state option:selected').val() == '') {
                            $('select.contact_city').html('<option value="0">Select a city</option>');
                        }
                        else {
                            $.ajax({
                                url: "/index/index/cities/menu_id/Realestate-Home",
                                type: 'POST',
                                data: {id: $('select.contact_state option:selected').val()},
                                success: function (response) {
                                    //alert(response);
                                    var json_arr = eval("(" + response + ")");
                                    var option = '<option value="0">Select a City</option>';
                                    if (json_arr.status == 'ok') {
                                        for (var i = 0; i < json_arr.cities.length; i++) {
                                            //alert(json_arr.states[i].state_id);
                                            option += '<option value="' + json_arr.cities[i].city_id + '" >' + json_arr.cities[i].city + '</option>';
                                        }
                                        $('select.contact_city').html(option);
                                    }
                                    else {
                                        $('select.contact_city').html('<option value="0">' + json_arr.msg + '</option>');
                                    }
                                }
                            });
                        }
                    });
                });


            </script>

            <div class="mod contact">
                <h1>Contact Us</h1>

                <div class="row">
                    <div class="col-xs-12 col-md-7">
                        PLEASE FIND OUR CONTACT DETAILS BELOW
                        <dl class="dl-horizontal">
                            <dt><span class="glyphicon glyphicon-map-marker"></span> Address:</dt>
                            <dd>Company Office Address</dd>

                            <dt><span class="glyphicon glyphicon-phone-alt"></span> Telephone No:</dt>
                            <dd>+254721567977</dd>

                            <dt><span class="glyphicon glyphicon-print"></span> Fax No:</dt>
                            <dd>845883468568456</dd>

                            <dt><span class="glyphicon glyphicon-phone"></span> Hotline:</dt>
                            <dd>+254720000000</dd>

                            <dt><span class="glyphicon glyphicon-envelope"></span> E-mail:</dt>
                            <dd>
                                Support : <a href="mailto:awanjohim@gmail.com">mailto:awanjohim@gmail.com</a><br>
                            </dd>

                            <dt><span class="glyphicon glyphicon-link"></span> Website URL:</dt>
                            <dd>
                                <a href="#" target="blank">http://www.mydomain.com</a>
                            </dd>
                        </dl>
                        <div class="alert alert-info">
                            <div class="glyphicon glyphicon-info-sign"></div>
                            Our Office Hours Monday to Friday from 9:00A.M to 6:00 P.M
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-5">
                        <span class="glyphicon glyphicon-globe"></span> View our Location Map<br><br>
                        <iframe
                            src="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=Flick+Media+Ltd+Suite+110,+Queens+Way+House+275-285+High+Street+Stratford,+London+%E2%80%93+E15+2TF&sll=37.0625,-95.677068&sspn=34.038806,56.513672&ie=UTF8&hq=Flick+Media+Ltd+Suite+110,+Queens+Way+House+275-285+High+Street&hnear=London+E15+2TF,+UK&view=map&ei=i-w-S6vQJ5CojAeE7ZSWCQ&attrid=&ll=51.544253,0.000601&spn=0.007101,0.013797&z=14&iwloc=A&cid=2785574160978382141&output=embed"
                            width="100%" height="250" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"></iframe>
                    </div>
                </div>
                <br>

                <div id="actionMessage"></div>
                <form name="contact_us" id="contact_us" role="form" class="form-horizontal">
                    <fieldset>
                        <legend>Quick Feedback Form</legend>
                        <div class="form-group">
                            <label for="contact_name" class="label_class  col-sm-4 control-label" style="">
                                Name:<span class="star_class " style="">*</span> </label>

                            <div class="col-sm-8">
									<span class="ui-widget">
<input type="text" name="contact_name" id="contact_name" value="" title="Name" class="form-control"></span> <span
                                    class="input-errors" id="contact_name_err"></span>
                            </div>
                            <div class="form-field-info"></div>
                        </div>
                        <div class="form-group">
                            <label for="contact_country" class="label_class  col-sm-4 control-label" style="">
                                Country: </label>

                            <div class="col-sm-8">
									<span class="ui-widget">
<select name="contact_country" id="contact_country" size="1" title="Country" class="form-control">
    <option value="">Select Country....</option>
    <option value="&Aring;land Islands">&Aring;land Islands</option>
    <option value="Afghanistan">Afghanistan</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="American Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguilla">Anguilla</option>
    <option value="Antarctica">Antarctica</option>
    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Aruba">Aruba</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
    <option value="Botswana">Botswana</option>
    <option value="Bouvet Island">Bouvet Island</option>
    <option value="Brazil">Brazil</option>
    <option value="British Indian Ocean territory">British Indian Ocean territory</option>
    <option value="Brunei Darussalam">Brunei Darussalam</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Cape Verde">Cape Verde</option>
    <option value="Cayman Islands">Cayman Islands</option>
    <option value="Central African Republic">Central African Republic</option>
    <option value="Chad">Chad</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Christmas Island">Christmas Island</option>
    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo">Congo</option>
    <option value="Congo Democratic Republic">Congo Democratic Republic</option>
    <option value="Cook Islands">Cook Islands</option>
    <option value="Costa Rica">Costa Rica</option>
    <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
    <option value="Cuba">Cuba</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czech Republic">Czech Republic</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican Republic">Dominican Republic</option>
    <option value="East Timor">East Timor</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El Salvador">El Salvador</option>
    <option value="Equatorial Guinea">Equatorial Guinea</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Falkland Islands">Falkland Islands</option>
    <option value="Faroe Islands">Faroe Islands</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="French Guiana">French Guiana</option>
    <option value="French Polynesia">French Polynesia</option>
    <option value="French Southern Territories">French Southern Territories</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Gibraltar">Gibraltar</option>
    <option value="Greece">Greece</option>
    <option value="Greenland">Greenland</option>
    <option value="Grenada">Grenada</option>
    <option value="Guadeloupe">Guadeloupe</option>
    <option value="Guam">Guam</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guinea">Guinea</option>
    <option value="Guinea-Bissau">Guinea-Bissau</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
    <option value="Honduras">Honduras</option>
    <option value="Hong Kong">Hong Kong</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Iran">Iran</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland">Ireland</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Ivoire (Ivory Coast)">Ivoire (Ivory Coast)</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value="Korea (north)">Korea (north)</option>
    <option value="Korea (south)">Korea (south)</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon">Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Macao">Macao</option>
    <option value="Macedonia">Macedonia</option>
    <option value="Madagascar">Madagascar</option>
    <option value="Malawi">Malawi</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Maldives">Maldives</option>
    <option value="Mali">Mali</option>
    <option value="Malta">Malta</option>
    <option value="Marshall Islands">Marshall Islands</option>
    <option value="Martinique">Martinique</option>
    <option value="Mauritania">Mauritania</option>
    <option value="Mauritius">Mauritius</option>
    <option value="Mayotte">Mayotte</option>
    <option value="Mexico">Mexico</option>
    <option value="Micronesia">Micronesia</option>
    <option value="Moldova">Moldova</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Montserrat">Montserrat</option>
    <option value="Morocco">Morocco</option>
    <option value="Mozambique">Mozambique</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Namibia">Namibia</option>
    <option value="Nauru">Nauru</option>
    <option value="Nepal">Nepal</option>
    <option value="Netherlands">Netherlands</option>
    <option value="Netherlands Antilles">Netherlands Antilles</option>
    <option value="New Caledonia">New Caledonia</option>
    <option value="New Zealand">New Zealand</option>
    <option value="Nicaragua">Nicaragua</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Niue">Niue</option>
    <option value="Norfolk Island">Norfolk Island</option>
    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
    <option value="Norway">Norway</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palau">Palau</option>
    <option value="Palestinian Territories">Palestinian Territories</option>
    <option value="Panama">Panama</option>
    <option value="Papua New Guinea">Papua New Guinea</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Peru">Peru</option>
    <option value="Philippines">Philippines</option>
    <option value="Pitcairn">Pitcairn</option>
    <option value="Poland">Poland</option>
    <option value="Portugal">Portugal</option>
    <option value="Puerto Rico">Puerto Rico</option>
    <option value="Qatar">Qatar</option>
    <option value="Reacute union">Reacute union</option>
    <option value="Romania">Romania</option>
    <option value="Russian Federation">Russian Federation</option>
    <option value="Rwanda">Rwanda</option>
    <option value="Saint Helena">Saint Helena</option>
    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
    <option value="Saint Lucia">Saint Lucia</option>
    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
    <option value="Samoa">Samoa</option>
    <option value="San Marino">San Marino</option>
    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Senegal">Senegal</option>
    <option value="Serbia and Montenegro">Serbia and Montenegro</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra Leone">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Slovakia">Slovakia</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="South Africa">South Africa</option>
    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
    <option value="South Sudan">South Sudan</option>
    <option value="Spain">Spain</option>
    <option value="Sri Lanka">Sri Lanka</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
    <option value="Swaziland">Swaziland</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syria">Syria</option>
    <option value="Taiwan">Taiwan</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania">Tanzania</option>
    <option value="Thailand">Thailand</option>
    <option value="Togo">Togo</option>
    <option value="Tokelau">Tokelau</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
    <option value="Tuvalu">Tuvalu</option>
    <option value="Uganda">Uganda</option>
    <option value="Ukraine">Ukraine</option>
    <option value="United Arab Emirates">United Arab Emirates</option>
    <option value="United Kingdom" selected="selected">United Kingdom</option>
    <option value="United States of America">United States of America</option>
    <option value="Uruguay">Uruguay</option>
    <option value="Uzbekistan">Uzbekistan</option>
    <option value="Vanuatu">Vanuatu</option>
    <option value="Vatican City(Holy See)">Vatican City(Holy See)</option>
    <option value="Venezuela">Venezuela</option>
    <option value="Vietnam">Vietnam</option>
    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
    <option value="Virgin Islands (US)">Virgin Islands (US)</option>
    <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
    <option value="Western Sahara">Western Sahara</option>
    <option value="Yemen">Yemen</option>
    <option value="Zaire">Zaire</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option>
</select></span> <span class="input-errors" id="contact_country_err"></span>
                            </div>
                            <div class="form-field-info"></div>
                        </div>
                        <div class="form-group">
                            <label for="contact_company" class="label_class  col-sm-4 control-label" style="">
                                Company: </label>

                            <div class="col-sm-8">
									<span class="ui-widget">
<input type="text" name="contact_company" id="contact_company" value="" size="50" title="Company" class="form-control"></span>
                                <span class="input-errors" id="contact_company_err"></span>
                            </div>
                            <div class="form-field-info"></div>
                        </div>
                        <div class="form-group">
                            <label for="contact_address" class="label_class  col-sm-4 control-label" style="">
                                Address: </label>

                            <div class="col-sm-8">
									<span class="ui-widget">
<input type="text" name="contact_address" id="contact_address" value="" size="50" title="Address" class="form-control"></span>
                                <span class="input-errors" id="contact_address_err"></span>
                            </div>
                            <div class="form-field-info"></div>
                        </div>
                        <div class="form-group">
                            <label for="contact_phone" class="label_class  col-sm-4 control-label" style="">
                                Contact No: </label>

                            <div class="col-sm-8">
									<span class="ui-widget">
<input type="text" name="contact_phone" id="contact_phone" value="" size="50" title="Contact No"
       class="form-control"></span> <span class="input-errors" id="contact_phone_err"></span>
                            </div>
                            <div class="form-field-info"></div>
                        </div>
                        <div class="form-group">
                            <label for="contact_email" class="label_class  col-sm-4 control-label" style="">
                                Email Address :<span class="star_class " style="">*</span> </label>

                            <div class="col-sm-8">
									<span class="ui-widget">
<input type="text" name="contact_email" id="contact_email" value="" size="50" title="Email Address"
       class="form-control"></span> <span class="input-errors" id="contact_email_err"></span>
                            </div>
                            <div class="form-field-info"></div>
                        </div>
                        <div class="form-group">
                            <label for="contact_subject" class="label_class  col-sm-4 control-label" style="">
                                Subject: </label>

                            <div class="col-sm-8">
									<span class="ui-widget">
<input type="text" name="contact_subject" id="contact_subject" value="" size="50" title="Subject" class="form-control"></span>
                                <span class="input-errors" id="contact_subject_err"></span>
                            </div>
                            <div class="form-field-info"></div>
                        </div>
                        <div class="form-group">
                            <label for="contact_message" class="label_class  col-sm-4 control-label" style="">
                                Message:<span class="star_class " style="">*</span> </label>

                            <div class="col-sm-8">
									<span class="ui-widget">
<textarea name="contact_message" id="contact_message" cols="50" rows="15" title="Message"
          class="form-control"></textarea></span> <span class="input-errors" id="contact_message_err"></span>
                            </div>
                            <div class="form-field-info"></div>
                        </div>
                        <div class="form-group">
                            <label for="security_captcha-input" class="label_class  col-sm-4 control-label" style="">
                                Please enter the 4 letters displayed right:<span class="star_class " style="">*</span>
                            </label>

                            <div class="col-sm-8">
                                    <span class="ui-widget">
<img width="145" height="50" alt="" src="temp/cache/2c88fbaf4e8b7c9e40ca8855a292eb10.png"/>
<input type="hidden" name="security_captcha[id]" value="2c88fbaf4e8b7c9e40ca8855a292eb10"
       title="Please enter the 4 letters displayed left" class="form-control" id="security_captcha-id">
<input type="text" name="security_captcha[input]" id="security_captcha-input" value=""
       title="Please enter the 4 letters displayed left" class="form-control"></span>
                                <span class="input-errors" id="security_captcha-input_err"></span>
                                <!--<div class="form-field-info"><div class="ui-widget ui-helper-clearfix info"><div class="ui-widget-header ui-corner-all ui-state-default" title=""><p><span class="ui-icon ui-icon-info"></span></p></div></div></div>-->
                            </div>
                        </div>

                    </fieldset>
                </form>
                <div class="text-center">
                    <a href="javascript:  void(0);" class="reset_btn btn btn-global">Reset</a>
                    <a href="javascript:  void(0);" class="submit_btn btn btn-global">Submit</a>
                </div>
            </div>

            <div id="dialog_msg" title="Contact Page Dialog"></div>
            <div id="dialog_container" title="Processing........ Please wait." style="display:none">
                <div class="progress progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                         aria-valuemax="100" style="width: 100%">
                        <span class="sr-only">100% Complete</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content End-->

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
<!--Footer End-->

<div class="go-top"><a href="#top" id="scroll-top"><i class="glyphicon glyphicon-chevron-up"></i></a></div>
<script type="text/javascript"
        src="<?php base_url(); ?>../assets/application/layouts/scripts/realestate_default/vendor/scripts/js/scroll.js"></script>
</body>
</html>
