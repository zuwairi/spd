@extends('backend.layout')

@section('content')
    <!-- Page Content --> 
         <br><h1>Senarai Sesi</h1><br/>

    @include('common.alert')
   
   <table class="table">
   <thead>
     <tr>
       <th>ID</th>
       <th>Name</th>
       <th>Status</th>
       <th>Pingat</th>
       <th>Created At</th>
       <th>Updated At</th>
       <th>Operation</th>
     </tr>
   </thead>  
   <tbody>
     @foreach($sesis as $sesi)
 <tr>
   <td>{{ $sesi->id }}</td>
   <td>{{ $sesi->name }}</td>
   <td>{{ $sesi->status ? 'Open':'Close' }}</td>
   <td>{{ $sesi->pingat }}</td>
   <td>{{ $sesi->created_at->format('d M Y') }}</td>
   <td>{{ $sesi->updated_at->format('d/M/Y') }}</td>
   <td>
    <a href="{{ route('sesi.edit', $sesi->id) }}">Edit</a> 
   </td>
 </tr>
     @endforeach
   </tbody>
   </table>
   
@endsection   