<?php 
	$owner = 'ww';
 	$db = mysql_connect("localhost", "igris_gprs", "gprs123:/");
 	mysql_select_db("igris_gprs",$db);
 	if (isset($_REQUEST['c']))
 	{
  		$c = $_REQUEST['c'];
		$ip = $_SERVER['REMOTE_ADDR'];
 		$result = mysql_query("INSERT into Incoming (messtype,ip,command,owner) values ('IN','$ip','$c','" . $owner . "')",$db);		
	    if ($c != "Ack")
		{
			echo '#ReceivedOK';
		}
	}
?> 
