<x-layout>
    <h2>{{ $player->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill level:</strong> {{$player->skill}} </p>
        <p><strong>About me:</strong></p>
        <p>{{$player->bio}}</p>
    </div>

    <a class="btn mt-5 inline-block" href="{{ route("players.index")}}">Back to Players List</a>
</x-layout>
