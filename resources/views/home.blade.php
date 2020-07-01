@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @if((Auth::user()->id)!=2)
                <div class="panel-heading">My Complains</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                    @if(count($complain)>0)
                    <table class="table table-bordered">
                        <tr>
                            <td width="80px">ID</td>
                            <td>Title</td>
                            <td width="150px">Action</td>
                        </tr>
                       
                    @foreach ($complain as $complains)
                   
                     
                    <tr>
                    <td>{{$complains->id}}</td>
                     <td>{{$complains->title}}</td>
                    <td><a href="/complain/{{$complains->id}}" class="btn btn-primary">View</a>
                         <a href="#" class="btn btn-danger">Delete</a>
                     </td>
                    </tr>
                 
                        
                    @endforeach
                   </table>
                    @endif
                </div>
            </div>

                @else 
                
                <a href="/complain" class="btn btn-danger">See complain list </a>
               
                @endif
            
        </div>
    </div>
</div>
@endsection
