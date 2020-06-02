<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LVR\CreditCard\CardCvc;
use LVR\CreditCard\CardNumber;
use LVR\CreditCard\CardExpirationYear;
use LVR\CreditCard\CardExpirationMonth;

class CreditCardController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function validateCard(Request $request)
    {
        $this->validate($request,[
            'card_number' => ['required', new CardNumber, 'size:16'],
            'expiration_year' => ['required', new CardExpirationYear($request->expiration_month)],
            'expiration_month' => ['required', new CardExpirationMonth($request->expiration_year)],
            'cvc' => ['required', new CardCvc($request->card_number),'numeric']
        ]);

        dd('Карта валидна');
    }

}
