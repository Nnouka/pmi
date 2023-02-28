<div class="col-lg-3 col-sm-6 col-md-6 m-{{$m}} shadow" style="background: white;border-radius: 4px;">
    <div class="position-relative doctor-inner-box">
        <div class="doctor-profile">
            <div class="doctor-img">
                <a href="{{route('product', ['slug' => $product->slug])}}">
                    <img src="{{asset($product->images[0])}}" alt="{{$product->name}}" class="img-fluid w-100">
                </a>
            </div>
        </div>
        <div class="content mt-3">
            <h4 class="mb-0"><a href="{{route('product', ['slug' => $product->slug])}}">{{$product->name}}</a></h4>
            @foreach($product->infos as $info)
                <p>{{ $info }}</p>
            @endforeach    
        </div> 
      </div>
</div>