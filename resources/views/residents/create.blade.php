@extends('layouts.main')


@section('content')

<link rel="stylesheet" type="text/css" href="{{url('css/flex.css')}}">
  <!-- Page Heading -->

                    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div  class="alert alert-info"  >
                    {{ __('Fill Up Form') }}
                  
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('residents.store') }}">
                        @csrf
                  
                        <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                                @error('lname')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control @error('name') is-invalid @enderror"
                                 name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                                @error('fname')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mname" class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

                            <div class="col-md-6">
                                <input id="mname" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="mname" value="{{ old('mname') }}" required autocomplete="mname" autofocus>

                                @error('mname')
                                    <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        


                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="age" value="{{ old('age') }}" required autocomplete="age">

                                @error('age')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      
                        <div class="form-group row">
                            <label for="brgy" class="col-md-4 col-form-label text-md-right">{{ __('Barangay') }}</label>

                            <div class="col-md-6">
                            
                                {{ old('brgy') == '1' ? 'selected' : '' }}
                          
                            <select id="brgy" required="" name="brgy" class="form-control">
                                <option value="">--Select--</option>
                                <option {{ ($resident->brgy) == 'Acnam' ? 'selected' : '' }}  value="Acnam">Acnam</option>
                                <option {{ ($resident->brgy) == 'Barangobong' ? 'selected' : '' }}  value="Barangobong">Barangobong</option>
                                <option {{ ($resident->brgy) == 'Barikir' ? 'selected' : '' }}  value="Barikir">Barikir</option>
                                <option {{ ($resident->brgy) == 'Bugayong' ? 'selected' : '' }}  value="Bugayong">Bugayong</option>
                                <option {{ ($resident->brgy) == 'Cabittauran' ? 'selected' : '' }}  value="Cabittauran">Cabittauran</option>
                                <option {{ ($resident->brgy) == 'Caray' ? 'selected' : '' }}  value="Caray">Caray</option>
                                <option {{ ($resident->brgy) == 'Garnaden' ? 'selected' : '' }}  value="Garnaden">Garnaden</option>
                                <option {{ ($resident->brgy) == 'Naguillan(pagpag-ong)' ? 'selected' : '' }}  value="Naguillan(pagpag-ong)">Naguillan(pagpag-ong)</option>
                                <option {{ ($resident->brgy) == 'Poblacion' ? 'selected' : '' }}  value="Poblacion">Poblacion</option>
                                
                                <option {{ ($resident->brgy) == 'Santo Niño' ? 'selected' : '' }}  value="Santo Niño">Santo Niño</option>

                            </select>
           
                                @error('brgy')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                     
                        <div class="form-group row">
                            <label for="placeofbirth" class="col-md-4 col-form-label text-md-right">{{ __('Town') }}</label>

                            <div class="col-md-6">
                                <input id="town" type="text" class="form-control" 
                                name="town" value="{{ old('town') }}"   autofocus>

                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('Province') }}</label>

                            <div class="col-md-6">
                      <input disable id="province" type="text" class="form-control" name="province" 
                      placeholder="Ilocos Norte" value="Ilocos Norte">
         
                                @error('province')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                  
                        <div class="form-group row">
                            <label for="placeofbirth" class="col-md-4 col-form-label text-md-right">{{ __('Place of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="placeofbirth" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="placeofbirth" value="{{ old('placeofbirth') }}" required autocomplete="placeofbirth" autofocus>

                                @error('placeofbirth')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dateofbirth" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dateofbirth" type="date" class="form-control @error('name') is-invalid @enderror" 
                                name="dateofbirth" value="{{ old('dateofbirth') }}" required autocomplete="dateofbirth" autofocus>

                                @error('dateofbirth')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    
                        <div class="form-group row">
                            <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Sex') }}</label>

                            {{ old('sex') == '1' ? 'selected' : '' }}
                            <div class="col-md-6">
                            <select id="sex" required="" name="sex" class="form-control">
    <option value="">--Select--</option>
    <option {{ ($resident->sex) == 'Male' ? 'selected' : '' }}  value="Male">Male</option>
    <option {{ ($resident->sex) == 'Female' ? 'selected' : '' }}  value="Female">Female</option>
  
  </select>
                                

                                @error('ps')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="civilstatus" class="col-md-4 col-form-label text-md-right">{{ __('Civil Status') }}</label>
                            {{ old('civilstatus') == '1' ? 'selected' : '' }}
                            <div class="col-md-6">
      
                            <select id="civilstatus" required="" name="civilstatus" class="form-control">
    <option value="">--Select--</option>
    <option {{ ($resident->civilstatus) == 'Single' ? 'selected' : '' }}  value="Single">Single</option>
    <option {{ ($resident->civilstatus) == 'Married' ? 'selected' : '' }}  value="Married">Married</option>
    <option {{ ($resident->civilstatus) == 'Widowed' ? 'selected' : '' }}  value="Widowed">Widowed</option>
    <option {{ ($resident->civilstatus) == 'Divorced' ? 'selected' : '' }}  value="Divorced">Divorced</option>
  
  </select>
                             

                                @error('civilstatus')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="citizenship" class="col-md-4 col-form-label text-md-right">{{ __('Citizenship') }}</label>

                            <div class="col-md-6">
                      <input disable id="citizenship" type="text" class="form-control" name="citizenship" 
                      placeholder="Filipino" value="Filipino">
                      
                         
                                 
                               
                                @error('citizenship')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="occupation" class="col-md-4 col-form-label text-md-right">{{ __('Occupation') }}</label>

                            <div class="col-md-6">
                                <input id="occupation" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="occupation" value="{{ old('occupation') }}" required autocomplete="occupation" autofocus>

                                @error('occupation')
                                <span class="alert alert-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ps" class="col-md-4 col-form-label text-md-right">{{ __('4 PS') }}</label>

                            {{ old('ps') == '1' ? 'selected' : '' }}
                            <div class="col-md-6">
                            <select id="ps" required="" name="ps" class="form-control">
    <option value="">--Select--</option>
    <option {{ ($resident->ps) == 'No' ? 'selected' : '' }}  value="No">No</option>
    <option {{ ($resident->ps) == 'Yes' ? 'selected' : '' }}  value="Yes">Yes</option>
  
  </select>
                                

                                @error('ps')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                   



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                
                   
                                </button>
                                <button type="reset" value="Reset" class="btn btn-danger"> Reset</button>
                                <a href="{{ route('residents.index') }}" class="btn btn-info float-right">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection