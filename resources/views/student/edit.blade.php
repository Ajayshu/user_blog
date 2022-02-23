@extends('master')



@section('content')

     <div class="row">
         <div class="col-md-12">
             <br/>
             <h3 align="center">Edit Record</h3>
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
         
         <form method="post" action="{{action('StudentController@update', '$id')}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PATCH"/>
            <div class="md-3">
               <label for="title" class="form-label">Title</label>  
               <input type="text" class="form-control" id="title" value="{{$student->title}}" name="title" placeholder="Enter Title">
            </div>  

            <div class="md-3">
              <label for="description" class="form-label">Description</label>  
              <input type="text" class="form-control" id="description" value="{{$student->description}}" name="description" placeholder="Enter Description">
           </div> 
          <br>
           <div class="form-group">
                 <input type="submit" class="btn btn-primary" value="Edit" />
           </div>   
            
      </form> 

        </div>   
     </div>




@endsection