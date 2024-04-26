<?php
include 'connection/conn.php';
$conn = connection();



// do {

//   echo $row['DATE']." ".$row['TIME']." ".$row['HEIGHT']."</br>";

// }while($row = $data->fetch_assoc());


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Real Time data</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>


  <div id="dataContainer">


  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
  <script>
        $(function() {
            $.ajax({
                url: 'system.php',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Handle the received data here
                    console.log(data);
                    if (data.length > 0) {
                        var html = '<ul>';
                        $.each(data, function(index, item) {
                            html += '<li>' + item.DATE + " " + item.TIME + " " + item.HEIGHT + '</li>'; // Adjust 'column_name' according to your database schema
                        });
                        html += '</ul>';
                        $('#dataContainer').html(html);
                    } else {
                        $('#dataContainer').html('No data found.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching data:", error);
                }
            });
        });
    </script>
</body>
</html>