<?php
//variable set
$Subscribe = $_REQUEST['Subscribe'];
if (empty($Subscribe))
{
	
}
else
{
	mail("adarshsharma883@gmail.com","User Request", "Subscription Request", "From: <$Subscribe>");
	echo"<script 'type= text/javascript'>alert('Thanks For Subscription');
	windows.histroy.log(-1);
	</script>";
	
}




?>
