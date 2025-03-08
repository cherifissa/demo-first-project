<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create article</title>
</head>

<body>
    <form action="{{ route('articles.store') }}" method="post">
        @csrf
        <input type="text" name='titre' placeholder="Entre votre titre">
        <br>
        <input type="text" name='description' placeholder="Entre votre description">
        <br>
        <input type="text" name='contenu' placeholder="Entre votre contenu">
        <button type="submit">Créer l'article</button>
    </form>
</body>

</html>
