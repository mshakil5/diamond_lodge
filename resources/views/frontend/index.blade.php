@extends('layouts.master')

@section('content')

<style>
    #riskfloater {
      background-color: green;
      left: 10px;
      position: fixed;
      padding: 8px 16px;
      background: green;
      color: #ffffff;
      cursor: pointer;
      bottom: 10px;
      z-index: 2;
      // -moz-border-radius: 3px;
      // -webkit-border-radius: 3px;
      // border-radius: 3px;
  }

  #cookiebar {
      position: fixed;
      bottom: 0;
      left: 5px;
      right: 5px;
      display: none;
      z-index: 200;
  }

      a{
          color: white;
          text-decoration: none;
      }



  #cookiebarBox {
      position: fixed;
      bottom: 0;
      left: 5px;
      right: 5px;
      // display: none;
      z-index: 200;
  }
  .containerrr {
      border-radius: 3px;
      background-color: white;
      color: #626262;
      margin-bottom: 10px;
      padding: 10px;
      overflow: hidden;
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      position: fixed;
      padding: 20px;
      background-color: #fff;
      bottom: -10px;
      width: 100%;
      -webkit-box-shadow: 2px 2px 19px 6px #00000029;
      box-shadow: 2px 2px 19px 6px #00000029;
      border-top: 1px solid #356ffd1c;
  }



  .cookieok {
      -moz-border-radius: 3px;
      -webkit-border-radius: 3px;
      border-radius: 3px;
      background-color: #e8f0f3;
      color: #186782 !important;
      font-weight: 600;
      // float: right;
      line-height: 2.5em;
      height: 2.5em;
      display: block;
      padding-left: 30px;
      padding-right: 30px;
      border-bottom-width: 0 !important;
      cursor: pointer;
      max-width: 200px;
      margin: 0 auto;

  }
  </style>

<section class="slider">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/frontend/images/1a.jpg')}}" class="d-block" alt="slider photo missing">
                <div class="carousel-text container">

                    <h1 class="main-title mb-1 text-light1.png">Book Direct <br> <span class="">Get 10% Discount</span></h1>
                    
                        <a href="" class="text-white text-decoration-none" title="Call Now"><h5 class="my-2 text-white"> 07778529048 | 07717941122</h5></a>
                 
                    

                    <h5 class="my-2 text-white">  </h5>
                    <div class="mt-4 d-flex flex-wrap align-items-center justify-content-center-sm">
                        <a href="https://via.eviivo.com/DiamondsYO31" target="_blank" class="btn-theme">
                            Book now
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> -->
    </div>
</section>



<section class="about py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto  text-justify">
                
                <div class="about-right ">
                    <p><b>Diamonds Lodge</b> is an elegant three story Victorian town house in a fantastic city centre location. The guest house presents itself as an ideal base for you to explore the historical city of York just 10 minutes walk from the Historic York Minster.
 
                     <br/><br/>Wigginton Road has excellent shops, restaurants and business, which provides top quality goods and services. 
 
                     <br/><br/><b>Diamonds Lodge</b> is also situated in an area of York, which is close to all of York's attractions such as The Jorvik Viking Centre, National Railway Museum, York Minister, Knavesmire Racecourse, The Shambles, York Dungeons and many more. <br/>
                     The perfect destination for a luxurious escape to the beautiful city of York, for a business trip in style or just to have a comfortable and relaxing mini-break. Choose from our cosy double en-suite, triple en-suite, or for a little extra space you can choose a family deluxe en-suite. 
                      
 
                     <br/><br/>Whichever you choose, your stay will be made complete with a comfy bed and spacious en-suite. As a guest you’ll also enjoy free Wi-Fi, flat screen TV and complimentary refreshments, so that you can rest easy during your stay. 
                     Our team at Diamonds Lodge will be more than happy to guide you at any of the famous destinations in the historical City of York. 
                     
 
                     <br/><br/>We will also strive to maintain a courteous and friendly atmosphere during your stay.</p>
                     </br>

                     <p>Limited Private parking available</p>
                     <p>Check-in time:  2:00 pm <br>Check-out time: 	10.30 am</p>
                     <p><b>Address & contact information:</b></p>
                     <p>2 Vyner Street</p>
                     <p>23 Wigginton Road</p>
                     <p>York </p>
                     <p>YO31 8HJ</p>
                     <br>
                     <p>For Booking: call 07340631122, 07778529048, 07717941122 <br>
                     Email: diamondslodgeyork@gmail.com</p>
                     <p>Directions:	(Link)</p>
                     <p>Public Parking: www.yourparkingspace.co.uk</p>
                     <p>Nearest Bus Stops: Wigginton Road (York Hospital), Haxby Road Primary School</p>
                 
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-3">
            <div class="blog-slider">

                {{-- Single room-Comfort-Ensuite --}}
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/posts/1.png')}}" alt="" style="height: 375px">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="https://via.eviivo.com/DiamondsGuestHseYO23" class="fs-4 link-title d-block my-3">
                            Single room-Comfort-Ensuite
                        </a>
                        <p>
                            Single room-Comfort-Ensuite
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/DiamondsGuestHseYO23" class="btn-theme d-block w-100 text-center">BOOK ROOMS</a>
                        </div>
                    </div>
                </div>

                {{-- Double room-Standard-Ensuite --}}
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/posts/4.png')}}" alt="" style="height: 375px">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="https://via.eviivo.com/DiamondsGuestHseYO23" class="fs-4 link-title d-block my-3">
                           Double room-Standard-Ensuite
                        </a>
                        <p>
                           Double room-Standard-Ensuite
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/CrosswaysYO318HJ" class="btn-theme d-block w-100 text-center">BOOK ROOMS</a>
                        </div>
                    </div>
                </div>

                {{-- Twin room-Ensuite --}}
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/posts/3.png')}}" alt="" style="height: 375px">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="" class="fs-4 link-title d-block my-3">
                            Twin room-Ensuite
                        </a>
                        <p>
                        Twin room-Ensuite,Ground Floor Twin bedded room
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/CrosswaysYO318HJ" class="btn-theme d-block w-100 text-center">BOOK ROOMS</a>
                        </div>
                    </div>
                </div>

                {{-- Double room-Ensuite - Base Rate --}}
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/posts/commingsoon.jpg')}}" alt="" style="height: 375px">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="" class="fs-4 link-title d-block my-3">
                            Double room-Ensuite - Base Rate
                        </a>
                        <p>
                            Double room-Ensuite - Base Rate
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/CrosswaysYO318HJ" class="btn-theme d-block w-100 text-center">BOOK ROOMS</a>
                        </div>
                    </div>
                </div>

                {{-- Quad room-Superior-Ensuite with Shower --}}
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/posts/quad.jpg')}}" alt="" style="height: 375px">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="" class="fs-4 link-title d-block my-3">
                            Quad room-Superior-Ensuite with Shower
                        </a>
                        <p>
                            Quad room-Superior-Ensuite with Shower - Base Rate
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/CrosswaysYO318HJ" class="btn-theme d-block w-100 text-center">BOOK ROOMS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







<section class="galery spacer">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8 mx-auto ">
                <h2 class="title-global text-center">
                    Photo <span class="txt-primary">Gallery </span>
                </h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="popup-gallery">
                        <a href="{{ asset('assets/frontend/images/gallery/1.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/1.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a>
                        <a href="{{ asset('assets/frontend/images/gallery/2.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/2.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a>
                        <a href="{{ asset('assets/frontend/images/gallery/3.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/3.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a>
                       <a href="{{ asset('assets/frontend/images/gallery/3.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/4.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a>
                            <a href="{{ asset('assets/frontend/images/gallery/1.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/5.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a>
                        <a href="{{ asset('assets/frontend/images/gallery/2.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/6.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a>
                        {{-- <a href="{{ asset('assets/frontend/images/gallery/3.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/7.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a>
                       <a href="{{ asset('assets/frontend/images/gallery/3.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/8.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-section py-5 bg-light" id="contact">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-12 mx-auto ">
                <h2 class="title-global text-center">
                    Contact & Location
                </h2>
                <p><b>From Train Station (1.3 miles)</b></p>
                <p>1. Head north on Queen St/A1036, Continue to follow A1036 2. Slight right onto Station Rd 3. Continue onto Museum St/A1036 4. Turn left onto St Leonard's Pl/A19 5. Take the 2nd right onto Gillygate/A1036, Continue to follow Gillygate 6. Continue onto Clarence St/B1363 7. Keep left at the fork, Continue to follow B1363 8. Turn right onto Fountayne St 9. Turn Left.</p>
                <p><b>Road from Hertz Car Hire York Station</b></p>
                <p>1. Head northeast toward Station Rd/A1036 2. Turn left onto Station Rd/A1036, Continue to follow A1036 3. Slight right onto Station Rd 4. Continue onto Museum St/A1036 5. Turn left onto St Leonard's Pl/A19 6. Take the 2nd right onto Gillygate/A1036, Continue to follow Gillygate 7. Continue onto Clarence St/B1363 8. Keep left at the fork, Continue to follow B1363 9. Turn right onto Fountayne St 10. Turn left</p>
            </div>
        </div>
       <div class="row">

            <div class="col-md-6">

                @if ($message = Session::get('message'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

               <form action="{{route('contact.submit')}}" method="post" class="form-custom p-4 border mb-3">
                @csrf
                    <div class="form-group mb-3">
                        <input class="form-control fw-bold" type="text"  name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control fw-bold" type="email"  name="email"
                            placeholder="Email" required>
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control fw-bold" type="text" name="subject"
                            placeholder="Subject" required>
                    </div>
                    <div class="form-group mb-3">
                        <textarea class="form-control fw-bold" rows="3" name="message"
                            placeholder="Message" required></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn-theme text-center border-0">Send</button>
                    </div>
                </form>
            </div>
            
            
            <div class="col-md-6">
                
               
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2346.75580074679!2d-1.0842802236884987!3d53.971604072477234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4879312c492c7cd1%3A0xdf8a7fc8293404c7!2sDiamonds%20lodge!5e0!3m2!1sen!2suk!4v1688472820836!5m2!1sen!2suk" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

{{-- <div id="cookiebarBox" class="cookieBox bg-primary py-4  text-white position-fixed bottom-0 left-0 right-0">
    <div class="container text-center">
        Like most websites, this site uses cookies to assist with navigation and your ability to provide feedback, analyse your use of products and services so that we can improve them, assist with our personal promotional and marketing efforts and provide consent from third parties.
        <br>
        <div class="col-md-3 d-flex align-items-center justify-content-center">
            <a id="cookieBoxok" class="btn btn-sm btn-primary my-3 px-4 text-center" data-cookie="risk">Accept</a>
        </div>
    </div>
</div> --}}

<div id="cookiebarBox" class="os-animation" data-os-animation="fadeIn" >
    <div class="containerrr risk-dismiss " style="display: flex;" >
          <div class="container">
            <div class="row">
                <div class="col-md-9">
                <p class="text-left">
               <h1 class="d-inline text-primary"><span class="iconify" data-icon="iconoir:half-cookie"></span> </h1>
               Like most websites, this site uses cookies to assist with navigation and your ability to provide feedback, analyse your use of products and services so that we can improve them, assist with our personal promotional and marketing efforts and provide consent from third parties.
            </p>

                </div>
                <div class="col-md-3 d-flex align-items-center justify-content-center">
                    <a id="cookieBoxok" class="btn btn-sm btn-primary my-3 px-4 text-center" data-cookie="risk">Accept</a>
                </div>
            </div>
          </div>
    </div>
</div>

@endsection

@section('script')

<script>
    // if you want to see a cookie, delete 'seen-cookiePopup' from cookies first.
    
    jQuery(document).ready(function($) {
       // Get CookieBox
      var cookieBox = document.getElementById('cookiebarBox');
        // Get the <span> element that closes the cookiebox
      var closeCookieBox = document.getElementById("cookieBoxok");
        closeCookieBox.onclick = function() {
            cookieBox.style.display = "none";
        };
    });
    
    (function () {
    
        /**
         * Set cookie
         *
         * @param string name
         * @param string value
         * @param int days
         * @param string path
         * @see http://www.quirksmode.org/js/cookies.html
         */
        function createCookie(name, value, days, path) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toGMTString();
            }
            else expires = "";
            document.cookie = name + "=" + value + expires + "; path=" + path;
        }
    
        function readCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }
    
        // Set/update cookie
        var cookieExpiry = 30;
        var cookiePath = "/";
    
        document.getElementById("cookieBoxok").addEventListener('click', function () {
            createCookie('seen-cookiePopup', 'yes', cookieExpiry, cookiePath);
        });
    
        var cookiePopup = readCookie('seen-cookiePopup');
        if (cookiePopup != null && cookiePopup == 'yes') {
            cookiebarBox.style.display = 'none';
        } else {
            cookiebarBox.style.display = 'block';
        }
    })();
    
    </script>

@endsection