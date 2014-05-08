<?php
#---------------------------------------------#
#      ********* RotorCMS *********           #
#           Author  :  Vantuz                 #
#            Email  :  visavi.net@mail.ru     #
#             Site  :  http://visavi.net      #
#              ICQ  :  36-44-66               #
#            Skype  :  vantuzilla             #
#---------------------------------------------#
require_once ('includes/start.php');
require_once ('includes/functions.php');
require_once ('includes/header.php');
include_once ('themes/header.php');

$data = explode('/', $request_uri);

if (!empty($data[0])) {

	if ($data[0] == 'forum') {
		$_GET['fid'] = $data[1];
		include_once($data[0].'/forum.php');
	}

} else {

	include_once (DATADIR.'/advert/top.dat');
	render ('index');
	include_once (DATADIR.'/advert/bottom.dat');
}
include_once ('themes/footer.php');
?>
