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



$data = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

$_GET['fid'] = $data[1];
include_once($data[0].'/forum.php');




//include_once (DATADIR.'/advert/top.dat');

//render ('index');

//include_once (DATADIR.'/advert/bottom.dat');

include_once ('themes/footer.php');
?>
