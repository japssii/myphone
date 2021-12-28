


@extends('layouts.main')


@section('content')

<div class="row">
<div class=" card mx-auto">

<div> 
       @if (session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
            </div>
                @endif
</div>

    <div class="card-header">
    <div class="row">
           <div class="col">
               <form method="GET" action="{{ route('residents.index')}}">
                   <div class="form-row align-items-center">
                  
              
                <a href="{{ route('residents.index') }}" class="btn btn-info float-right">Back</a>
            
            </div>
             
            </form>
        
            </div>
       
    </div>
            
</div>
<div class="card-body">

  <thead>
  
 
 <h3> <b> Resident Information</b> </h3>
      <h2> <b> Name:</b> {{ $resident->fname}}  {{ $resident->mname}} {{ $resident->lname}}</h2>
    <h3><b>Age:</b> {{ $resident->age}} </h3>
    <h3><b> Date of Birth:</b> {{ $resident->dateofbirth}} </h3>
    <h3> <b>Address:</b> {{ $resident->brgy}}, {{ $resident->town}}, {{ $resident->province}} </h3>
    <h3> <b>Place of Birth:</b> {{ $resident->placeofbirth}} </h3>
    <h3> <b> Civil Status:</b> {{ $resident->civilstatus}} </h3>
    <h3> <b>Citizenship:</b> {{ $resident->citizenship}} </h3>
    <h3> <b>Occupation:</b> {{ $resident->occupation}} </h3>
    <h3> <b>4 PS:</b> {{ $resident->ps}} </h3>







   
 
  

  <tbody>

 <tr>
 
   
    
  
    </tr>

  </tbody>



</div>
</div>

</div>
    @endsection