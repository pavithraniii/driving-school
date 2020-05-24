@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if((Auth::user()->id)!=2)
                  <h3> Add any complain for LEARNALOT Driving School</h3>
                  <a href="/complain/create" class="btn btn-primary">Add complain</a>
                  @if(count($complain)>0)
                  <table>
                    <tr>
                       <th>Name</th> 
                       <th>Complain</th> 
                       <th>Action</th>
                    </tr>
                    
             
                     @foreach ($complain as $complains)
                    <tr>
                    <td>{{$complains->name}}</td>
                    <td>{{$complains->complain}}</td>
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

                 @else 
                  <a href="/complain" class="btn btn-danger">See complains</a>
                 @endif   

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
