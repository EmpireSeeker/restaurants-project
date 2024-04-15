<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Booking; // Assuming you have a Booking model
use App\Mail\BookingNotification;

class BookingController extends Controller
{
    // Method to show the booking form
    public function create()
    {
        return view('/booking');
    }

    // Method to store the booking data
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'checkin' => 'required|date',
            'time' => 'required',
            'guests' => 'required|integer',
        ]);

        // Create a new booking
        $booking = new Booking();
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->checkin = $request->checkin;
        $booking->time = $request->time;
        $booking->guests = $request->guests;
        $booking->save();




        // Redirect back with success message
        return redirect()->route('land')->with('success', 'Booking created successfully! An email notification has been sent.');
    }
}

