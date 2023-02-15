@extends('layouts.app')
@section('title','Five Star Garden - Gallery')
@section('main-content')

<section id="page_header">
    <div class="page_title">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
             <h2 class="title">Gallery</h2>
             {{-- <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit</p> --}}
          </div>
        </div>
      </div>
    </div>
    </section>


<section id="gallery" class="padding-top padding-bottom" style="background:url('/images/ban1.webp');background-size:cover">
    <div class="container">
      {{-- <div class="row">
        <div class="col-md-12">
          <div class="work-filter">
            <ul class="text-center">
               <li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
               <li><a href="javascript:;" data-filter=".starters" class="filter"> Starters</a></li>
               <li><a href="javascript:;" data-filter=".drinks" class="filter">Free drinks </a></li>
               <li><a href="javascript:;" data-filter=".dinner" class="filter"> Dinner</a></li>
               <li><a href="javascript:;" data-filter=".lunch" class="filter">Breakfast & Lunch</a></li>
            </ul>
          </div>
        </div>
      </div> --}}
       <div class="row">
        <div class="zerogrid">
          <div class="wrap-container">
            <div class="wrap-content clearfix home-gallery">
              <div class="col-1-4 mix work-item drinks">
                <div class="wrap-col">
                  <div class="item-container">
                    <div class="image">
                      <img src="images/gal1.webp" alt="cook"/>
                      <div class="overlay">
                          {{-- <a class="video fancybox.iframe overlay-inner" href="https://player.vimeo.com/video/94224205?autoplay=1"><i class=" icon-eye6"></i></a> --}}
                          <a class="fancybox overlay-inner" href="images/gal1.webp" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-1-4 mix work-item starters">
                <div class="wrap-col">
                  <div class="item-container">
                    <div class="image">
                      <img src="images/gal2.webp" alt="cook"/>
                      <div class="overlay">
                          <a class="fancybox overlay-inner" href="images/gal2.webp" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-1-4 mix work-item dinner">
                <div class="wrap-col">
                  <div class="item-container">
                    <div class="image">
                      <img src="images/gal4.webp" alt="cook"/>
                      <div class="overlay">
                          <a class="fancybox overlay-inner" href="images/gal4.webp" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-1-4 mix work-item drinks">
                <div class="wrap-col">
                  <div class="item-container">
                    <div class="image">
                      <img src="images/gal6.webp" alt="cook"/>
                      <div class="overlay">
                          <a class="fancybox overlay-inner" href="images/gal6.webp" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-1-4 mix work-item dinner">
                <div class="wrap-col">
                  <div class="item-container">
                    <div class="image">
                      <img src="images/gal7.webp" alt="cook"/>
                      <div class="overlay">
                          <a class="fancybox overlay-inner" href="images/gal7.webp" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-1-4 mix work-item lunch">
                <div class="wrap-col">
                  <div class="item-container">
                    <div class="image">
                      <img src="images/gal8.webp" alt="cook"/>
                      <div class="overlay">
                          <a class="fancybox overlay-inner" href="images/gal8.webp" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-1-4 mix work-item starters">
                <div class="wrap-col">
                  <div class="item-container">
                    <div class="image">
                      <img src="images/gal9.webp" alt="cook"/>
                      <div class="overlay">
                          <a class="fancybox overlay-inner" href="images/gal9.webp" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-1-4 mix work-item starters">
                <div class="wrap-col">
                  <div class="item-container">
                    <div class="image">
                      <img src="images/gal10.webp" alt="cook"/>
                      <div class="overlay">
                        <a class="fancybox overlay-inner" href="images/gal10.webp" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </div>
        </div>
    </div>
  </section>


@endsection
