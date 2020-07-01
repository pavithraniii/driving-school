@extends('layouts/app')
@section('content')
 
<hr><h1>{{$complain->complain}}</h1>

  <div class="reply">
    <ul class="list-group">
        @foreach($complain->reply as $replies ) 
        {{-- complains.php reply function --}}
        {{-- <li class="list-group-item">
    <strong>{{ $replie->created_at->diffForHumans()}}: &nbsp;</strong>
            {{ $replie->reply}}
          </li> --}}
          hii
            @endforeach
    </ul>
</div> 
@endsection