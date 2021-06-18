@extends('layout.basicLayout')
{{-- estendo la mia homepage con il layout di base con @extends --}}
{{-- inserisco il titolo, passato come secondo argomento --}}
@section('pageTitle', 'Home Page')
{{-- mettiamo il segnaposto(yeld) del body per iniziare a scrivere --}}
@section('bodyContent')
  <h1>ciao sono la home page</h1>
  {{-- @dump($datiView) --}}
  {{-- stampo i titoli dei giochi --}}
  @foreach($datiView as $dati)
    <div class="">
      {{-- con le doppie graffe scrivo comendi blade --}}
      {{ $dati['title'] }}
    </div>
  @endforeach
@endsection
