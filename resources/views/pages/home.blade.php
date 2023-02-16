@extends('layouts.app')
@section('title','Five Star Garden - Home')
@section('main-content')



<!-- REVOLUTION SLIDER -->
<section class="rev_slider_wrapper">
    {{-- <div id="rev_slider" class="rev_slider"  data-version="5.0">
      <ul>

        <li data-transition="fade">

          <img src="images/banner1.webp" alt="" data-bgposition="center center" data-bgfit="cover">

         <h1 class="tp-caption tp-resizeme text-center"
                            data-x="center" data-hoffset="15"
                            data-y="250"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                            data-start="500"
                            data-splitin="none"
                            data-splitout="none"
                            style="z-index: 6;">
                            <span class="small_title">Pleasant&nbsp; climate&nbsp; & beautiful&nbsp; ambience <br> Our&nbsp; culinary&nbsp; team&nbsp; is&nbsp; excited&nbsp; to&nbsp; serve&nbsp; your&nbsp; favourite&nbsp; dishes</span>
                         </h1>

        </li>

        <li data-transition="fade text-center">
          <img src="images/banner2.webp"  alt="" data-bgposition="center center" data-bgfit="cover">
         <h1 class="tp-caption tp-resizeme text-center"
                            data-x="center" data-hoffset="15"
                            data-y="250"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                            data-start="500"
                            data-splitin="none"
                            data-splitout="none"
                            style="z-index: 6;">
                            <span class="small_title">Yes We Have</span> <br> Pleasant&nbsp; climate&nbsp; & beautiful&nbsp; ambience </span>
                         </h1>

        </li>
      </ul>
    </div> --}}

              <canvas id="kenburns" class="myVideo"></canvas>
              <div class="content">
            <div class="web-content">
                {{-- <h1 class="waviy welcome-txt">
                    <span style="--i:1">F</span>
                    <span style="--i:2">I</span>
                    <span style="--i:3">V</span>
                    <span style="--i:4">E</span>
                    <span style="--i:5"> </span>
                    <span style="--i:6">S</span>
                    <span style="--i:7">T</span>
                    <span style="--i:8">A</span>
                    <span style="--i:9">R</span>
                    <span style="--i:10"> </span>
                    <span style="--i:11">G</span>
                    <span style="--i:12">A</span>
                    <span style="--i:13">R</span>
                    <span style="--i:14">D</span>
                    <span style="--i:15">E</span>
                    <span style="--i:16">N</span>
                </h1> --}}
                <h1 class="text-center welcome-txt">Pleasant&nbsp; climate&nbsp; &&nbsp; beautiful&nbsp; ambience </h1>

                {{-- <a class="btn btn-default m-auto d-block welcome-btn" href="#section-service">See Services</a> --}}
            </div>
            </div>
  </section>

   <!-- END REVOLUTION SLIDER -->

<!--Features Section-->
<section class="feature_wrap padding-half" id="specialities" style="background:url('/images/ban1.webp');background-size:cover">
    <div class="container">
      <div class="row">
       <div class="col-md-12 text-center">
          <h2 class="heading ">Our &nbsp; Specialities</h2>
          <hr class="heading_space">
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6 feature text-center">
          <i class="icon-glass"></i>
          <h3><a href="/">Dining</a></h3>
          <p> A pleasant climate can have positive effects on mental health and well-being</p>
        </div>
        <div class="col-md-3 col-sm-6 feature text-center">
          <i class="icon-coffee"></i>
          <h3><a href="/">Natural Ambience</a></h3>
          <p> A pleasant climate can have positive effects on mental health and well-being</p>
        </div>
        <div class="col-md-3 col-sm-6 feature text-center">
          <i class="icon-glass"></i>
          <h3><a href="/">Pleasant Climate</a></h3>
          <p> A pleasant climate can have positive effects on mental health and well-being</p>
        </div>
        <div class="col-md-3 col-sm-6 feature text-center">
          <i class="icon-coffee"></i>
          <h3><a href="/">Take Away</a></h3>
          <p> A pleasant climate can have positive effects on mental health and well-being</p>
        </div>
      </div>

    </div>
  </section>


  <!--Services plus working hours-->
  <section id="services" class="padding-bottom" style="background:url('/images/ban1.webp');background-size:cover">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
           <h2 class="heading">Events</h2>
           <hr class="heading_space">
           <div class="slider_wrap">
          <div id="service-slider" class="owl-carousel">
            <div class="item">
              <div class="item_inner">
              <div class="image">
                <img src="images/pro1.webp" alt="Services Image">
                <a  href="/"></a>
              </div>
                <h3><a href="/">Corporate Events</a></h3>
                <p>A large gathering of professionals and experts in a particular field or industry to discuss and share ideas, knowledge, and advancements.</p>
              </div>
            </div>
            <div class="item">
              <div class="item_inner">
                <div class="image">
                <img src="images/pro2.webp" alt="Services Image">
                <a  href="/"></a>
                </div>
                <h3><a href="/">Family Parties</a></h3>
                <p>Family parties are social gatherings where family members come together to celebrate a special occasion or event, share quality time, and enjoy each other's company.</p>
              </div>
            </div>
            <div class="item">
              <div class="item_inner">
                <div class="image">
                <img src="images/pro1.webp" alt="Services Image">
                <a  href="/"></a>
                </div>
                <h3><a href="/">Friends Get together</a></h3>
                <p>A friends get together is a social gathering where friends come together to catch up, socialize, and spend time with each other</p>
              </div>
            </div>
            <div class="item">
              <div class="item_inner">
                <div class="image">
                <img src="images/pro2.webp" alt="Services Image">
                <a  href="/"></a>
                </div>
                <h3><a href="/">Friends Get together</a></h3>
                <p>A friends get together is a social gathering where friends come together to catch up, socialize, and spend time with each other</p>
              </div>
            </div>
          </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- image with content -->
  <section class="info_section paralax">
    <div class="container">
      <div class="row">
        <div class="col-md-2"> </div>
        <div class="col-md-8">
           <div class="text-center">
           <h2 class="heading_space">Pleasant Climate & Beautiful ambience</h2>
           <p class="heading_space detail">Pleasant climate and beautiful ambience both refer to desirable environmental conditions that are enjoyable and appealing to human senses.
           </p>
           {{-- <a href="#order-form" class="btn-common-white page-scroll">Order Now</a> --}}
           </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section>



  <!-- Food Gallery -->
  <section id="gallery" class="padding" style="background:url('/images/ban1.webp');background-size:cover">
    <div class="container">
        <div class="row">
       <div class="col-md-12 text-center">
          <h2 class="heading ">Have&nbsp; a&nbsp; Look&nbsp; at&nbsp; Five&nbsp; Star&nbsp; Garden&nbsp; Restaurant</h2>
          <hr class="heading_space">
          {{-- <div class="work-filter">
            <ul class="text-center">
               <li><a href="javascript:;" data-filter="all" class="active filter">All Food</a></li>
               <li><a href="javascript:;" data-filter=".starters" class="filter">Starters</a></li>
               <li><a href="javascript:;" data-filter=".drinks" class="filter">Drinks & Beverges</a></li>
               <li><a href="javascript:;" data-filter=".dinner" class="filter"> Dinner</a></li>
               <li><a href="javascript:;" data-filter=".lunch" class="filter">Breakfast & Lunch</a></li>
            </ul>
          </div> --}}
        </div>
      </div>
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




  <!-- facts counter  -->
  <section id="facts">
    <div class="container">
      <div class="row number-counters">
        <!-- first count item -->
        <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
          <div class="counters-item row">
          <i class="icon-smile"></i>
          <h2><strong data-to="4680">0</strong></h2>
            <p>Happy Customers</p>
          </div>
        </div>
        <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
          <div class="counters-item  row">
          <i class="icon-food"></i>
          <h2><strong data-to="865">0</strong></h2>
            <p>Dishes Served</p>
          </div>
        </div>
        <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="900ms">

          <div class="counters-item  row">
          <i class="icon-glass"></i>
          <h2><strong data-to="510">0</strong></h2>
            <p>Total Beverages</p>
          </div>
        </div>
        <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1200ms">
          <div class="counters-item  row">
          <i class="icon-coffee"></i>
          <h2><strong data-to="1350">0</strong></h2>
            <p>Cup of coffees</p>
          </div>
        </div>
      </div>
    </div>
  </section>














  <!--Featured Receipes -->
  <section id="news" class="bg_grey padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
        <h2 class="heading">Our &nbsp; Videos</h2>
        <hr class="heading_space">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="cheffs_wrap_slider">
            <div id="news-slider" class="owl-carousel">
                <div class="item">
                    <div class="wrap-col">
                        <div class="item-container">
                          <div class="image">
                            <img src="images/gal1.webp" alt="cook"/>
                            <div class="overlay">
                                <a class="video fancybox.iframe overlay-inner" href="https://www.youtube.com/embed/IXS8CqBiTrY?rel=0"><i class=" icon-eye6"></i></a>
                                {{-- <a class="fancybox overlay-inner" href="images/gal1.webp" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="item">
                    <div class="wrap-col">
                        <div class="item-container">
                          <div class="image">
                            <img src="images/gal2.webp" alt="cook"/>
                            <div class="overlay">
                                <a class="video fancybox.iframe overlay-inner" href="https://www.youtube.com/embed/2CyWrcXq_bo?rel=0"><i class=" icon-eye6"></i></a>
                                {{-- <a class="fancybox overlay-inner" href="images/gal1.webp" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="item">
                    <div class="wrap-col">
                        <div class="item-container">
                          <div class="image">
                            <img src="images/gal4.webp" alt="cook"/>
                            <div class="overlay">
                                <a class="video fancybox.iframe overlay-inner" href="https://www.youtube.com/embed/QtQY8NXBo04?rel=0"><i class=" icon-eye6"></i></a>
                                {{-- <a class="fancybox overlay-inner" href="images/gal1.webp" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="item">
                    <div class="wrap-col">
                        <div class="item-container">
                          <div class="image">
                            <img src="images/gal5.webp" alt="cook"/>
                            <div class="overlay">
                                <a class="video fancybox.iframe overlay-inner" href="https://www.youtube.com/embed/6rfBcImd-20?rel=0"><i class=" icon-eye6"></i></a>
                                {{-- <a class="fancybox overlay-inner" href="images/gal1.webp" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a> --}}
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


  <!-- testinomial -->
  <section id="testinomial" class="padding">
    <div class="container">

    <div class="row">
        <div class="col-md-12 text-center">
        <h2 class="heading">Our &nbsp; happy &nbsp; Customers</h2>
        <hr class="heading_space">
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
        <div id="testinomial-slider" class="owl-carousel text-center">
          <div class="item">
            <h3>Definitely a place for lunch or dinner with family and kids. Great location surrounded by hills and trees. Dabba style food. We took the rooftop hut and enjoyed it a lot with our kid. Price looks bit costly but consider it paid for the enjoyment.
            </h3>
            <p>Sathees Shanmugam</p>
          </div>
          <div class="item">
            <h3>Really nice place to enjoy . It is a pleasant location  near the mountain and u can spend ur valuable time with your family and kids . A separate play area for kids ,roof hut and relaxing environment .Its place for evening vibes and  dinner for the weekend.
            </h3>
            <p>Pranav Prem Kumar</p>
          </div>
          <div class="item">
            <h3>If you want to have calm dinner..this is the place to go. climate is always good and ambience would be the highlight..bun paraotta and hot pepper chicken would be the must try dishes...in addition to this they children's play area too.
            </h3>
            <p>Prem Maheswar</p>
          </div>
         </div>
        </div>
      </div>
    </div>
  </section>
@endsection
