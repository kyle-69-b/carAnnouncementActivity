<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Car;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewcarproductEmail;


class CarEmailController extends Controller
{
    public function send(Car $car)
{
   $customers = Customer::pluck('email');

    foreach ($customers as $email) {
        Mail::to($email)
            ->send(new NewcarproductEmail($car));
    }

    return back()->with('success', 'Emails sent successfully!');
}


}
