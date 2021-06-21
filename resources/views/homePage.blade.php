@extends('layout.basicLayout')
{{-- estendo la mia homepage con il layout di base con @extends --}}
{{-- inserisco il titolo, passato come secondo argomento --}}
@section('pageTitle', 'Home Page')
{{-- mettiamo il segnaposto(yeld) del body per iniziare a scrivere --}}
@section('bodyContent')
  {{-- @dump($datiView) --}}
  {{-- stampo i titoli dei giochi --}}
  <main class="main">
    <div class="main-top">
      {{-- passo al for l' id per usarlo nella route  --}}
  @foreach($datiView as $id => $dati)





      <div class="main-top-scheda">
        <a href="{{ route('fumetti', $id) }}">
          <div class="main-top-scheda-top">
            <img src="{{ $dati['thumb']}}" alt="">
          </div>
          <div class="main-top-scheda-bottom">
            {{ $dati['title'] }}
          </div>
        </a>
      </div>





      {{-- con le doppie graffe scrivo comendi blade --}}


  @endforeach
  </div>
  <div class="main-middle">
    <a href="#">
      <div class="main-middle-button">
        LOAD MORE
      </div>

    </a>

  </div>

  <div class="main-bottom">
    <div class="main-bottom-scheda">
      <img src="{{ asset('images/buy-comics-digital-comics.png')}}" alt="">
      <span>DIGITAL COMICS</span>
    </div>

    <div class="main-bottom-scheda">
      <img src="{{ asset('images/buy-comics-merchandise.png')}}" alt="">
      <span>DC MERCHANDISE</span>
    </div>

    <div class="main-bottom-scheda">
      <img src="{{ asset('images/buy-comics-subscriptions.png')}}" alt="">
      <span>SUBSCRIPTION</span>
    </div>

    <div class="main-bottom-scheda">
      <img src="{{ asset('images/buy-comics-shop-locator.png')}}" alt="">
      <span>COMIC SHOP LOCATOR</span>
    </div>

    <div class="main-bottom-scheda">
      <img src="{{ asset('images/buy-dc-power-visa.svg')}}" alt="">
      <span>DC POWER VISA</span>
    </div>

  </div>
  </main>
@endsection
