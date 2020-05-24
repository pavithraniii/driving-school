@extends('materials_layout/appcard')
@section('content')




  <style>
    table, th, td {
      border: 3px solid black;
    }

     /* table {
   border-collapse: collapse; 
  width:100%; 
 } */
 td,td {
  width: 50%;
}

  th {
  height: 50px;
}

th, td {
  padding: 10px;
}
</style>  

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
       <td><a href="/complain/{{$complains->id}}" class="btn btn-success">view</a></td>
       </tr>
       @endforeach
       @endif
    </table>   
        
  
    
@endsection