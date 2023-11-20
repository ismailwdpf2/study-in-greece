@extends('admin.template')
@section('admin-content')
    <h2>Add Degree </h2>

    <div class="container">
        <form action="{{route('degree.store')}}" method="POST">
        @csrf
            <input type="text" id="d_name" name="d_name" placeholder="Degree name"> <br>
            <button type="submit" class="btn btn-success my-3">Save</button>
        </form>
    </div>
@endsection
