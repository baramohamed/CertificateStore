<?php
namespace App\Http\Controllers;

use App\User;
use App\Reservation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function makeReservation(Request $request)
    {
        
        $reservation = new Reservation;

        $reservation->firstName = $request->firstName;
        $reservation->lastName = $request->lastName;
        $reservation->email = $request->email;
        $reservation->birthDate = $request->birthDate;
        $reservation->phone = $request->phone;
        $reservation->totalAmount = $request->totalAmount;
        $reservation->stateId = 1;
        $reservation->courseId = $request->courseId;
        $reservation->testSessionId = $request->testSessionId;
        $reservation->paymentMethodId = $request->paymentMethodId;

        
        /*
        $request->input('firstName');
        $request->input('lastName');
        $request->input('email');
        $request->input('birthDate');
        $request->input('phone');
        $request->input('testSessionId');
        $request->input('paymentMethodId');*/
        $reservation->save();
        
    }
}

?>