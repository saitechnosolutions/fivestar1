@extends('layouts.app')
@section('title','Five Star Garden - Events')
@section('main-content')

<section id="page_header">
    <div class="page_title">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
             <h2 class="title">Event Details</h2>
             {{-- <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit</p> --}}
          </div>
        </div>
      </div>
    </div>
    </section>


    <section id="blog" class="padding-top">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-7">
              <div class="blog_item padding-bottom">
                 <h2>{{ $eventdetails->title }}</h2>

                <div class="image_container" style="margin-top:20px">
                <img src="images/blog1.jpg" class="img-responsive" alt="blog post">
                </div>

                <div style="margin-top:20px">
                    {!! $eventdetails->description !!}
                </div>


              </div>


            </div>
            <div class="col-md-4 col-sm-5">
              <aside class="sidebar">

                 <div class="widget">
                   <h3>Categories</h3>
                   <ul class="widget_links">

                    @if($events)
                        @foreach ($events as $event)
                            <li><a href="/eventdetail/{{ $event->id }}">{{ $event->title }}</a></li>
                        @endforeach
                    @endif

                   </ul>
                 </div>

              </aside>
          </div>
          </div>
        </div>
      </section>
@endsection
