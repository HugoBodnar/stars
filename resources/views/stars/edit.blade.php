<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BackOffice : édition</title>
    <link rel="stylesheet" href="{{ asset('css/backoffice.css') }}">
</head>
<body>
    <h1>BackOffice : édition</h1>
    <div>
        <a href="{{ route('stars.index') }}"><button>< Retour</button></a>
    </div>
    <form action="{{ route('stars.update',$star->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="firstname" value="{{ $star->firstname }}" placeholder="Prénom">
        <input type="text" name="lastname" value="{{ $star->lastname }}" placeholder="Nom">
        <input type="text" name="image" value="{{ $star->image }}" placeholder="Image URL">
        <textarea name="description" placeholder="Description">{{ $star->description }}</textarea>
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>
