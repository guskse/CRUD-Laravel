<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App | Home</title>

    {{-- css --}}
    @vite('resources/css/app.css')

</head>
<body class="text-center px-8 py-12">
    <h1>Welcome to My App</h1>

    <p>Click the button below to view the list of players</p>

    <a href="{{ route('players.index') }}" class="btn mt-4 inline-block">Find or Create Players</a>

</body>
</html>
