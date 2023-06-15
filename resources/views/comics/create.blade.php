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
            <input type="textarea" class="form-control" id="description" aria-describedby="emailHelp" name="description">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">thumb</label>
            <input type="textarea" class="form-control" id="thumb" name="thumb">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">price</label>
            <input type="text" class="form-control" id="price" aria-describedby="emailHelp" name="price">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">series</label>
            <input type="text" class="form-control" id="series" aria-describedby="emailHelp" name="series">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">sale_date</label>
            <input type="text" class="form-control" id="sale_date" aria-describedby="emailHelp" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">type</label>
            <input type="text" class="form-control" id="type" aria-describedby="emailHelp" name="type">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endsection