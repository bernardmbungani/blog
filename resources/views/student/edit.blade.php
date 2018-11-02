@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">EDIT STUDENT INFORMATION <span class="float-right"><a href="{{route('student.index')}}"> Cancel</a></span> </div>

                <div class="card-body">
                   
                    <form method="POST" action="{{route('student.update', $student)}}"  >
                     @csrf
                     @method('PATCH')
                          <div class="form-group">
                            <label>FULLNAME</label>
                            <input type="text" value="{{$student->fullname}}" class="form-control{{ $errors->has('fullname') ? ' is-invalid' : '' }}" name="fullname" placehoder=" FULLNAME">
                                @if ($errors->has('fullname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fullname') }}</strong>
                                    </span>
                                @endif
                          
                          
                          </div>
                          <div class="form-group">
                            <label>GENDER</label>
                            <input type="text" value="{{$student->gender}}" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" placehoder=" GENDER">
                          
                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                          
                          
                          </div>
                          <div class="form-group">
                            <label>RESIDENCE</label>
                            <input type="text" value="{{$student->residence}}" class="form-control{{ $errors->has('residence') ? ' is-invalid' : '' }}" name="residence" placehoder=" RESIDENCE">
                        
                                @if ($errors->has('residence'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('residence') }}</strong>
                                    </span>
                                @endif
                          
                        
                        
                        </div>
                          <div class="form-group">
                            <label>CONTACT</label>
                            <input type="text" value="{{$student->contact}}" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" name="contact" placehoder=" CONTACT">
                                @if ($errors->has('contact'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                @endif
                         
                         
                         
                          </div>
                          <div class="form-group">
                            <label>AGE</label>
                            <input type="number" value="{{$student->age}}" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="age" placehoder=" AGE">
                                @if ($errors->has('age'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                         
                         
                         
                         
                         
                          </div>
                            
                         

                          <div class="form-group">
                          <button type="submit" class="btn btn-primary">UPDATE</button>
                          </div>



                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
