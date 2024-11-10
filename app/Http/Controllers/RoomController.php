<?php
namespace App\Http\Controllers;

use App\Models\rooms;
use App\Models\roomType;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function create()
    {
        $roomTypes = roomType::all(); 
        return view('rooms.create', compact('roomTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'price' => 'required|numeric',
            'status' => 'required|string',
        ]);

        rooms::create([
            'type' => $request->type,
            'price' => $request->price,
            'status' => $request->status,
        ]);

        return redirect()->route('rooms.index')->with('success', 'Room created successfully.');
    }

    public function index()
    {
        $rooms = rooms::with('roomType')->get();
        return view('rooms.index', compact('rooms'));
    }
}

