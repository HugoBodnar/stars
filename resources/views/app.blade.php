<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Stars</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div id="app" data-stars="{{ json_encode($stars) }}"></div>
    @vite('resources/js/app.js')
</body>
</html>
