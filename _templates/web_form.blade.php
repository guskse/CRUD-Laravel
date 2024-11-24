<form action="" method="">
    <h2>Create a New Player</h2>

    <!-- Player Name -->
    <label for="name">Player Name:</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}" required>

    <!-- Player Strength -->
    <label for="skill">Player Skill (0-100):</label>
    <input type="number" id="skill" name="skill" required>

    <!-- Player Bio -->
    <label for="bio">Biography:</label>
    <textarea rows="5" id="bio" name="bio" required></textarea>

    <!-- select a company -->
    <label for="company_id">company:</label>
    <select id="company_id" name="company_id" required>
        <option value="" disabled selected>Select a company</option>

    </select>

    <button type="submit" class="btn mt-4">Create Player</button>

    <!-- validation errors -->

</form>
