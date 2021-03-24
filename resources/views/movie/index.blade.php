@extends('template.base')

@section('content')
        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Director</th>
                <th scope="col">Producer</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <th scope="row">{{ $movie->id }}</th>
                    <td>{{ $movie->title }}</a></td>
                    <td>{{ $movie->director }}</td>
                    <td>{{ $movie->producer }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
