<!DOCTYPE html>
<html>
  <head>
    <meta charset = "UTF-8" />
    <title>Fucntion List</title>
    <style type = "text/css">
      table {
        border:0;
        border-collapse : collapse;
        border-spacing : 0;
      }
      table td, table th{
        border : 1px, solid;
        padding : 2px 5px 2px 5px;
      }
      .text-center {text-align: center;}
      .text-right {text-align : right; }
    </style>
  </head>
  <body>
    <?php
      $fucntion = $_POST['searchterm'];
      $conn = mysqli_connect('localhost', 'root', 'root12', 'oss');
      if ( !$conn ) die('DB Error');
        mysqli_query($conn, 'set session character_set_connection=utf8;');
        mysqli_query($conn, 'set session character_set_results=utf8;');
        mysqli_query($conn, 'set session character_set_client=utf8;');

        $query = "select * from function where 이름 = '$fucntion'";
        $result = mysqli_query($conn, $query);
        echo '<table class="text-center"><tr>' .
                '<th>이름</th><th>헤더</th><th>설명</th>' .
                '</tr>';
        while( $row = mysqli_fetch_array($result) ) {
              echo '<tr><td>' . $row['이름'] . '</td>' .
                  '<td>' . $row['헤더'] . '</td>' .
                  '<td class="text-right">' . $row['내용'] . '</td></tr>';
                    }
                    echo '</table>';
                       mysqli_close($conn);
       ?>
     </body>
</html>
