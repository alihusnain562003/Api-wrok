<?php
if (isset($_POST["reader"])) {
    $num = $_POST["reader"];

 
    $response = file_get_contents("https://api.alquran.cloud/v1/surah/$num/ar.abdurrahmaansudais");
    $response = json_decode($response, true);


    if (isset($response["data"]["ayahs"])) {
        $data = $response["data"]["ayahs"];
    } else {
        $data = [];
        $error_message = "No data found or invalid response.";
    }
} else {
    $data = [];
    $error_message = "No surah number provided.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quranic Verses</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400..700&display=swap" rel="stylesheet">

    <style>
        body {
            direction: rtl;
            font-family: 'Amiri Quran', serif;
            margin: 50px 100px;
            padding: 50px 100px;
            background-color: #f4f4f4;
        }
        p {
            background-color: #C7C0BF;
            margin: 5px 10px;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .container {
            background-color: #728FCE;
            color: teal;
            padding: 20px;
            border-radius: 10px;
        }
        audio {
            display: block;
            margin-top: 10px;
        }
        .error {
            color: red;
        }
    </style>
</head>

<body>

<div class="container">
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $value): ?>
            <p><?php echo htmlspecialchars($value["text"]); ?></p>
            <audio controls src="<?php echo htmlspecialchars($value["audio"]); ?>"></audio>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="error"><?php echo isset($error_message) ? htmlspecialchars($error_message) : "No data available."; ?></p>
    <?php endif; ?>
</div>

</body>

</html>
