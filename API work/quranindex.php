<?php
$response = file_get_contents("https://api.alquran.cloud/v1/meta");
$response = json_decode($response, true);


$QuranApi = $response["data"]["surahs"]["references"];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400..700&display=swap" rel="stylesheet">

    <style>
        body {
            direction: rtl;
            font-family: 'Amiri Quran', serif;
           
        }
h1{
  text-align :center;
  background-color:black;
  color :white;
 display: block ;


}

    </style>


</head>
  <body>
    
  <div class="container">
    <h1>QURAN APP</h1>
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Surah Name</th>
      <th scope="col">Surah English Name</th>
      <th scope="col">Surah English Name Tranalation</th>
      <th scope="col">Numder Of Ayahs</th>
      <th scope="col">Revelation Type</th>
      <th scope="col">Read Surah</th>
  
    </tr>
  </thead>
  <tbody>
  <?php

foreach ($QuranApi as  $index) {
    echo '<tr>
<th scope="row">' . $index["number"] . '</th>
<td>' . $index["name"] . '</td>
<td>' . $index["englishName"] . '</td>
<td>' . $index["englishNameTranslation"] . '</td>
<td>' . $index["numberOfAyahs"] . '</td>
<td>' . $index["revelationType"] . '</td>
<td>
   <form action="read.php" method="post">

<input type="hidden" name="reader" value="' . $index["number"] . '">
<input class="btn btn-primary" type="submit" value="Read Surah">
</form>



</td>
</tr>';
}

?>
  </tbody>
</table>




  </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

