@extends('layouts.app')
@section('title','Five Star Garden - About Us')
@section('main-content')
<section id="page_header">
    <div class="page_title">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
             <h2 class="title">About US</h2>
             {{-- <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit</p> --}}
          </div>
        </div>
      </div>
    </div>
    </section>

    <section id="overview" class="padding-top padding-bottom" style="background:url('/images/ban1.webp');background-size:cover">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
               <h2 class="heading">Restaurant &nbsp; Overview</h2>
               <hr class="heading_space">
               <p style="font-size:18px;line-height:2.0">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. quam nunc putamus parum claram, Mirum est notare quam littera gothica Mirum est notare quam littera gothica Mirum est notare quam littera gothicaMirum est notare quam littera gothica. Mirum est notare quam littera gothica Mirum est notare quam littera gothica Mirum est notare quam littera gothicaMirum est notare quam littera gothica.</p>
            </div>
            <div class="col-sm-6">
                <img src="https://scontent.fcjb1-2.fna.fbcdn.net/v/t1.6435-9/170166903_107087481495521_8738709145869635380_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=0debeb&_nc_ohc=54jUHjJ4O2sAX8cSRaS&_nc_ht=scontent.fcjb1-2.fna&oh=00_AfDXFRQpVQo5c_BCOKC-mijIfsBv_xVMdtO0XCRjp7A2bQ&oe=64142C43" class="img-responsive" style="border-radius:12px">
            </div>
          </div>
        </div>
      </section>
@endsection
