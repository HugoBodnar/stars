<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BackOffice : édition</title>
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
