<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BackOffice : création</title>
    <link rel="stylesheet" href="{{ asset('css/backoffice.css') }}">
</head>
<body>
    <h1>BackOffice : création</h1>
    <div>
        <a href="{{ route('stars.index') }}"><button>< Retour</button></a>
    </div>
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
