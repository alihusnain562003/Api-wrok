<?php


if (isset($_POST["booksSlug"])) {
    $bookslug = $_POST["booksSlug"];
    $chapterNum = $_POST["chapnum"];
    $apikey = '$2y$10$BylaBcXs5Lw7ZOtYmQ3PXO1x15zpp26oc1FeGktdmF6YeYoRd88e';
    $response = file_get_contents("https://hadithapi.com/api/hadiths?apiKey=$apikey&book=$bookslug&chapter=$chapterNum&paginate=1000000");

    $response = json_decode($response, true);

    $hadithchapters = $response["hadiths"]["data"];
} ?>


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
        }

        @font-face {
            font-family: "jameel";
            src: url(fonts/jameel.ttf);
        }

        .arabic {
            font-family: 'Amiri Quran', serif;
            background-color : #00FFFF;
        }

        .urdu {
            font-family: "jameel";
            background-color : #00FFFF;
        }

        h1{
            text-align:center;
            background-color: silver;
            color:teal;
        }


        h2 {
            background-color: #728FCE;
            color: teal;
            width: 100%;
            height: 200%;

            margin: 100px ,100px;


        }
        h3 {
            background-color: #728FCE;
            color: teal;
            width: 100%;
            height: 200%;

            margin: 100px ,100px;


        }
        p{
            background-color: #C7C0BF; 
            margin: 5px 10px; 
            padding: 5px 10px;
        
        }

    </style>
</head>

<body>
    <div class="container">

        <?php
        foreach ($hadithchapters as  $value) {



            echo '

               
                  <h1 class="arabic" >' . $value["hadithNumber"] . '</h1>
                  <h1 class="arabic" >' . $value["headingArabic"] . '</h1>
                  <p>' . $value["hadithArabic"] . '</p>
                
<div class="row">


<div class="col-md-6"> 
   <h2>' . $value["headingEnglish"] . '</h2>
   <p>' . $value["hadithEnglish"] . '</p>
                  </div>
<div class="col-md-6">   
 <h3 class="urdu" >' . $value["headingUrdu"] . '</h3>
 <p class="urdu">' . $value["hadithUrdu"] . '</p>
 </div>
</div>
                  
                ';
        }

        ?>


    



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>