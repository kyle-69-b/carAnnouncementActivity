<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewcarproductEmail;

class CarEmailController extends Controller
{
    public function send(Car $car)
{
    $emails = [
        'knnm4240@gmail.com',
    ];

    foreach ($emails as $email) {
        Mail::to($email)
            ->send(new NewcarproductEmail($car));
    }

    return back()->with('success', 'Emails sent successfully!');
}


}
