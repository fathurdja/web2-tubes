<?php

namespace App\Http\Controllers;

use App\Models\reservations;
use App\Http\Requests\StorereservationsRequest;
use App\Http\Requests\UpdatereservationsRequest;
use Illuminate\Http\Request;
use Alert;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = reservations::all(); // Mengambil semua data dari tabel reservations

        return view('admin.orders.index', compact('reservations'));
    }
    public function complete($id)
    {
        $order = \App\Models\reservations::findOrFail($id);
        $order->status = 'completed';
        $order->save();

        // Redirect back with success message
        Alert::success('Successful!', 'Reservations status updated to completed.');
        return redirect()->back();
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'email' => 'required|email',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|regex:/[0-9]{4}[0-9]{4}[0-9]{4}/',
            'date' => 'required|date',
            'table_type' => 'required|string|in:Indoor,Outdoor,VIP',
        ]);

        // Combine first_name and last_name
        $name = $validatedData['first_name'] . ' ' . $validatedData['last_name'];

        // Create a new reservation
        $reservation = new reservations();
        $reservation->email = $validatedData['email'];
        $reservation->nama = $name;
        $reservation->phone = $validatedData['phone'];
        $reservation->date = $validatedData['date'];
        $reservation->table = $validatedData['table_type'];
        $reservation->status = 'processing'; 
        $reservation->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Reservation successfully made!');
    }
    /**
     * Store a newly created resource in storage.
     */
    

    /**
     * Display the specified resource.
     */
    public function show(reservations $reservations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reservations $reservations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatereservationsRequest $request, reservations $reservations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reservations $reservations)
    {
        //
    }
}
