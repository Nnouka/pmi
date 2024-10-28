@extends('layouts.main')
 
@section('title', $member->name)
@section('content')

<section class="product-header pt-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="title-span">{{ $member->title }}</span>
          <h1 class="text-capitalize mb-5 text-lg title-text">{{ $member->name }}</h1>
          <p class="description-text p-0 m-1">{{$member->qualification}}</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="details-wrapper" style="padding: 15px;">
   <div class="row" style="margin: 0 15px; justify-content: center;">
    @include('partials.team.card', ['member' => $member, 'm' => 0, 'classes' => 'col-6 full-view'])
   </div>
</section>

@endsection
