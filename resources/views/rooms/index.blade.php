
    <h2>Room List</h2>

    <table>
        <thead>
            <tr>
                <th>Room ID</th>
                <th>Type</th>
                <th>Price</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
                <tr>
                    <td>{{ $room->id }}</td>
                    <td>{{ $room->roomType->type }}</td>
                    <td>{{ $room->price }}</td>
                    <td>{{ $room->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
