@extends('template.base')

@section('content')
<form action="{{ route('movie.store') }}" method="post">

    @csrf
    @method('POST')

    <div class="form-group">

        <label for="title">Title</label>
        <input
        class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
        type="text"
        name="title"
        placeholder="title" >
        <div class="invalid-feedback">
            {{ $errors->first('title') }}
        </div>
    </div>

    <div class="form-group">

        <label for="director">Director</label>
        <input
        class="form-control {{ $errors->has('director') ? 'is-invalid' : '' }}"
        type="text"
        name="director"
        placeholder="director" >
        <div class="invalid-feedback">
            {{ $errors->first('director') }}
        </div>
    </div>

    <div class="form-group">

        <label for="producer">Producer</label>
        <input
        class="form-control {{ $errors->has('producer') ? 'is-invalid' : '' }}"
        type="text"
        name="producer"
        placeholder="producer" >
        <div class="invalid-feedback">
            {{ $errors->first('producer') }}
        </div>
    </div>



    <button type="submit" class="btn btn-primary">
        Done
    </button>

</form>
@endsection
