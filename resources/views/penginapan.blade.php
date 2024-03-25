@extends('layouts.frontend')

@section('content')
<!--==================== HOME ====================-->
<section>
    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <section class="islands swiper-slide">
                <img src="/storage/{{$penginapan->foto1}}" alt="ga tampil" class="islands__bg" />

                <div class="islands__container container">
                    <div class="islands__data">
                        <h1 class="islands__title">{{ $penginapan->nama_penginapan}}</h1>

                          
                        
                    </div>

                </div>

            </section>
        </div>
    </div>
</section>

<!-- blog -->
<section class="blog section" id="blog">
    <div class="blog__container container">
        <div class="content__container">
            <div class="blog__detail">
                {{  $penginapan->deskripsi  }}
                <br>
                <br>
                Memiliki Fasilitas : {{ $penginapan->fasilitas}}
                
               
            </div>
           
        </div>
    </div>
    <div class="blog__container container">

      <h2 class="section__title" style="text-align: center">
          Foto-Foto
      </h2>

      <div class="blog__content grid">

          <article class="blog__card">
              <div class="blog__image">
                  <img src="/storage/{{$penginapan->foto1}}" alt="" style="width: 400px" class="popular__img" />

              </div>
          </article>
          <article class="blog__card">
              <div class="blog__image">
                  <img src="/storage/{{$penginapan->foto2}}" alt="" style="width: 400px" class="popular__img" />

              </div>
          </article>
          <article class="blog__card">
              <div class="blog__image">
                  <img src="/storage/{{$penginapan->foto3}}" alt="" style="width: 400px" class="popular__img" />

              </div>
          </article>
          <article class="blog__card">
              <div class="blog__image">
                  <img src="/storage/{{$penginapan->foto4}}" alt="" style="width: 400px" class="popular__img" />

              </div>
          </article>
          <article class="blog__card">
              <div class="blog__image">
                  <img src="/storage/{{$penginapan->foto5}}" alt="" style="width: 400px" class="popular__img" />

              </div>
          </article>
      </div>
  </div>
  
</section>





@endsection

@push('style-alt')
<style>
    blockquote {
        border-left: 8px solid #b4b4b4;
        padding-left: 1rem;
    }

    .blog__detail ul li {
        list-style: initial;
    }
</style>
@endpush