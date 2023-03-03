<div class="{{isset($classes) ? $classes : 'col-lg-3 col-sm-12 col-md-6'}} m-{{$m}} shadow" style="background: white;border-radius: 4px;">
    <div class="position-relative doctor-inner-box" style="margin-bottom:0;">
        <div class="doctor-profile">
            <div class="doctor-img">
                <a href="{{route('product', ['slug' => $product->slug])}}">
                    <img class="col-md-8" src="{{asset($product->images[0])}}" alt="{{$product->name}}" class="img-fluid w-100">
                </a>
            </div>
        </div>
        <div class="content mt-3" style="margin-bottom:0;">
            <h4 class="mb-0"><a href="{{route('product', ['slug' => $product->slug])}}">{{$product->name}}</a></h4>
            <p class="product-description-para">
                {{ $product->description }}
            </p>  
        </div> 
      </div>
      <div class="nav-item dropdown mb-4" style="margin-top:0;">
        <a class="dropdown-toggle" href="{{route('certifications')}}" id="{{'dropdown'.$product->slug}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">voir plus<i class="icofont-thin-down"></i></a>
        <ul class="dropdown-menu" aria-labelledby="{{'dropdown'.$product->slug}}">
            <li><a class="dropdown-item" href="{{asset('assets/certifications/'.$product->certification_file.'.pdf')}}" target="__blank">Certifications</a></li>
            <li><a class="dropdown-item" href="{{asset('assets/notices/'.$product->notice_file.'.pdf')}}" target="__blank">Notices</a></li>
            <li><a class="dropdown-item" href="{{asset('assets/techfiles/'.$product->tech_file.'.pdf')}}" target="__blank">Dossiers techniques</a></li>
        </ul>
      </div>
</div>