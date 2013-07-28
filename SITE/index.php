<!-- Copyright Philipp Grozinger -->

<?php
date_default_timezone_set('Australia/Adelaide');
if (isset($_GET['gra']) && $_GET['0'] != ""){
	$readers = $_GET['0'];
	$page_flips = $_GET['1'];
	$articles = $_GET['2'];
	$day = date("l");
	$date = date("d/m/y");
	$month = date("F");
	$time = date("H:i:s");
	$connect = mysqli_connect("mysql.fhost.com.au", "u318664143_test", "xdb390", "u318664143_test");
	if ($_GET['gra'] == "phite"){
		$insert = "INSERT INTO flipboard (readers, page_flips, articles, day, date, month, time) VALUES ('$readers', '$page_flips', '$articles', '$day', '$date', '$month', '$time');";
		$insertQuery = mysqli_query($connect, $insert);
	}
	mysqli_close($connect);
}
?>

<html>
	<head>
		<title>Flipboard Analytics</title>
	</head>
	<body>
		<script type="text/javascript">alert("Your new datapoint has been added!"); window.location = "https://editor.flipboard.com/section?sections=auth/flipboard/curator%252Fmagazine%252F2UNcM4j0R82Q2ZJEZJOIHw%253Am%253A47987731";</script>
	</body>
</html>