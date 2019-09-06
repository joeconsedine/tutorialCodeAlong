<h1>customers</h1>



<ul>

        @foreach ($customers as $customer)
        <li>{{ $customer }}</li>
        @endforeach


</ul>



{{-- 
    // vanilla php
    
    // foreach ($customers as $customer){
    //     echo '<li>' . $customer . '</li>';
    // } --}}
