@extends('layouts.main')
 
@section('title', $product->name)
@section('content')

<section class="product-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
			<span class="title-span">Products</span>
			<h1 class="text-capitalize mb-5 text-lg title-text">{{ $product->name }}</h1>
            @foreach($product->description_lines as $desc_line)
                <p class="description-text p-0 m-1">{{$desc_line}}</p>
            @endforeach
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#28477f" fill-opacity="1" d="M0,256L60,213.3C120,171,240,85,360,96C480,107,600,213,720,250.7C840,288,960,256,1080,218.7C1200,181,1320,139,1380,117.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
  </svg>
</section>
<section class="details-wrapper">
   <div class="row" style="margin: 0 15px;">
    @include('partials.product.product-card', ['product' => $product, 'm' => 0])
    @if(isset($product->packaging_lines) && count($product->packaging_lines)  > 0 && strlen($product->packaging_lines[0]) > 0)
      <div class="col-4" style="color: white;">
        <h3 style="color: #ccc;">Packaging</h3>
        @foreach($product->packaging_lines as $packaging)
            <p>{{ $packaging }}</p>
        @endforeach
      </div>
    @endif
    @if(isset($product->composition_lines) && count($product->composition_lines) > 0 && strlen($product->composition_lines[0]) > 0)
    <div class="col-4" style="color: white;">
      <h3 style="color: #ccc;">Composition</h3>
      @foreach($product->composition_lines as $composition)
          <p>{{ $composition }}</p>
      @endforeach
    </div>
    @endif
   </div>
    @include('partials.product.manufacturer')
</section>
<!-- /portfolio -->
@include('partials.appointment')

@endsection
