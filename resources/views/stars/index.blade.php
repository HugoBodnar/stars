<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BackOffice : stars</title>
    <link rel="stylesheet" href="{{ asset('css/backoffice.css') }}">
</head>
<body>
    <h1>BackOffice</h1>
    @if ($message = Session::get('success'))
        <div class="alert success">{{ $message }}</div>
    @endif
    <div class="stars">
        @foreach ($stars as $star)
            <div class="star">
                <div class="name">{{ $star->firstname . ' ' . $star->lastname }}</div>
                <a href="{{ route('stars.edit',$star->id) }}"><button>Edit</button></a>
                <form action="{{ route('stars.destroy', $star->id) }}" method="Post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        @endforeach
        <a href="{{ route('stars.create') }}"><button>+ Créer</button></a>
    </div>
</body>
</html>
