@extends('./layout.app')

@section('cards')
    <div class="jumbotron">
        <span>current series</span>
    </div>

    <div class="cards">
        <div class="container">
            @foreach($comics as $elem)
                    <div class="card">
                        <a href="{{route('comics.show', $elem->id)}}">
                            <img src="{{ $elem['thumb'] }}" class="card-img-top" alt="">
                            <div>
                                <h6 class="card-title">{{$elem['series']}}</h6>
                            </div>
                        </a>
                        <form action="{{ route('comics.destroy', ['comic' => $elem->id] ) }}" method="POST">
                            @csrf

                            @method('DELETE')

                            <input type="submit" value="Cancella" class="btn btn-primary">
                        </form>
                    </div>
            @endforeach
            
        </div>

        <button class="btn btn-primary mb-5">LOAD MORE</button>
    </div>
@endsection

@section('utilities')
<div class="utilities">
    <div class="container">
        <ul class="d-flex justify-content-around">
            <li>
                <a href="#">
                    <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
                    <span>digital comics</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                    <span>dc merchandise</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                    <span>subscription</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
                    <span>comic shop locator</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
                    <span>dc power visa</span>
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection