<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BackOffice : création</title>
    <style>
        input {
            display: block;
            width: 300px;
            height: 26px;
            margin: 10px;
        }
        textarea {
            display: block;
            width: 300px;
            height: 200px;
            margin: 10px;
        }
        button {
            display: block;
            width: 100px;
            height: 26px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <p><a href="{{ route('stars.index') }}">< Retour</a></p>
    <form action="{{ route('stars.store') }}" method="POST">
        @csrf
        <input type="text" name="firstname" placeholder="Prénom">
        <input type="text" name="lastname" placeholder="Nom">
        <input type="text" name="image" placeholder="Image URL">
        <textarea name="description" placeholder="Description"></textarea>
        <button type="submit">Créer</button>
    </form>
</body>
</html>
