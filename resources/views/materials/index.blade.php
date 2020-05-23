@extends('materials_layout/app')
@section('content')
<h1>Study Material</h1>

@if(count($material)>0)
  @foreach ($material as $materials)
 <a href="/learn/{{ $materials->id}}"><h2>{{ $materials->material_type}}
           {{ $materials->title}}</a></h2>

  @endforeach
  {{$material->links()}}
@else 
  <p>No learning material available</p>
@endif

@endsection