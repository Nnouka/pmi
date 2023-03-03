@extends('layouts.main')
 
@section('title', $product->name)
@section('content')

<section class="product-header pt-0">
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
</section>
<section class="details-wrapper" style="padding: 15px;">
   <div class="row" style="margin: 0 15px;">
    @include('partials.product.product-card', ['product' => $product, 'm' => 0, 'classes' => 'col-lg-4 col-sm-12 col-md-6'])
    @if(isset($product->composition_lines) && count($product->composition_lines) > 0 && strlen($product->composition_lines[0]) > 0)
    <div class="col-lg-4 col-md-6 col-sm-12 mt-2" style="color: white;">
      <h3 style="color: #ccc;">Composition</h3>
      @foreach($product->composition_lines as $composition)
          <p>{{ $composition }}</p>
      @endforeach
    </div>
    @endif
    @if(isset($product->intended_use_lines) && count($product->intended_use_lines) > 0 && strlen($product->intended_use_lines[0]) > 0)
    <div class="col-lg-4 col-md-6 col-sm-12 mt-2" style="color: white;">
      <h3 style="color: #ccc;">Intended Use</h3>
      @foreach($product->intended_use_lines as $intended_use)
          <p>{{ $intended_use }}</p>
      @endforeach
    </div>
    @endif
   </div>
    @include('partials.product.manufacturer')
</section>

@endsection
