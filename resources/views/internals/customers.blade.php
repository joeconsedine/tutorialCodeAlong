@extends('layout')

@section('title', 'customer')


@section('content')

        <div class="row">
                <div class="col-12">
                        <h1>customers</h1>
                </div>
        </div>

        <div class="row">
                <div class="col-12">
                        <form action="customers" method="POST" class="pb-2">
                                <div class="form-group pb-2">
                                        <label for="name">name</label>
                                        <input type="text" name="name" value="{{ old('name')}}" class="form-control">         
                                        <div>{{ $errors->first('name') }}</div>
                                </div>
                                <div class="form-group pb-1">
                                        <label for="email">email</label>
                                        <input type="text" name="email" value="{{ old('email')}}" class="form-control">         
                                        <div>{{ $errors->first('email') }}</div>
                                </div>

                                <div class="form-group">
                                        <label for="active">status</label>
                                        <select name="active" id="active" class="form-control">
                                                <option value="" disabled>Select Customer status</option>
                                                <option value="1">active</option>
                                                <option value="0">inactive</option>
                                        </select>
                                </div>
                                
                                <div class="form-group">
                                        <label for="company_id">Company</label>
                                        <select name="company_id" id="company_id" class="form-control">
                                              @foreach ($companies as $company)
                                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                                                
                                              @endforeach
                                        </select>
                                </div>
                                
                                
                                <button type="submit" class="btn btn-primary">add customer</button>
                
                                @csrf
                        </form>
                </div>
        </div>

        <hr>

        <div class="row">
                <div class="col-6">
                        <h3>active</h3>
                        <ul>
                                @foreach ($activeCustomers as $activeCustomer)
                                <li>{{ $activeCustomer->name }} <span class="text-muted"> ({{ $activeCustomer->email }})</span></li>
                                @endforeach
                        </ul>
                </div>
     
                <div class="col-6">
                        <h3>inactive</h3>
                        <ul>
                
                                @foreach ($inactiveCustomers as $inactiveCustomer)
                                <li>{{ $inactiveCustomer->name }} <span class="text-muted"> ({{ $inactiveCustomer->email }})</span></li>
                                @endforeach
                        </ul>
                </div>
        </div>

@endsection


{{-- 
    // vanilla php
    
    // foreach ($customers as $customer){
    //     echo '<li>' . $customer . '</li>';
    // } --}}
