
@extends('layout.base')

@section('mainContent')

  <section id="hero"></section>

  <section id="current_series_comics">
    <div class="container">
      <div class="label_current_series">current series</div>

      <ul class="comics_list">
        @foreach ($comics as $elm)
          <li class="product">
            <a href="#">
              <div class="image_wrapper">
                <img src="{{$elm["thumb"]}}" alt="{{$elm["type"]}}">
              </div>
              <span>{{$elm["series"]}}</span>
            </a>
          </li>            
        @endforeach
      </ul>

      <button class="load_more_btn">load more</button>
    </div>
  </section>

  <section class="buy_comics_banner">
    <div class="container">
      <ul>
        <li>
          <a href="#">
            <img src="{{asset("img/buy-comics-digital-comics.png")}}" alt="">
            <span>DIGITAL COMICS</span>
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset("img/buy-comics-merchandise.png")}}" alt="">
            <span>DC MERCHANDISE</span>
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset("img/buy-comics-subscriptions.png")}}" alt="">
            <span>SUBSCRIPTION</span>
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset("img/buy-comics-shop-locator.png")}}" alt="">
            <span>COMIC SHOP LOCATOR</span>
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset("img/buy-dc-power-visa.svg")}}" alt="">
            <span>DC POWER VISA</span>
          </a>
        </li>
      </ul>          
    </div>
  </section>

@endsection