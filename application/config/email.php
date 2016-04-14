<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/*$config['protocol'] = 'sendmail';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;
*/
$config['protocol'] = 'smtp';
$config['smtp_host']='ssl://smtp.mailgun.org';
$config['smtp_user']='postmaster@cpatt.mailgun.org';
$config['smtp_pass']='youpassword';
$config['smtp_port']='465';
/* End of file config.php */
/* Location: ./application/config/config.php */ 
?>