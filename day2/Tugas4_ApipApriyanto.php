<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Form</title>
</head>
<body>
  <h3>Belajar Form</h3>
  <form action="#" method="get">
    Jumlah Bintang : <input type="number" name="total" id="">
    <br>
    <button type="submit">Simpan</button>
  </form>

  <?php
    error_reporting(0);
    $total = $_GET['total'];

    if ($total) {
      for ($col = 0; $col < $total; $col++) {
        for ($row = 0; $row <= $col; $row++) {
          echo '*';
        }
        echo '<br>';
      }  
    }
  ?>
</body>
</html>