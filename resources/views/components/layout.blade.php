<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App</title>

    {{-- css --}}
    @vite('resources/css/app.css')

</head>
<body>
    {{-- //check for flashes --}}
    @if (session('success'))
    <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
        {{session('success')}}
    </div>
    @endif


    <header>
        <nav>
            <h1>My App</h1>
            <a href="{{ route('players.index')  }}">All Players</a>
            <a href="{{ route('players.create') }}">Create New Player</a>
        </nav>
    </header>

    <main class="container">
        {{-- slot is where the view content will be rendered --}}
        {{ $slot }}
    </main>

</body>
</html>
