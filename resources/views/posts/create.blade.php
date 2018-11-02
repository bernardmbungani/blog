@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">POSTS</div>

                <div class="card-body">
                   
                    <form method="POST" action="{{route('posts.store')}}" style=""  >
                     @csrf
                          <div class="form-group">
                            <label>post title</label>
                            <input type="text" class="form-control" name="title" placehoder=" POST_TITLE">
                          </div>
                            
                          <div class="form-group">
                          <label> put your text</label>
                            <textarea name="body" class="form-control" rows="3" ></textarea>
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
