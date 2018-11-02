@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" >PERSONAL INFORMATION <span class="float-right"><a href="{{route('personalinfo.create')}}"> Add personal-info</a></span></div>

                <div class="card-body">
                    

                    <table class="table table-striped">
                       <thead>
                       <tr>
                          <th>SN.</th>
                          <th>FIRST_NAME</th>
                          <th>MIDDLE_NAME</th>
                          <th>SURNAME</th>
                          <th>AGE</th>
                          <th>OPTIONS</th>
                       </tr>
                       </thead>
                       <tbody>
                          @foreach($personalinfos as $personalinfo)
                            <tr>
                                 <td>{{$loop->iteration}}</td>
                                 <td>{{$personalinfo->fname}}</td>
                                 <td>{{$personalinfo->mname}}</td>
                                 <td>{{$personalinfo->sname}}</td>
                                 <td>{{$personalinfo->age}}</td>
                                 <td>
                                   <form method="POST" action="{{route('personalinfo.destroy',$personalinfo)}}">
                                   @csrf
                                   @method('DELETE')
                                      <div class="btn-group">
                                       <a href="{{route('personalinfo.edit',$personalinfo)}}" class="btn btn-link">Edit</a>
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
