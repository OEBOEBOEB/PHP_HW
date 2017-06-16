<?php
	date_default_timezone_set("Asia/Taipei");

	$nowTime = time();
	echo "現在時間為 ".date("M,d,Y. h:i:sa",$nowTime)."<br/>";

	#mktime( $hour , $minute , $second , $month , $day , $year);
	$endTime = mktime('0','0','0','12','31','2017');
	$restTime = $endTime - $nowTime;
	$year = (int) (($restTime / (86400))/365);
	$month = (int) ((($restTime / (86400)) % 365)/30);
	$day =		(int) ((($restTime / (86400)) % 30) / (86400));
	$hours = 	(int) (($restTime%86400) / 3600);
	$minutes = 	(int) (($restTime%3600) / 60);
	$seconds =	($restTime%60);

	echo "世界末日為 ".date("M,d,Y. h:i:sa",$endTime)."<br/>";
	echo "距離世界末日還剩下 ".$year."年".$month."月". $day."日".$hours."時".$minutes."分".$seconds."秒<br/>";

	$nowMonth = date("m",time());

	if($nowMonth == 1)
	{
		echo "<img src='img/1.jpg'>";
	}
	else if ($nowMonth == 2)
	{
		echo "<img src='img/2.jpg'>";
	}
	else if ($nowMonth == 3)
	{
		echo "<img src='img/3.jpg'>";
	}
	else if ($nowMonth == 4)
	{
		echo "<img src='img/4.jpg'>";
	}
	else if ($nowMonth == 5)
	{
		echo "<img src='img/5.jpg'>";
	}
	else if ($nowMonth == 6)
	{
		echo "<img src='img/6.jpg'>";
	}
	else if ($nowMonth == 7)
	{
		echo "<img src='img/7.jpg'>";
	}
	else if ($nowMonth == 8)
	{
		echo "<img src='img/8.jpg'>";
	}
	else if ($nowMonth == 9)
	{
		echo "<img src='img/9.jpg'>";
	}
	else if ($nowMonth == 10)
	{
		echo "<img src='img/10.jpg'>";
	}
	else if ($nowMonth == 11)
	{
		echo "<img src='img/11.jpg'>";
	}
	else if ($nowMonth == 12)
	{
		echo "<img src='img/12.jpg'>";
	}
?>