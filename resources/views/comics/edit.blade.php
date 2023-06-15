<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">

        <form action="{{ route('comics.update', [ 'comic' => $comic->id ]) }}" method="POST">
            @csrf
    
            @method('PUT')
    
            <div class="mb-3">
                <label for="name" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" value="{{ $comic->title }}">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Descrizione</label>
                <input type="textarea" class="form-control" id="description" aria-describedby="emailHelp" name="description" value="{{ $comic->description }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">thumb</label>
                <input type="textarea" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">price</label>
                <input type="text" class="form-control" id="price" aria-describedby="emailHelp" name="price" value="{{ $comic->price }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">series</label>
                <input type="text" class="form-control" id="series" aria-describedby="emailHelp" name="series" value="{{ $comic->series }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">sale_date</label>
                <input type="text" class="form-control" id="sale_date" aria-describedby="emailHelp" name="sale_date" value="{{ $comic->sale_date }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">type</label>
                <input type="text" class="form-control" id="type" aria-describedby="emailHelp" name="type" value="{{ $comic->type }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>
</html>