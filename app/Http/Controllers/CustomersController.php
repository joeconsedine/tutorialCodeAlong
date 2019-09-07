<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;


class CustomersController extends Controller
{
   // function called in the route 
   // defines the list array and  returns the view (which has the lists in it)
    public function list()
    {
        // defined by scope active
        // gets active and inactive customers respectively
        $activeCustomers = Customer::active()->get();
        $activeCustomers = Customer::inactive()->get();
       
        // before scope refactor
        // $activeCustomers = Customer::where('active',1)->get();
        // $inactiveCustomers = Customer::where('active',0)->get();
        // $customers = Customer::all();

        // dd($inactiveCustomers);
        
        // BEFORE COMPACT REFACTOR
     
        // return view('internals.customers', [
        //     // 'customers' => $customers,
        //     'activeCustomers' => $activeCustomers,
        //     'inactiveCustomers' => $inactiveCustomers,
        // ]);
     
     
        // compact refactor
        return view('internals.customers', compact('activeCustomers', 'inactiveCustomers'));


    }

    public function store ()
    {
        $data = request()->validate([

            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required'

        ]);

        $customer = new Customer();
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->active = request('active');
        $customer->save();

        return back();
        //dd(request('name'));
    }


}