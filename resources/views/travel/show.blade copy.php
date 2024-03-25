@extends('layouts.frontend')

@section('content')
<!--==================== HOME ====================-->
<section>
    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            @foreach($paket as $paket)
            <section class="islands swiper-slide">
                <img src="storage/{{$paket->foto1}}" alt="" class="islands__bg" />

                <div class="islands__container container">
                    <div class="islands__data">
                        <h2 class="islands__subtitle">Explore</h2>
                        <h1 class="islands__title">{{ $paket->fasilitas }}</h1>
                    </div>
                </div>
            </section>
            @endforeach
        </div>
    </div>

    <!--========== CONTROLS ==========-->
    {{-- <div class="controls gallery-thumbs">
          <div class="controls__container swiper-wrapper">
           @foreach($paket as $paket)
            <img
              src="storage/{{$paket->foto1}}"
    alt=""
    class="controls__img swiper-slide"
    />
    @endforeach
    </div>
    </div>
</section> --}}

{{-- <section class="blog section" id="blog">
        <div class="blog__container container">
          <div class="content__container">
            <div class="blog__detail">
            {!! $paket->deskripsi !!}
            </div>
            <div class="package-travel">
              <h3>Booking Now</h3>
              <div class="card">
                <form action="{{ route('booking.store') }}" method="post">
@csrf
<input type="hidden" name="travel_package_id" value="{{ $travel_package->id }}">
<input type="text" name="name" placeholder="Your Name" />
<input type="email" name="email" placeholder="Your Email" />
<input type="number" name="number_phone" placeholder="Your Number" />
<input placeholder="Pick Your Date" class="textbox-n" type="text" name="date" onfocus="(this.type='date')" id="date" />
<button type="submit" class="button button-booking">Send</button>
</form>
</div>
</div>
</div>
</div>
</section> --}}

{{-- <section class="section" id="popular">
        <div class="container">
          <span class="section__subtitle" style="text-align: center"
            >Package Travel</span
          >
          <h2 class="section__title" style="text-align: center">
            The Best Tour For You
          </h2>

          <div class="popular__all">
            @foreach($pakets as $paket)
            <article class="popular__card">
              <a href="{{ route('paket.show', $paket->id) }}">
<img src="storage/{{$paket->foto1}}" alt="" class="popular__img" />
<div class="popular__data">
    <h2 class="popular__price"><span>$</span>{{ number_format($paket->harga_per_pack,2) }}</h2>
    <h3 class="popular__title">{{ $paket->nama_paket }}</h3>
    <p class="popular__description">{{ $paket->deskripsi }}</p>
</div>
</a>
</article>
@endforeach
</div>
</div>
</section>

@if(session()->has('message'))
<div id="alert" class="alert">
    {{ session()->get('message') }}
    <i class='bx bx-x alert-close' id="close"></i>
</div>
@endif --}}
@endsection

{{-- @push('style-alt')
<style>
  .alert {
    position:absolute;
    top: 120px;
    left:0;
    right:0;
    background-color: var(--second-color);
    color: white;
    padding: 1rem;
    width: 70%;
    z-index: 99;
    margin: auto;
    border-radius: .25rem;
    text-align: center;
  }

  .alert-close {
    font-size: 1.5rem;
    color: #090909;
    position: absolute;
    top: .25rem;
    right: .5rem;
    cursor: pointer;
  }
  blockquote {
    border-left: 8px solid #b4b4b4;
    padding-left: 1rem;
  }
  .blog__detail ul li {
    list-style: initial;
  }
</style>
@endpush

@push('script-alt')
<script>
      let galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 0,
        slidesPerView: 0,
      });

      let galleryTop = new Swiper('.gallery-top', {
        effect: 'fade',
        loop: true,

        thumbs: {
          swiper: galleryThumbs,
        },
      });

      const close = document.getElementById('close');
      const alert = document.getElementById('alert');
      if(close) {
        close.addEventListener('click', function() {
          alert.style.display = 'none';
        })
      }
    </script>
@endpush --}}