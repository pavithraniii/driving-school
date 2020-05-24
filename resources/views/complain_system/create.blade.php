@extends('layouts/app')
@section('content')


@if((Auth::user()->id)!=2)
{!! Form::open(['action' => 'complainsController@store','method'=>'POST']) !!}
     <div class="form-group">
    {{Form::label('name','Name')}}
    {{Form::text('name', '',['class'=>'form-control','placeholder'=>'Name'])}}
    </div>

    {{-- <div class="form-group">
        {{Form::label('email','Email')}}
        {{Form::text('email', '',['class'=>'form-control','placeholder'=>'email'])}}
    </div> --}}

    <div class="form-group">
            {{Form::label('complain','Complain')}}
            {{Form::textarea('complain', '',['class'=>'form-control','placeholder'=>'complain'])}}
    </div>

    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endif



@endsection