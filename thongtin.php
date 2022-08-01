<?php
$conn = mysqli_connect("localhost", "root", "root", "doan");
$rows = mysqli_query($conn, "SELECT * FROM tbl_doan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet" />
  <title>Phòng ngủ</title>
</head>


<style type="text/css">
	body {
		background: #d9d7c1;
	}
	.card {
  	/* Add shadows to create the "card" effect */
  	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  	transition: 0.3s;
  	width: 15%;
  	float: left;
  	margin-left: 10%;
  	border-radius: 5px;
  	margin-top: 10%;
	}

	img {
  	border-radius: 5px 5px 0 0;
	}

	/* On mouse-over, add a deeper shadow */
	.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	}

	/* Add some padding inside the card container */
	.container {
	  padding: 2px 2px;
	  text-align: center;
	  font-size: 25px;
	  font-family: helvetica, arial, serif;
	}

	.nude{
  	align-items: center;
  	margin-bottom: 10%;
  	background-color: #224238;
  	border: 0;
  	border-radius: 100px;
  	box-sizing: border-box;
  	color: #ffffff;
  	cursor: pointer;
  	display: inline-flex;
  	font-family: -apple-system, system-ui, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Fira Sans", Ubuntu, Oxygen, "Oxygen Sans", Cantarell, "Droid Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Lucida Grande", Helvetica, Arial, sans-serif;
  	font-size: 20px;
  	font-weight: 600;
  	justify-content: center;
  	line-height: 20px;
  	max-width: 480px;
  	min-height: 40px;
  	min-width: 0px;
  	overflow: hidden;
  	padding: 0px;
  	padding-left: 20px;
  	padding-right: 20px;
  	text-align: center;
  	touch-action: manipulation;
  	transition: background-color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, box-shadow 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s;
  	user-select: none;
  	-webkit-user-select: none;
  	vertical-align: middle;
	}

	.nude:hover,
	.nude:focus { 
  	background-color: #d9d7c1;
  	color: #ffffff;
	}

	.nude:active {
  	background: #09223b;
  	color: rgb(255, 255, 255, .7);
	}

	.nude:disabled { 
  	cursor: not-allowed;
  	background: rgba(0, 0, 0, .08);
  	color: rgba(0, 0, 0, .3);
	}
	.thongtin {
		margin: 0 auto;
    width:100%;
    height:100%;
    position: relative;
    margin-left: 7%;
    margin-right: 5%;
	}
	}

</style>


<body>
	<div class="thongtin">
	<div class="card" style="background-color: white">
  <div class="container">
    <p style="color: #224238; font-size: 35px;"><b>NHIỆT ĐỘ</b><p>
    <img src="/flash/image/temp.png" alt="Avatar" style="width:92%;">
    <p style="color: #224238; font-size: 33px; margin-top: -8%;"><b>38 độ C</b><p>
    <button class="nude">Xem đồ thị</button>
  </div>  
</div>


<div class="card" style="background-color: white">
  <div class="container">
    <p style="color: #224238; font-size: 35px;"><b>ĐỘ ẨM</b><p>
    <img src="/flash/image/humi.png" alt="Avatar" style="width:92%;">
    <p style="color: #224238; font-size: 33px; margin-top: -8%;"><b>95%</b><p>
    <button class="nude">Xem đồ thị</button>
  </div>  
</div>



<div class="card" style="background-color: white">
  <div class="container">
    <p style="color: #224238; font-size: 35px;"><b>BẬT/TẮT ĐÈN</b><p>
    <img src="/flash/image/temp.png" alt="Avatar" style="width:92%;">
    <p style="color: #224238; font-size: 33px; margin-top: -8%;"><b>38 độ C</b><p>
    <button class="nude">Xem đồ thị</button>
  </div>  
</div>



</div>
</body>