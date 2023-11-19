@extends('admin.template')
@section('admin-content')

<h2>Add Degree </h2>

<div class="container">
    <form action="{{ route('storedegree') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" for="basic-default-name">Degree</label>
            <div class="col-sm-8">
                <input class="form-control" type="text" id="degree" name="degree" />
            </div>
        </div>
        <div class="py-3">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
</div>

@endsection