@extends('layouts.app')

@section('content')
<main>
    <div id="jumbotron">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <div class="badge p-3 bg-primary text-uppercase">
                            current series
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="comics-container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-12 col-md-3 col-lg-2">
                <div class="comic-card m-1 border-0">
                    <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                    <div class="card-body">
                        <span class="text-uppercase">{{ $comic['series'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-12">
            <div class="content d-flex justify-content-center">
                <div class="btn btn-primary my-3 text-uppercase">load more</div>
            </div>
        </div>
        <div class="bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content align-content-center">
                            <ul class="list-unstyled d-flex justify-content-between">
                                @foreach ($bluethumbs as $bluethumb)
                                <li class="px-2 mt-2 align-content-center">
                                    <img class="img-fluid" src="{{ $bluethumb['thumb'] }}"
                                        alt="{{ $bluethumb['label'] }}">
                                    <a href="#">{{ $bluethumb['label'] }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection