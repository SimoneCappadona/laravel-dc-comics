@extends('layout.app')

@section('document-title', 'Comics')

@section('main')
    <main id="comics-body">
        <div class="body-top">
            <div class="container">
        <div class="body-label">
            <span">CURRENT SERIES</span>
        </div>
                <div class="row g-4">
                    @foreach ($comics as $key => $comic)
                    <div class="col-2">
                        <div class="comic-card">  
                                <img src="{{$comic['thumb']}}" class="card-img-top" alt="{{$comic['series']}}">
                                <div>
                                  <p>{{$comic['series']}}</p>
                                </div>
                          </div>
                    </div>
                    @endforeach
                </div>
                <div class="button-section">
                    <button class="button button-primary">LOAD MORE</button>
                </div>
            </div>
            
        </div>
        @section('link')
        @include('./partials/link')
        @endsection
    </main>
@endsection