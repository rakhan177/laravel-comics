@extends('layout.basicLayout')
{{-- estendo la mia homepage con il layout di base con @extends --}}
{{-- inserisco il titolo, passato come secondo argomento --}}
@section('pageTitle', 'Comics')
{{-- mettiamo il segnaposto(yeld) del body per iniziare a scrivere --}}
@section('bodyContent')

  <main class="main2">
    <div class="main2-top">
      <div class="main2-top-left">
        <h2>{{$fumetto['title']}}</h2>
        <div>
          Price: {{$fumetto['price']}}
        </div>
        <div>
          {{$fumetto['description']}}
        </div>
      </div>
      <div class="main2-top-right">

        <img src="{{ $fumetto['thumb'] }}" alt="">
      </div>
    </div>
    <div class="main2-middle">
      <div class="main2-middle-left">
        <h4>Talent</h4>
        <div class="middle-table">
          <div>
            Art by:
          </div>
          <div>
          artists
          </div>
        </div>
      </div>
      <div class="main2-middle-right">
        <h4>Specs</h4>
        <div class="middle-table">
          <div>
            Written by:
          </div>
          <div>
            @dump($fumetto)
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
