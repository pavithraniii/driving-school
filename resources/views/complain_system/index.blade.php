@extends('layouts/app')
@section('content')

 

     <table>
       <tr>
          <th>Name</th> 
          <th>Email</th> 
          <th>Action</th>
       </tr>
       @if(count($complain)>0)

        @foreach ($complain as $complains)
       <tr>
       <td>{{$complains->name}}</td>
       <td>{{$complains->email}}</td>
       <td><a href="/complain/{{$complains->id}}" class="btn btn-success">view</a>
        {!! Form::open(['action' => ['complainsController@destroy',$complains->id],'method'=>'POST']) !!}
           {{Form::hidden('_method','DELETE')}}
           {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
         {!! Form::close() !!}
      </td>
       </tr>
       @endforeach
       @endif
    </table>   
        
  
    
@endsection