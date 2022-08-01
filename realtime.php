<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Real Time Data Display</title>
  </head>
  <body onload = "table();">
    <script type="text/javascript">
      function table(){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
          document.getElementById("table").innerHTML = this.responseText;
        }
        xhttp.open("GET", "system.php");
        xhttp.send();
      }

      setInterval(function(){
        table();
      }, 1);
    </script>
    <div id="table">

    </div>
  </body>
</html>
