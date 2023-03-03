<div class="col-lg-4 col-sm-12 col-md-6 mb-4">
    <div class="position-relative doctor-inner-box">
        <div class="doctor-profile">
            <div class="doctor-img">
                <a href="{{asset('assets/techfiles/'.$product->tech_file.'.pdf')}}" target="__blank">
                    <img src="{{asset('assets/techfiles/thumbnails/'.$product->tech_file.'.png')}}" alt="{{$product->tech_file}}" class="img-fluid w-100">
                </a>
            </div>
        </div>
        <div class="content mt-3">
            <h4 class="mb-0"><a href="{{asset('assets/techfiles/'.$product->tech_file.'.pdf')}}" target="__blank">{{$product->tech_file}}</a></h4>
        </div> 
    </div>
</div>
