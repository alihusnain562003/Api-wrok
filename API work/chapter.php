<?php


if (isset($_POST["bookSlug"])) {
    $bookslug = $_POST["bookSlug"];
    $key = '$2y$10$sVGWfpcINzznkJ8JbKon2DsdrXl756lCKrfOghvvh6trm11XmcG';
    $response = file_get_contents("https://hadithapi.com/api/$bookslug/chapters?apiKey=$key");

    $response = json_decode($response, true);

  

    $hadithchapters = $response["chapters"];
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
      
      body{direction: rtl;}
        @font-face {
            font-family: "jameel";
            src: url(fonts/jameel.ttf);
        }

        .arabic {
            font-family: 'Amiri Quran', serif;
        }

        .urdu {
            font-family: "jameel";

        }
    </style>


</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            foreach ($hadithchapters as  $index) {



                echo '
                  <div class="col-md-6 col-sm-12 mb-4">

                <div class="card" ">
                
                    <div class="card-body">
                        <h5 class="card-title arabic" >' . $index["chapterArabic"] . '</h5>
                        <p class="card-text urdu">  ' . $index["chapterUrdu"] . ' </p>
                        <p class="card-text urdu">  ' . $index["chapterEnglish"] . ' </p>
                          
                        <form action="hadith.php" method="post">
                <input type="hidden"  name="booksSlug" value="' . $index['bookSlug'] . '">
                <input type="hidden"  name="chapnum" value="' . $index['chapterNumber'] . '">

                <input type="submit" class="btn btn-dark" value="Read Hadiths">
            </form>
                    </div>
                </div>
            </div>';
            }

            ?>


        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>