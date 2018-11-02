@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" >STUDENT INFORMATION <span class="float-right"><a href="{{route('student.create')}}"> Add StudentInfo</a></span></div>

                <div class="card-body">
                    

                    <table class="table table-striped">
                       <thead>
                       <tr>
                          <th>SN.</th>
                          <th>FULLNAME</th>
                          <th>GENDER</th>
                          <th>RESIDENCE</th>
                          <th>CONTACT</th>
                          <th>AGE</th>
                          <th>OPTION</th>
                       </tr>
                       </thead>
                       <tbody>
                          @foreach($students as $student)
                            <tr>
                                 <td>{{$loop->iteration}}</td>
                                 <td>{{$student->fullname}}</td>
                                 <td>{{$student->gender}}</td>
                                 <td>{{$student->residence}}</td>
                                 <td>{{$student->contact}}</td>
                                 <td>{{$student->age}}</td>
                                 <td>
                                   <form method="POST" action="{{route('student.destroy',$student)}}">
                                   @csrf
                                   @method('DELETE')
                                      <div class="btn-group">
                                       <a href="{{route('student.show',$student)}}" class="btn btn-link">Show</a>
                                       <a href="{{route('student.edit',$student)}}" class="btn btn-link">Edit</a>
                                       <button type="submit" class="btn btn-link" >Delete</button>
                                      </div>
                                    </form>
                                 </td>

                            </tr>
                           @endforeach
                       </tbody>
                    
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
