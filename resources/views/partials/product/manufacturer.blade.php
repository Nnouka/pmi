<section class="manufacturer-wrapper">
	<div class="m-2">
        <h3>MANUFACTURER</h3>
        <h4>{{$manufacturer->name}}</h4>
        <p class="p-0 m-0">{{$manufacturer->address}}</p>
        <p class="p-0 m-0"><span>{{$manufacturer->zip_code}}</span> <span>{{$manufacturer->city}}</span></p>
    </div>
    <div class="m-2">
        <p class="p-0 m-0">{{$manufacturer->email}}</p>
        <p class="p-0 m-0">Phone: <span>{{$manufacturer->phone}}</span></p>
    </div>
</section>