@extends('layouts.main')

@section('content')


  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 >Barangay Information System</h1>
                       
                    </div>
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
                     
      
                       <div class="col">
                           <input type="search" name="search" class="form-control mb-2" id="inlineFormInput"
                                    placeholder="Search">

                    </div>
          <div class="col">
                        <button type="submit" class="btn btn-primary mb-2">Search</button>
                       
                </div>
              
            </div>

            </form>
            
            </div>
            <div>
                <a href="{{route('residents.create') }}" class="btn btn-success">Add Resident</a>
                    </div>
                </div>
            
        </div>
            <div class="card-body flex justify-center align-items-center">
              <table class="table table-hover table-bordered table-responsive  ">
              <thead>
                <tr>
                  
                  
                  <th scope="col">Last Name</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Middle Name</th>
                  <th scope="col">Age</th>
                  <th scope="col">Barangay</th>
                  <th scope="col">Operation</th>
                  
                </tr>
              </thead>
              <tbody>
          @foreach($residents as $resident)
          <tr>
                
                <td>{{ $resident->lname}}</td>
                <td>{{ $resident->fname}}</td>
                <td>{{ $resident->mname}}</td>
                <td>{{ $resident->age}}</td>
                <td>{{ $resident->brgy}}</td>
              

                <td> 
                  <div class="row g-0">

                  <div class="col mx-0">
                  <a href="{{route('residents.show',$resident->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> </a> 
          </div>
                
                  <div class="col mx-0">
                  <a href="{{route('residents.edit',$resident->id) }}" class="btn btn-primary" >
                    <i class="fa fa-edit"></i> </a> 
          </div>
     

          <div class="col mx-0">
          <form  action="{{route('residents.destroy', $resident->id) }}" method="POST">
<!-- Button trigger modal -->
@csrf
@method('DELETE')
<button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete? ')"><i class="fa fa-trash-alt"></i></button>
          </form>
</div>
 

</div>

      
      </td>

    </tr>
  @endforeach
  </tbody>
</table>
{{$residents->links()}}

</div>
</div>

</div>
    @endsection