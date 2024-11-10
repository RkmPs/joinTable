

    <h2>Create Room</h2>

    <form action="{{ route('rooms.store') }}" method="POST">
        @csrf

        <label for="type">Type Room:</label>
        <select name="type" id="type" required>
            @foreach($roomTypes as $type)
                <option value="{{ $type->id }}">{{ $type->type }}</option>
            @endforeach
        </select>

        <label for="price">Price:</label>
        <input type="number" name="price" id="price" required>

        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="available">Available</option>
            <option value="booked">Booked</option>
        </select>

        <button type="submit">Create Room</button>
    </form>

