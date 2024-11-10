@extends('layouts.main')

@section('title', 'About Us')
@section('content')


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize mb-5 text-lg">Who are We?</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Our blog</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">

    <div class="row mb-5 mt-4 m-0">

      <p class="mt-3 mb-4">PULPIT MANAGEMENT INTERNATIONAL (PMI) is a missionary organization of the Church of Christ, affiliated to Church of Christ Butere
        Western Kenyan</p>


      <div class="mx-auto section-title">
        <h2 class="text-center">Our History</h2>
        <p class="mb-2  ">Ojenike Barnabas Ikechukwu arrived in Port Harcourt, his home state, around October 2021 after strengthening Churches in Ghana</p>
        <p class="mb-2 ">On the 27th December, through the help of God, the servant of God, Ojenike Barnabas Ikechukwu, initiated Pulpit Management International</p>
        <p class="mb-2 ">He then communicated Sister Mhina Brenzuela in Philippines, the first who was trained on the Pulpit Management certificate course </p>
        <p class="mb-2 ">Later, he went to Omoku, his home town to announce the Pulpit Management International to his people </p>
        <p class="mb-2 ">He then travelled to Imo state to train Min. Tochukwu Daniel on the course</p>
        <p class="mb-2 ">Later on, he travelled back to Ghana for mission work</p>
        <p class="mb-2 ">To the glory of God, Pulpit Management International entered East Africa through Min. Richard Afuma, also Pulpit Management International, entered central Africa through Min. Mebu Elvis Nyama </p>
        <p class="mb-2 ">Today, Pulpit Management is now in 25 different countries across the globe</p>
      </div>

      <div class="mx-auto section-title">
        <p class="mb-2">Pulpit Management International has strengthened so many congregations of Churches of Christ. We have established new congregations
          We have trained hundreds of preachers in many countries.
          We are seriously engaged in soul winning outreach.
          To join our mission team, please contact us. </p>
      </div>
      @include('partials.about.mission')
    </div>
</section>

@endsection