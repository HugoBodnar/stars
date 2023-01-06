<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BackOffice : stars</title>
    <style>
        .success {
            color: green;
        }

        .star {
            display: inline-block;
            border: 1px solid #aaa;
            margin: 20px 0;
            padding: 10px;
        }

        form {
            display: inline-block;
        }

        a, button {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    @if ($message = Session::get('success'))
        <p class="success">{{ $message }}</p>
    @endif
    <div class="stars">
        @foreach ($stars as $star)
            <div class="star">
                {{ $star->firstname . ' ' . $star->lastname }}
                <a href="{{ route('stars.edit',$star->id) }}">Edit</a>
                <form action="{{ route('stars.destroy', $star->id) }}" method="Post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
    <p><a href="{{ route('stars.create') }}">+ Créer</a></p>
</body>
</html>
