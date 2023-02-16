@extends('layouts.app')
@section('title','Five Star Garden - Events')
@section('main-content')

<section id="page_header">
    <div class="page_title">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
             <h2 class="title">Events</h2>
             {{-- <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit</p> --}}
          </div>
        </div>
      </div>
    </div>
    </section>


<section id="gallery" class="padding-top padding-bottom" style="background:url('/images/ban1.webp');background-size:cover">
    <div class="container">

        <div class="row">
            @if ($events)
                @foreach ($events as $e)
                <div class="col-lg-4">
                    <div class="popular top40 text-center">
                        <div class="image">
                           <img src="images/popular1.jpg" alt="popular1">
                           <div class="overlay">
                             <a class="fancybox overlay-inner" href="images/popular1.jpg" data-fancybox-group="gallery">
                               <i class="icon-eye6"></i>
                             </a>
                           </div>
                        </div>
                        <h4>{{ $e->title }}</h4>
                        <a class="btn-common button3" style="margin-top:30px" href="/eventdetail/{{ $e->id }}">Read more</a>
                      </div>
                </div>
                @endforeach
            @endif

        </div>
    </div>
  </section>


@endsection
