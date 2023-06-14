@extends('./layout.app')

@section('cards')
    <div class="container">
        <div class="card m-auto" style="width: 30rem;">
            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
            <div class="card-body text-dark">
                <h5 class="card-title">{{ $comic['title'] }}</h5>
                <p class="card-text">{{ $comic['description'] }}</p>
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna indietro</a>
            </div>
        </div>
    </div>
@endsection