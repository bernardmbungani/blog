@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">SHOW STUDENT INFORMATION
                <span class="float-right">
                                     <div class="btn-group">
                                       <a href="{{route('student.index')}}" class="btn btn-link">Back</a>
                                       <a href="{{route('student.edit',$student)}}" class="btn btn-link">Edit</a>
                                      </div>
                </span>
               
                
                 </div>

                <div class="card-body">
                   <b>
                  <p class="card-title">
                  FullName: {{ $student->fullname}}
                  </p>
                  <p class="card-title">
                  Gender: {{ $student->gender}}
                  </p>
                  <p class="card-title">
                  Residence: {{ $student->residence}}
                  </p>
                  <p class="card-title">
                  Contact: {{ $student->contact}}
                  </p>
                  <p class="card-title">
                  Age: {{ $student->age}}
                  </p>
                  <p class="card-title">
                  Date created: {{ $student->created_at->toFormattedDateString()}}
                  </p>
                  <p class="card-title">
                  Time interval: {{ $student->created_at->diffForHumans()}}
                  </p>
                   </b>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
