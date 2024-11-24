<x-layout>
    <form action="{{route('players.store')}}" method="POST">

        {{-- // @csrf will protect the form from cross site refresh forgery --}}
        @csrf

        <h2>Create a New Player</h2>

        <!-- Player Name -->
        <label for="name">Player Name:</label>
        <input type="text" id="name" name="name" value="{{old('name')}}" autocomplete="off" required>

        <!-- Player Strength -->
        <label for="skill">Player Skill (0-100):</label>
        <input type="number" id="skill" name="skill" min=0 max=100 value="{{old('skill')}}" required>

        <!-- Player Bio -->
        <label for="bio">Biography:</label>
        <textarea rows="5" id="bio" name="bio" required>{{old('bio')}}</textarea>

        <!-- Select a company -->
        <label for=" company_id">company:</label>
        <select id="company_id" name="company_id" required>
            <option value="" disabled selected>Select a company</option>
            @foreach($companies as $company)
            <option value="{{ $company->id }}" {{ $company->id == old('company_id') ? 'selected' : '' }}>
                {{$company->name}}</option>
            @endforeach
        </select>

        <button type="submit" class="btn mt-4">Create Player</button>


        <!-- validation errors -->
        @if ($errors->any())
        <ul class="px-4 py-2 bg-red-100">
            @foreach($errors->all() as $error)
            <li class="my-2 text-red-500">{{ $error }}</li>
            @endforeach
        </ul>
        @endif


    </form>

    <a href="{{ route("players.index") }}" class="btn inline-block my-10">Back to Players List</a>


</x-layout>
