@extends('layout')

@section('content')
    <form action="{{ route('create') }}">
        <a href="{{ route('links') }}">Все ссылки</a>
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Shorted Link</label>
            <input type="url" name="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 d-none link">
            <h6>Ваша ссылка:</h6>
            <p></p>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@section('js')
    <script src="{{ asset('js/main.js') }}"></script>
@endsection
