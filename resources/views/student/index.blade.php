@extends('master')


@section('content')


    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 align="center">Blog Index</h3>
            <br />

            @if($message = Session::get('success'))
                 <div class="alert alert-success">
                     <p>{{$message}}</p>
                </div>     
            @endif

              <div align="right">
                  <a href="{{route('student.create')}}" class="btn btn-primary">Add Date</a>
              </div>
              <br />
              <br />
              <table class="table table-bordered">
                  <tr>
         
                      <th>Title</th>
                      <th>Description</th>
                      <th>Edit</th>
                      <th>Delete</th>

                  </tr>

                  @foreach($students as $row)
                  <tr>
                      <td>{{$row['title']}}</td>
                      <td>{{$row['description']}}</td>
                      <td><a href="{{action('StudentController@edit', $row['id'])}}" class="btn btn-primary">Edit</a></td>
                      <td>
                          <form method="post" class="delete_form" action="{{action('StudentController@destroy', $row['id'])}}">
                              {{csrf_field()}}
                              <input type="hidden" name="_method" value="DELETE" />
                              <button type="submit" class="btn btn-danger">Delete</button>
                          </form>  
                      </td>
                      
                  </tr>  
                  @endforeach 
              </table>


        </div>
    </div>        

   <script>
         $(document).ready(function(){

                $('.delete_form').on('submit', function(){
                     if(confirm('Are you sure you want to delete this?'))
                     {
                         return true;
                     }
                     else
                     {
                         return false;
                     }
                });

         });
   </script>


@endsection