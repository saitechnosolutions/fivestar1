@extends('layouts.app')
@section('title','Five Star Garden - Contact Us')
@section('main-content')

<section id="page_header">
    <div class="page_title">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
             <h2 class="title">Contact Us</h2>
             {{-- <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit</p> --}}
          </div>
        </div>
      </div>
    </div>
</section>

<section class="padding">
    <h3 class="hidden">hidden</h3>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="map1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.597338872353!2d76.88584121465799!3d11.068785592123511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8590fd628f909%3A0x9a742ad73ad5b2b7!2sFivestar%20Garden!5e0!3m2!1sen!2sin!4v1676357307749!5m2!1sen!2sin" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>
        </div>
      </div>
    </section>


    <section class="padding bg_grey" id="location">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-8">
              <h2 class="heading">Get in Touch</h2>
              <hr class="heading_space">
              <form class="callus"  action="/formsubmit" id="contact_form" method="POST">
                @csrf
                <div class="row">
                 <div class="col-md-12">
                    <div id="result" class="text-center form-group"></div>
                 </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" type="text" name="f_name" id="f_name"  placeholder="Name" required />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" type="text" name="subject" id="l_name"  placeholder="Subject" required />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" type="email" name="email" id="email"  placeholder="Email Address" required />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" type="text" name="phone" id="phone" required placeholder="Phone No">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea placeholder="Message" name="message" id="message"></textarea>
                    </div>
                    @if(session()->get('success'))
                    <div class="alert alert-success" role="alert">
                        {{session()->get('success')}}
                    </div>
                    @endif
                    <div class="form-group">
                       <div class="btn-submit button3">
                      <input type="submit" value="Submit" id="btn_contact_submit">
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-4 col-sm-4 bistro">
              <h2 class="heading">Five&nbsp; Star&nbsp; Garden</h2>
              <hr class="heading_space">
              <p><strong>Phone:</strong> <a href="tel:+91-8098789789">+91-8098789789</a></p>
              {{-- <p><strong>Email:</strong> <a href="mailto:support@bistro.com">support@bistro.com</a></p> --}}
              {{-- <p><a href="#.">Web: www.bistro.com</a></p> --}}
              <p><strong>Address:</strong> No.2, 19A, Thadagam Main Rd, Thiruvalluvar Nagar, Somayanur, Tamil Nadu 641108</p>
                <ul class="social_icon">
                  <li class="black"><a href="https://www.facebook.com/people/Five-Star-Garden/100066786547704/" class="facebook"><i class="icon-facebook5"></i></a></li>
                  <li class="black"><a href="#." class="twitter"><i class="icon-instagram"></i></a></li>
                  <li class="black"><a href="#." class="google"><i class="icon-youtube"></i></a></li>
                </ul>
            </div>
          </div>
        </div>
      </section>


@endsection
