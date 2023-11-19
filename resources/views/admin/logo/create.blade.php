@extends('admin.template')
@section('admin-content')

<h2>add logo </h2>

<div class="container">
    <form action="{{ route('storelogo') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" for="basic-default-name">Image</label>
            <div class="col-sm-8">
                <input class="form-control" type="file" id="logo" name="logo" />
            </div>
        </div>
        <div class="py-3">
            <button type="submit" class="btn btn-success">Add Logo</button>
        </div>
    </form>
</div>

@endsection