<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<body class="container">

<?php
// Action form
if (isset($_GET['submit'])) {
    // Input form
    $kelamin    = $_GET['kelamin'];
    $tb            = $_GET['tb'];
    $bb            = $_GET['bb'];
       
    // Hitung BMI
    $bmi        = $bb / ($tb * $tb);

    // Mencetak hasil
    echo '<div class="hasil">';
    echo "<h3>Hasil BMI</h3>";
    echo "Jenis kelamin: $kelamin<br>";
    echo "Tinggi Badan: $tb centimeter<br>";
    echo "Berat Badan: $bb kilogram<br>";
    echo "<hr>BMI Anda: ".number_format($bmi);
    echo "<h4>Kesimpulan:</h4>";

    // Menghitung dan mencetak kesimpulan perempuan
    if($bmi < 18) {
        echo "kurus";
    }elseif ($bmi < 25 ) {
        echo "normal";
    }elseif ($bmi < 27 ) {
        echo "kegemukant";
    }else {
        echo "gemuk banget";
    }
    // closing div
    echo '</div>'."<br>"."<br>";
}

?>
<form    methot="get" action="">
    Tinggi badan (cm) <br>
    <input type="text" name="tb"><br>
    Berat badan (kg)<br>
    <input type="text" name="bb"><br><br>
    Jenis kelamin
    <select name="kelamin">
        <option value="laki-laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
    </select><br><br>

    <input type="submit" name="submit" value="Hitung BMI" class="btn btn-primary">

</div>
</form>
</body>
</html>