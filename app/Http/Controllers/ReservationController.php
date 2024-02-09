<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Car;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // Valider les données du formulaire de réservation
        $validatedData = $request->validate([
            'car_id' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            // autres règles de validation
        ]);

        $car = Car::findOrFail($validatedData['car_id']);
        if (!$car->isAvailable($validatedData['start_date'], $validatedData['end_date'])) {
            return redirect()->back()->with('error', 'La voiture n\'est pas disponible pour les dates spécifiées.');
        }
    
        // Créer une nouvelle réservation
        $reservation = Reservation::create([
            'user_id' => auth()->id(),
            'car_id' => $validatedData['car_id'],
            'start_date' => $validatedData['start_date'],
            'end_date' => $validatedData['end_date'],
            // autres attributs de réservation
        ]);
        // Rediriger ou afficher un message de succès
        return redirect()->back()->with('success', 'Reservation made successfully!');
    }

    public function index()
{
$viewData = [];
$viewData["reservations"] = Reservation::all();
return view('admin.reservation.reservation')->with("viewData", $viewData);
}


public function delete($id)
{
Reservation::destroy($id);
return back();
}
}

