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
    <h1>Inserisci il paragrafo da censurare</h1>

    <form action="result.php" method="POST">
        <label for="paragraph">Inserisci il testo da censurare</label>
        <textarea name="paragraphInput" id="paragraph" cols="30" rows="10"></textarea>
        <label for="badwords">Inserisci la parola da censurare</label>
        <input type="text" name="badWords" id="badwords">
        <button type="submit">Censura</button>
    </form>
</body>
</html>