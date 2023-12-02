@extends('layouts.master')

@section('content')



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


@endsection

@section('script')


<script>
    
</script>

@endsection