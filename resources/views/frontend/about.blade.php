@extends('layouts.master')

@section('content')

<style>
    p{
        color: white;
    }
</style>
<section class="spacer bg-dark" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto ">
                <p class="text-light d-block mt-3  text-center">
                    <img src="{{ asset('assets/frontend/images/diamond.png')}}" width="300px">
                </p>
            </div>
            <div class="col-md-8 mx-auto ">
                <h2 class="title-global text-center"  style="color: #bf00db;">Welcome to Diamonds Lodge <br> </h2>
            </div>
            <div class="col-md-9 mx-auto text-justify">
                <div class="about-right ">
                   <p><b>Diamonds Lodge</b> is an elegant three story Victorian town house in a fantastic city centre location. The guest house presents itself as an ideal base for you to explore the historical city of York just 10 minutes walk from the Historic York Minster.

                    <br/><br/>Wigginton Road has excellent shops, restaurants and business, which provides top quality goods and services. 

                    <br/><br/><b>Diamonds Lodge</b> is also situated in an area of York, which is close to all of York's attractions such as The Jorvik Viking Centre, National Railway Museum, York Minister, Knavesmire Racecourse, The Shambles, York Dungeons and many more. <br/>
                    The perfect destination for a luxurious escape to the beautiful city of York, for a business trip in style or just to have a comfortable and relaxing mini-break. Choose from our cosy double en-suite, triple en-suite, or for a little extra space you can choose a family deluxe en-suite. 
                     

                    <br/><br/>Whichever you choose, your stay will be made complete with a comfy bed and spacious en-suite. As a guest you’ll also enjoy free Wi-Fi, flat screen TV and complimentary refreshments, so that you can rest easy during your stay. 
                    Our team at Diamonds Lodge will be more than happy to guide you at any of the famous destinations in the historical City of York. 
                    

                    <br/><br/>We will also strive to maintain a courteous and friendly atmosphere during your stay.</p>
                    <br>

                    <p><b>Limited Private parking available</b></p>
                     <p  style="color: red"><b>Check-in time:  2:00 pm <br>Check-out time: 	10.30 am</b></p>
                     <p><b>Address & contact information:</b></p>
                     <p>23 Wigginton Road</p>
                     <p>York </p>
                     <p>YO31 8HJ</p>
                     <br>
                     <p  style="color: red">For Booking: call 07340631122, 07778529048, 07717941122 <br>
                     Email: diamondslodgeyork@gmail.com</p>
                     <p>Directions:	(Link)</p>
                     <p>Public Parking: www.yourparkingspace.co.uk</p>
                     <p>Nearest Bus Stops: Wigginton Road (York Hospital), Haxby Road Primary School</p>
                
                </div>
            </div>
        </div>
    </div>
</section>






@endsection

@section('script')


<script>
    
</script>

@endsection