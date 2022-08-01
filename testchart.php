<?php
$con  = mysqli_connect("localhost","root","root","doan");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT * FROM chart";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
              $sec[] = $row['sec'];
              $min[] = $row['min'];
              $hour[] = $row['hour'];
              $day[] = $row['day'];
              $month[] = $row['month'];
              $year[] = $row['year'];
              $count[] = $row['count'];
        }
 
 
 }
 
?>
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đồ thị đường</title> 
    </head>
    <body>    
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<body>
<canvas id="myChart" style="width: 100%;max-width: 1200px; margin: 0 auto;"></canvas>
<script type="text/javascript">
      var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels:<?php echo json_encode($sec); ?>,
                        datasets: [{
                            fill: false,
                            lineTension: 0,
                            backgroundColor: "rgba(0,0,255,1.0)",
                            borderColor: "rgba(0,0,255,0.1)",
                            data:<?php echo json_encode($count); ?>,
                        }]
                    },
                    options: {
                      title: {
                        display: true,
                        text: 'Số lượng ong theo thời gian'
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        },
                        legend: {display: false},
                        scales: {
                            xAxes: [{
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Thời gian (giây)'
                                }
                            }],
                            yAxes: [{
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Số lượng ong (con)'
                                }
                            }]
                        },
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    }
 
 
                });
    </script>
    <div class="filterchart" style="text-align: center;">
    <form action="/testchart.php">
    <label for="loc">Lọc theo</label>
      <select name="loc" id="loc">
        <option value="giay">Giây</option>
        <option value="phut">Phút</option>
        <option value="gio">Giờ</option>
        <option value="ngay">Ngày</option>
        <option value="thang">Tháng</option>
      </select>
      <br></br>
    <input type="text" name="" value="2022-06-22 09:30:25" id="time1" style="width: 125px;">
    <!--<label><strong>Từ :</strong></label>
    <label>Giờ : Phút : Giây: </label>
    <input type="text" name="" value="11" id="hour1" style="width: 15px;">
    <label>:</label>
    <input type="text" name="" value="19" id="min1" style="width: 15px;">
    <label>:</label>
    <input type="text" name="" value="15" id="sec1" style="width: 15px;">
    <label>-----</label>
    <label>Ngày / Tháng / Năm:</label>
    <input type="text" name="" value="21" id="day1" style="width: 15px;">
    <label>/</label>
    <input type="text" name="" value="6" id="month" style="width: 15px;">
    <label>/</label>
    <input type="text" name="" value="2022" id="year1" style="width: 30px;">
    <br></br>-->
    <input type="text" name="" value="2022-06-22 09:30:30" id="time2" style="width: 125px;">
    <!--<label><strong>Đến:</strong></label>
    <label>Giờ : Phút : Giây: </label>
    <input type="text" name="" value="11" id="hour2" style="width: 15px;">
    <label>:</label>
    <input type="text" name="" value="19" id="min2" style="width: 15px;">
    <label>:</label>
    <input type="text" name="" value="15" id="sec2" style="width: 15px;">
    <label>-----</label>
    <label>Ngày / Tháng / Năm:</label>
    <input type="text" name="" value="21" id="day2" style="width: 15px;">
    <label>/</label>
    <input type="text" name="" value="6" id="month2" style="width: 15px;">
    <label>/</label>
    <input type="text" name="" value="2022" id="year2" style="width: 30px;">-->
    <br></br>
    <input type="submit" value="Lọc">
    </form>
  </div>
</body>
</html>
