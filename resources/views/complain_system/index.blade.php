@extends('layouts/app')
@section('content')

 

     <table>
       <tr>
          <th>Name</th> 
          <th>Complain</th> 
          <th>Action</th>
       </tr>
       @if(count($complain)>0)

        @foreach ($complain as $complains)
       <tr>
       <td>{{$complains->name}}</td>
       <td>{{$complains->complain}}</td>
       <td><a href="/complain/{{$complains->id}}" class="btn btn-success">Reply</a>
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