<x-layout>
    <h2>All Players</h2>
    <ul>
        @foreach($players as $player)
        <li>
            <x-card href="{{ route('players.show', $player->id) }}" :highlight="$player['skill'] > 80">
                <div>
                    <h3>{{$player->name}}</h3>
                    <p>{{$player->company->name}}</p>
                </div>
            </x-card>
        </li>
        @endforeach
    </ul>

    {{-- laravel will add pagination --}}
    {{ $players->links()}}

    <a href="/" class="btn mt-5 inline-block">Back</a>
</x-layout>
