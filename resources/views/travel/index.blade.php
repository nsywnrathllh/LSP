@extends('layouts.frontend')

@section('content')
 <!--==================== HOME ====================-->
 <section>
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <section class="islands swiper-slide">
              <img src="{{ asset('frontend/assets/img/palawan.jpg') }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">Temukan</h2>
                  <h1 class="islands__title">Paket Wisata</h1>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>

      <!--==================== POPULAR ====================-->
      <section class="section" id="popular">
        <div class="container">
          <span class="section__subtitle" style="text-align: center">Semua</span>
          <h2 class="section__title" style="text-align: center">
            Paket Wisata
          </h2>

          <div class="popular__all">
            @foreach($paket as $travel_package)
                <article class="popular__card">
                <a href="{{ route('paket.show',$travel_package->id) }}">
                    <img
                    src="storage/{{$travel_package->foto1}}"
                    alt=""
                    class="popular__img"
                    />
                    <div class="popular__data">
                    <h2 class="popular__price"><span>Rp. </span>{{ number_format($travel_package->harga_per_pack,2) }}</h2>
                    <h3 class="popular__title">{{ $travel_package->nama_paket }}</h3>
                    <p class="popular__description">{{ $travel_package->deskripsi }}</p>
                    </div>
                </a>
                </article>
            @endforeach
          </div>
        </div>
      </section>



<!--==================== PENGINAPAN ====================-->
<section class="section" id="popular">
  <div class="container">
      <span class="section__subtitle" style="text-align: center"
          >Lihat Juga</span
      >
      <h2 class="section__title" style="text-align: center">
          Penginapan
      </h2>

      <div class="popular__container swiper">
          <div class="swiper-wrapper">
              
              @foreach($penginapan as $penginapan)
                  <article class="popular__card swiper-slide">
                      <a href="{{ route('inap.show',$penginapan->id) }}">
                          <img
                              src="storage/{{$penginapan->foto1}}"
                              alt=""
                              class="popular__img"
                          />
                          <div class="popular__data">
                             
                              <h3 class="popular__title">
                                  {{ $penginapan->nama_penginapan}}
                              </h3>
                              <p class="popular__description">{{ $penginapan->deskripsi }}</p>
                              <p class="popular__description">{{ $penginapan->fasilitas }}</p>
                          </div>
                      </a>
                  </article>
              @endforeach
          </div>

          <div class="swiper-button-next">
              <i class="bx bx-chevron-right"></i>
          </div>
          <div class="swiper-button-prev">
              <i class="bx bx-chevron-left"></i>
          </div>
      </div>
  </div>
</section>


@endsection