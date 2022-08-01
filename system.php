<?php
$conn = mysqli_connect('localhost', "root", "root", "doan");
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
  <title>Đồ án Nhóm 3</title>
</head>




<div class="bang">
<table class="w3-table-all">
  <tr>
    <td>Số thứ tự</td>
    <td>Nhiệt độ</td>
    <td>Độ ẩm</td>
    <td>Ngày giờ</td>
  </tr>
  <?php $i = 1; ?>
  <?php foreach($rows as $row) : ?>
    <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $row['temp']; ?>*C</td>
      <td><?php echo $row['hum']; ?>%</td>
      <td><?php echo $row['datetime']; ?></td>
    </tr>
  <?php endforeach; ?>
</table>
</div>
