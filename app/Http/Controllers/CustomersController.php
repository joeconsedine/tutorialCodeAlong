<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CustomersController extends Controller
{
   // function called in the route 
   // defines the list array and  returns the view (which has the lists in it)
    public function list()
    {
        $customers = [
            'steve doe',
            'jane doe',
            'barry doe',
            'barry dos',
        ];


        return view('internals.customers', [
            'customers' => $customers,
        ]);
    }
}
