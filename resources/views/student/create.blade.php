@extends('master')


@section('content')

    <div class="row">

    <div class="col-md-12">
           <br/>
           <h3 align="center">Add Data</h3>
           <br/>

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                   @foreach($errors->all() as $error)
                   <li>{{$error}}</li>
                   @endforeach
                </ul>    
            </div>
        @endif

        @if(\Session::has('success'))
          <div class="alert alert-success">
              <p>{{ \Session::get('success') }}</p>
          </div>
        @endif

        <form method="post" action="{{url('student')}}">
              {{csrf_field()}}
              <div class="md-3">
                 <label for="title" class="form-label">Title</label>  
                 <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
              </div>  

              <div class="md-3">
                <label for="description" class="form-label">Title</label>  
                <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description">
             </div> 
            <br>
             <div class="form-group">
                   <input type="submit" class="btn btn-primary" />
             </div>   
              
        </form>    
    </div> 

    </div>    



@endsection