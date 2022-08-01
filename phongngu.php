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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Phòng ngủ</title>
</head>




<style type="text/css">
  
  @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
}
@import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);
.fa-2x {
font-size: 2em;
}
.fa {
position: relative;
display: table-cell;
width: 60px;
height: 36px;
text-align: center;
vertical-align: middle;
font-size:20px;
}


.main-menu:hover,nav.main-menu.expanded {
width:250px;
overflow:visible;
}

.main-menu {
background:#212121;
border-right:1px solid #e5e5e5;
position:absolute;
top:0;
bottom:0;
height:100%;
left:0;
width:60px;
overflow:hidden;
-webkit-transition:width .05s linear;
transition:width .05s linear;
-webkit-transform:translateZ(0) scale(1,1);
z-index:1000;
}

.main-menu>ul {
margin:7px 0;
}

.main-menu li {
position:relative;
display:block;
width:250px;
}

.main-menu li>a {
position:relative;
display:table;
border-collapse:collapse;
border-spacing:0;
color:#999;
 font-family: arial;
font-size: 14px;
text-decoration:none;
-webkit-transform:translateZ(0) scale(1,1);
-webkit-transition:all .1s linear;
transition:all .1s linear;
  
}

.main-menu .nav-icon {
position:relative;
display:table-cell;
width:60px;
height:36px;
text-align:center;
vertical-align:middle;
font-size:18px;
}

.main-menu .nav-text {
position:relative;
display:table-cell;
vertical-align:middle;
width:190px;
  font-family: 'Titillium Web', sans-serif;
}

.main-menu>ul.logout {
position:absolute;
left:0;
bottom:0;
}

.no-touch .scrollable.hover {
overflow-y:hidden;
}

.no-touch .scrollable.hover:hover {
overflow-y:auto;
overflow:visible;
}

a:hover,a:focus {
text-decoration:none;
}

nav {
-webkit-user-select:none;
-moz-user-select:none;
-ms-user-select:none;
-o-user-select:none;
user-select:none;
}

nav ul,nav li {
outline:0;
margin:0;
padding:0;
}
.main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
color:#fff;
background-color:#5fa2db;
}
.area {
float: left;
background: #e2e2e2;
width: 100%;
height: 100%;
}
@font-face {
  font-family: 'Titillium Web';
  font-style: normal;
  font-weight: 300;
  src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
}









@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bree+Serif&family=EB+Garamond:ital,wght@0,500;1,800&display=swap');


body {
background: #d9d7c1;
  /*background-image: linear-gradient( to right, #ffffb3,#ffe6e6);*/
  background-attachment: fixed; 
  background-size: cover;
  
  }



@import url('https://fonts.googleapis.com/css?family=Encode+Sans+Condensed:400,600');

.dautrang {
  font-family: 'Encode Sans Condensed', sans-serif;
  font-weight: 600;
  letter-spacing: .03em;
}



/* Fill button styling */
.fill {
  font-family: 'Encode Sans Condensed', sans-serif;
  font-size: 17px;
  font-weight: 200;
  letter-spacing: 1px;
  padding: 8px 43px 8px;
  outline: 0;
  border: 1px solid black;
  cursor: pointer;
  position: relative;
  background-color: rgba(0, 0, 0, 0);
}

.fill::after {
  content: "";
  background-color: #f5d202;
  width: 100%;
  z-index: -1;
  position: absolute;
  height: 100%;
  top: 7px;
  left: 7px;
  transition: 0.2s;
}

.fill:hover::after {
  top: 0px;
  left: 0px;
}
/* End of Fill Button  */











/* A simple, css only, (some-what) responsive menu */

/*body { 
  background: #ccc;
  font-family: helvetica, arial, serif;
  font-size: 13px;
  text-transform: uppercase;
  text-align: center;
}*/
 
.wrap {
  display: inline-block;
  -webkit-box-shadow: 0 0 70px #fff;
  -moz-box-shadow: 0 0 70px #fff;
  box-shadow: 0 0 70px #fff;
  margin-top: -33px;
  margin-left: 31%;
}

/* a little "umph" */
.decor {
  background: #6EAF8D;
  background: -webkit-linear-gradient(left, #CDEBDB 50%, #6EAF8D 50%);
  background: -moz-linear-gradient(left, #CDEBDB 50%, #6EAF8D 50%);
  background: -o-linear-gradient(left, #CDEBDB 50%, #6EAF8D 50%);
  background: linear-gradient(left, white 50%, #6EAF8D 50%);
  background-size: 50px 25%;;
  padding: 2px;
  display: block;
}

a {
  text-decoration: none;
  color: #fff;
  display: block;
}

ul {
  list-style: none;
  position: relative;
  text-align: left;
}

li.header {
  float: left;
}

/* clear'n floats */
ul:after {
  clear: both;
}

ul:before,
ul:after {
    content: " ";
    display: table;
}

nav {
  position: relative;
  background: #2B2B2B;
  background-image: -webkit-linear-gradient(bottom, #2B2B2B 7%, #333333 100%);
  background-image: -moz-linear-gradient(bottom, #2B2B2B 7%, #333333 100%);
  background-image: -o-linear-gradient(bottom, #2B2B2B 7%, #333333 100%);
  background-image: linear-gradient(bottom, #2B2B2B 7%, #333333 100%);
  text-align: center;
  letter-spacing: 1px;
  text-shadow: 1px 1px 1px #0E0E0E;
  -webkit-box-shadow: 2px 2px 3px #888;
  -moz-box-shadow: 2px 2px 3px #888;
  box-shadow: 2px 2px 3px #888;
  border-bottom-right-radius: 8px;
  border-bottom-left-radius: 8px;
}

/* prime */
ul.primary li a {
  display: block;
  padding: 20px 30px;
  border-right: 1px solid #3D3D3D;
}

ul.primary li:last-child a {
  border-right: none;
}

ul.primary li a:hover {
  
  color: #000;
}

/* subs */
ul.sub {
  position: absolute;
  z-index: 200;
  box-shadow: 2px 2px 0 #BEBEBE;
  width: 35%;
  display:none;
}

ul.sub li {
  float: none;
  margin: 0;
}

ul.sub li a {
  border-bottom: 1px dotted #ccc;
  border-right: none;
  color: #000;
  padding: 15px 30px;
}

ul.sub li:last-child a {
  border-bottom: none;
}

ul.sub li a:hover {
  color: #000;
  background: #eeeeee;
}

/* sub display*/
ul.primary li:hover ul {
  display: block;
  background: #fff;
}

/* keeps the tab background white */
ul.primary li:hover a {
  background: #fff;
  color: #666;
  text-shadow: none;
}

ul.primary li:hover > a{
  color: #000;
} 

@media only screen and (max-width: 600px) {
  .decor {
    padding: 3px;
  }
  
  .wrap {
    width: 100%;
    margin-top: 0px;
  }
  
   li {
    float: none;
  }
  
  ul.primary li:hover a {
    background: none;
    color: #8B8B8B;
    text-shadow: 1px 1px #000;
  }

  ul.primary li:hover ul {
    display: block;
    background: #272727;
    color: #fff;
  }
  
  ul.sub {
    display: block;  
    position: static;
    box-shadow: none;
    width: 100%;
  }
  
  ul.sub li a {
    background: #272727;
    border: none;
    color: #8B8B8B;
  }
  
  ul.sub li a:hover {
    color: #ccc;
    background: none;
  }
}

.anhdau{
  text-align: center;
}
.anh{
  width: 1000px;
  height: auto;
  margin-top: -8px;
}












.card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 15%;
    float: left;
    margin-left: 10%;
    border-radius: 50px;
    margin-top: -75px;
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
    border-radius: 500px;
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
  .thongtin{
    margin: 0 auto;
    width:100%;
    height:100%;
    position: relative;
    margin-left: 7%;
    margin-top: 5%;
  }
  




</style>

<body>






<div class="anhdau">
  <img src="/flash/image/top.png" alt="" class="anh">
</div>






<div class="wrap">
<span class="decor"></span>
<nav>
  <ul class="primary">
    <li class="header">
      <a href="">Trang chủ</a>
      <ul class="sub">
      </ul>
    </li>
    <li class="header">
      <a href="">Phòng khách</a>
      <ul class="sub">
      </ul>
    </li>
    <li class="header">
      <a href="">Phòng bếp</a>
      <ul class="sub">
      </ul>  
    </li>
    <li class="header">
      <a href="">Phòng ngủ</a>
      <ul class="sub">
        <li class="header"><a href="">Tầng 2</a></li>
        <li class="header"><a href="">Tầng 3</a></li>
      </ul>  
    </li>
    <li class="header">
      <a href="">Nhà vệ sinh</a>
      <ul class="sub">
        <li class="header"><a href="">Tầng 1</a></li>
        <li class="header"><a href="">Tầng 2</a></li>
        <li class="header"><a href="">Tầng 3</a></li>
      </ul>  
    </li>
  </ul>
</nav>
</div>















<div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="http://justinfarrow.com">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Danh sách phòng
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="#">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Danh sách thiết bị
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Bảo mật
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Dữ liệu
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Biểu đồ và thống kê
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            Định vị
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Thông tin
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="#">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>

  <main>
    <div class="dautrang">
    </div>
    <div class="tang">
    

<body>
  <div class="thongtin">
  <div class="card" style="background-color: white">
  <div class="container">
    <p style="color: #224238; font-size: 35px;"><b>NHIỆT ĐỘ</b><p>
    <img src="/do_an/image/temp.png" alt="Avatar" style="width:92%;">
    <p style="color: #224238; font-size: 33px; margin-top: -8%;"><b><?php
    $result = mysqli_query($conn, "SELECT temp FROM tbl_doan");
    $numResults = mysqli_num_rows($result);
    $counter = 0;
    while ($row = mysqli_fetch_array($result)) {
        if (++$counter == $numResults) {
            echo $row['temp'];
        }}?>°C</b><p>
    <a href="/do_an/chart.php"><button class="nude">Xem đồ thị</button></a>
  </div>  
</div>


<div class="card" style="background-color: white">
  <div class="container">
    <p style="color: #224238; font-size: 35px;"><b>ĐỘ ẨM</b><p>
    <img src="/do_an/image/humi.png" alt="Avatar" style="width:92%;">
    <p style="color: #224238; font-size: 33px; margin-top: -8%;"><b><?php
    $result = mysqli_query($conn, "SELECT hum FROM tbl_doan");
    $numResults = mysqli_num_rows($result);
    $counter = 0;
    while ($row = mysqli_fetch_array($result)) {
        if (++$counter == $numResults) {
            echo $row['hum'];
        }}?>%</b><p>
    <a href="/do_an/chart1.php"><button class="nude">Xem đồ thị</button></a>
  </div>  
</div>



<div class="card" style="background-color: white">
  <div class="container">
    <p style="color: #224238; font-size: 35px;"><b>BẬT/TẮT ĐÈN</b><p>
    <img src="/flash/image/light.png" alt="Avatar" style="width:92%;">
    <p style="color: #224238; font-size: 33px; margin-top: -8%;"><b>Đang Bật</b><p>
    <button class="nude">Bật đèn</button>
    <button class="nude">Tắt đèn</button>
  </div>  
</div>
</div>



</body>
</div> <!--div tang 1-->
  </main>
</body>
</html>
