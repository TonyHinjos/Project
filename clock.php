<?php
//set indian time zone
date_default_timezone_set("Africa/Kenya");
//get date 
$date = date('jS , F Y');
//get time
$time = date('H:i:s');
//create a array and save date in time
$response = array('date'=>$date,
        'time'=>$time);

//set as json
header('ContentType: Application/json');
echo json_encode($response);
exit;
