@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">EDIT PERSONAL INFO FORM</div>

                <div class="card-body">
                   
                    <form method="POST" action="{{route('personalinfo.update', $personalinfo)}}"  >
                     @csrf
                     @method('PATCH')
                          <div class="form-group">
                            <label>FIRST NAME</label>
                            <input type="text" value="{{$personalinfo->fname}}" class="form-control" name="fname" placehoder=" FIRST_NAME">
                          </div>
                          <div class="form-group">
                            <label>MIDDLE NME</label>
                            <input type="text" value="{{$personalinfo->mname}}" class="form-control" name="mname" placehoder=" MIDDLE_NAME">
                          </div>
                          <div class="form-group">
                            <label>SURNAME</label>
                            <input type="text" value="{{$personalinfo->sname}}" class="form-control" name="sname" placehoder=" SURNAME">
                          </div>
                          <div class="form-group">
                            <label>AGE</label>
                            <input type="number" value="{{$personalinfo->age}}" class="form-control" name="age" placehoder=" AGE">
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
