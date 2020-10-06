@extends('layouts/app')
@section('content')
    
   @if(count($complains)>0)
   <table class="table table-bordered">
       <tr>
           {{-- <td width="80px">Name</td> --}}
           <td width="300px">Title</td>
           <td width="5px">Action</td>
       </tr>
      
   @foreach ($complains as $complain)
  
    
   <tr>
   {{-- <td>{{Auth::user()->name}}</td> --}}
    <td>{{$complain->title}}</td>
   <td><a href="/complain/{{$complain->id}}" class="btn btn-primary">View</a>
   
    {!! Form::open(['action' => ['complainController@destroy',$complain->id],'method'=>'POST','class'=>'pull-right']) !!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
</td>
   </tr>

       
   @endforeach
  </table>
   @endif
@endsection