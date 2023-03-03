<div class="col-lg-4 col-sm-12 col-md-6 mb-4">
    <div class="position-relative doctor-inner-box">
        <div class="doctor-profile">
            <div class="doctor-img">
                <a href="{{asset('assets/notices/'.$product->notice_file.'.pdf')}}" target="__blank">
                    <img src="{{asset('assets/notices/thumbnails/'.$product->notice_file.'.png')}}" alt="{{$product->notice_file}}" class="img-fluid w-100">
                </a>
            </div>
        </div>
        <div class="content mt-3">
            <h4 class="mb-0"><a href="{{asset('assets/notices/'.$product->notice_file.'.pdf')}}" target="__blank">{{$product->notice_file}}</a></h4>
        </div> 
    </div>
</div>
