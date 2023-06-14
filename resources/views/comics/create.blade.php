@extends('./layout.app')

@section('cards')

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" aria-describedby="emailHelp" name="description">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">prezzo</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endsection