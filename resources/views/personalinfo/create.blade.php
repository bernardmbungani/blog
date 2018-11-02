@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">PERSONAL INFO FORM</div>

                <div class="card-body">
                   
                    <form method="POST" action="{{route('personalinfo.store')}}"  >
                     @csrf
                          <div class="form-group">
                            <label>FIRST NAME</label>
                            <input type="text" class="form-control" name="fname" placehoder=" FIRST_NAME">
                          </div>
                          <div class="form-group">
                            <label>MIDDLE NME</label>
                            <input type="text" class="form-control" name="mname" placehoder=" MIDDLE_NAME">
                          </div>
                          <div class="form-group">
                            <label>SURNAME</label>
                            <input type="text" class="form-control" name="sname" placehoder=" SURNAME">
                          </div>
                          <div class="form-group">
                            <label>AGE</label>
                            <input type="number" class="form-control" name="age" placehoder=" AGE">
                          </div>
                            
                         

                          <div class="form-group">
                          <button type="submit" class="btn btn-primary">SUBMIT</button>
                          </div>



                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
