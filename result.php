<?php 
$paragraph = $_POST["paragraphInput"];
$badWords = $_POST["badWords"];

$censoredParagraph = str_replace($badWords, "***", $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h2>Paragrafo:</h2>
    <p> <?php echo $paragraph; ?></p>
    <p>La sua lunghezza è: <?php echo strlen($paragraph); ?></p>

    <h2>Paragrafo censurato:</h2>
    <p> <?php echo $censoredParagraph; ?></p>
    <p>La sua lunghezza è: <?php echo strlen($censoredParagraph); ?></p>

    <br>

    <a href="index.php">ritorna all'input</a>
</body>
</html>