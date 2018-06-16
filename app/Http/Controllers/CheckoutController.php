<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{

      /**
       * shows the view of checkout page
       * @return view
       */
      public function index()
      {
            return view('checkout.index');
      }


      /**
       * shows the view of checkout thank you page
       * @return view
       */
      public function checkoutThankYou()
      {
            return view('checkout.thank-you');
      }
}
