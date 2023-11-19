@extends('admin.template')
@section('admin-content')
<a href="{{route('addlogo')}}"><button class="btn btn-success text-white">Add New</button></a>

<div class="container">

    <table class="table my-2">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">logo</th>
          </tr>
        </thead>
        @foreach ($logo as $logo)
        <tbody>
          <tr>
            <th>{{$logo->id}}</th>
            <td><img style="height: 50px" src="{{asset('storage/'.$logo->logo)}}" alt="img"></td>  
            <td>
                <a href="{{ route('deletelogo', $logo->id) }}" class="btn-danger">Delete</a>
            </td> 
          </tr>
        </tbody>
        @endforeach
      </table>
</div>

@endsection