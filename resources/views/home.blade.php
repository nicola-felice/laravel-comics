
@extends('layout.base')

@section('mainContent')

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

@endsection