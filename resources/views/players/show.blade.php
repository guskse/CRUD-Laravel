<x-layout>
    <h2>{{ $player->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill level:</strong> {{$player->skill}} </p>
        <p><strong>About me:</strong></p>
        <p>{{$player->bio}}</p>
    </div>

    {{-- company info --}}
    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Dojo Information</h3>
        <p><strong>Dojo name:</strong> {{$player->company->name}} </p>
        <p><strong>Location:</strong> {{$player->company->location}} </p>
        <p><strong>About the company:</strong></p>
        <p>{{ $player->company->description}}</p>
    </div>


    {{-- Delete player form --}}
    <form action="{{route('players.destroy', $player->id)}}" method="POST">
        @csrf
        @method('DELETE')

        <button class="btn my-4" type="submit">Delete Player</button>
    </form>



    <a class="btn mt-5 inline-block" href="{{ route("players.index")}}">Back to Players List</a>
</x-layout>
