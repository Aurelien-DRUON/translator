<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Traducteur</h1>
    <span>Texte à traduire</span>
    <form action="/translate" method="post">
        @csrf
        <input type="text" name="translation">
        <input type="submit" value="Let's a go (mario)">
</body>

</html>
