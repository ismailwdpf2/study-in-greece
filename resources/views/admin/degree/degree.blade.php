@extends('admin.template')
@section('admin-content')
    <a href="{{ route('degree.create') }}"><button class="btn btn-success text-white">Add New</button></a>

    <div class="container">

        <table class="table my-2">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">digrees</th>
                </tr>
            </thead>
            @foreach ($degree as $degree)
                <tbody>
                    <tr>
                        <th>{{ $degree->id }}</th>
                        <td>{{ $degree->d_name }}</td>

                        <td>
                            <form action="{{ route('degree.destroy', $degree->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <a href=""><button class="btn btn-danger"> Delete</button></a>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
