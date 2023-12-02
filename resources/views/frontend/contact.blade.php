@extends('layouts.master')

@section('content')



<section class="blog-section py-5 bg-light" id="contact">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-12 mx-auto ">
                <h2 class="title-global text-center">
                    Contact & Location
                </h2>
                <p><b>From Train Station (1.5 miles)</b></p>
                <p>Continue to Station Rd/A1036 1 min (423 ft) Follow A1036, B1363 and Haxby Rd to Rose St 7 min (1.3 mi) Continue on Rose St. Drive to Vyner St</p>
                <br/>
                <p><b>Road from A64 (4.0 miles)</b></p>
                <p>If you are travelling by car, we have a detailed map of the local routes by road below. To avoid the city traffic and one-way system, we suggest that you follow the Northen Ring Road (A1237). Turn into York at Roundabout with B1363 and follow signs for District Hospital. Turn sharp left at traffic lights onto Haxby Road after the Hospital. Continue up past Diamonds Villa (on Left) then take second left into Rose Street (Before Bridge)</p>


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
                
               
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2346.745528269417!2d-1.0802137841378687!3d53.971786480114865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4879319862e2344f%3A0xed396ee67a5dbdd!2sOYO%20Diamonds%20Villa!5e0!3m2!1sen!2suk!4v1688472725622!5m2!1sen!2suk" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


            </div>
        </div>
    </div>
</section>


@endsection

@section('script')


<script>
    
</script>

@endsection